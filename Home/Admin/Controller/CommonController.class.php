<?php
namespace Admin\Controller;
/**
 * Common
 */
class CommonController extends \Think\Controller {
    // public function _initialize() {
    //     if(!isset($_SESSION['username']) || $_SESSION['username']==''){
    //         $this->redirect('Login/index');
    //     }
    // }
    /**
     * 生成验证码
     */
    protected function code() {
        $config = array('length'=>4,'imageW'=>0,'imageH'=>0,'useNoise'=>true,'fontSize'=>25,);

        $Verify = new \Think\Verify($config);
        
        $Verify->entry();
    }

    /**
     * 列出左侧导航
     */
    protected function _nav() {
        $data = self::_page('nav', 'id, model, zhli, enli, path, display', '', '', '');

        return $data;
    }

    /**
     * 查询信息并分页
     * @param string $table 查询的表
     * @param string $field 查询的字段
     * @param int $num 每页显示的数目
     * @param string $where 查询的条件
     * @param string $order 查询的顺序
     * @param string $query 查询方式
     * @return array $data 查询的结果
     */
    protected function _page($table = '', $field = '', $num = '', $where = '', $order = 'id desc', $query = 'select') {
        $data = M($table);

        if($num == '') {
            if($order == '') {
                if($where == '') {
                    $data = $data->field($field)->$query();
                } else {
                    $data = $data->where($where)->field($field)->$query();
                }
            } else {
                if($where == '') {
                    $data = $data->field($field)->order($order)->$query();
                } else {
                    $data = $data->where($where)->field($field)->order($order)->$query();
                }
            }
        } else {
            $count = $data->where($where)->count();

            $Page = new \Think\Page($count,$num);

            $show = $Page->show();

            if($order == '') {
                if ($where == '') {
                    $data = $data->field($field)->limit($Page->firstRow.','.$Page->listRows)->$query();
                } else {
                    $data = $data->where($where)->field($field)->limit($Page->firstRow.','.$Page->listRows)->$query();
                }
            } else {
                if ($where == '') {
                    $data = $data->field($field)->limit($Page->firstRow.','.$Page->listRows)->order($order)->$query();
                } else {
                    $data = $data->where($where)->field($field)->limit($Page->firstRow.','.$Page->listRows)->order($order)->$query();
                }
            }

            $this->assign('page',$show);

        }

        $this->assign(array(
            "$table" => $data,
        ));

        return $data;

    }
    
    /**
     * 修改前台导航为隐藏时将该导航下的文章也一并修改
     * @param string $where 查询条件
     */
    protected function _data($where = '') {
        self::_update('nav');
        
        $data = M('article')->where("type = '".$where."'")->field('id, display')->select();

        foreach ($data as $key => $value) {
            $count = count($key);
            for($i = 0; $i < $count; $i++) {
                M('article')->where("id = '".$data[$key]['id']."'")->setField('display', '0');
            }
        }
    }

    /**
     * 空操作
     */
    protected function _empty() {
        header("HTTP/1.0 404 Not Found");
        header("Location: ../Public/404.html");
        // $this->show("404--未找到该操作:".ACTION_NAME);
    }

    /**
     * 调用添加导航模板
     */
    protected function _save() {
        self::_nav();

        $this->display();
    }

    /** 
     * 调用添加功能
     * @param string $table 查询的表
     * @param string $modify 结束后跳转的模板
     */
    protected function _add($table = '', $modify = '') {
        $table = D($table);

        if(!$table->create()) {
            $this->error($table->getError());
        } else {
            $table->add();

            $this->success('添加成功', $modify);
        }
    }

    /**
     * 调用删除功能
     * @param string $table 查询的表
     */
    protected function _del($table = '') {
        $table = M($table);

        $count = $table->delete($_GET['id']);

        if($count > 0) {
            $this->success('数据删除成功!');
        } else {
            $this->error('数据不存在。删除失败!');
        }
    }

    /**
     * 调用修改模板
     * @param string $table 查询的表
     * @param string $field 查询的字段
     * @param string $where 查询的条件
     */
    protected function _modify($table = '', $field = '', $where = '') {
        self::_nav();
        self::_page($table, $field, '', $where, '', 'find');

        $this->assign('id', $_GET['id']);

        $this->display();
    }

    /**
     * 调用修改功能
     * @param string $table 查询的表
     */
    protected function _update($table = '') {
        $table = D($table);

        $count = $table->where('id = '.$_POST['id'])->save($_POST);
        if($count > 0) {
            $this->success('数据修改成功', "modify/id/{$_POST['id']}");
        } else {
            $this->error('数据修改失败');
        }
    }
    
    /**
     * 查询
     * @param string $table 查询的表
     * @param string $field 查询的字段
     */
    protected function _ls($table ='', $field = '') {
        self::_nav();
        self::_page($table, $field, '', '', '');
        
        $this->display();

    }
}