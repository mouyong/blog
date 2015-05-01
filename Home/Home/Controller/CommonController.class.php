<?php
namespace Home\Controller;
/**
 * Common
 */
class CommonController extends \Think\Controller {
    /**
     * 查询公共信息,分配数据
     */
    protected function _query() {
        self::_page('nav', 'zhli, enli, path', '', "model = '1' and display = '1'", '');

        self::_page('flink', 'webname, url', '', "display = '1'", '');

        self::_page('label', 'labels, label', '', 'display = 1', '');
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
     * 空操作
     */
    protected function _empty() {
        header("HTTP/1.0 404 Not Found");
        header("Location: ../Public/404.html");
        // E("404--未找到该操作:".ACTION_NAME);
    }
}
