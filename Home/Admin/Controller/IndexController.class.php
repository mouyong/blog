<?php
namespace Admin\Controller;
/**
 * 后台管理
 */
class IndexController extends CommonController {
    // public function _before_index() {
    //     if(!isset($_SESSION['username']) || $_SESSION['username']==''){
    //         $this->redirect('Login/index');
    //     }
    // }
    /**
     * 调用后台管理页面
     */
    public function index() {
        parent::_nav();

        $this->display();
    }

    /**
     * 调用添加文章模板
     */
    public function save() {
        parent::_save();
    }

    /** 
     * 调用添加文章功能
     */
    public function add() {
        parent::_add('article');
    }

    /**
     * 调用删除文章功能
     */
    public function del() {
        parent::_del('article');
    }

    /**
     * 调用修改文章模板
     */
    public function modify() {
        parent::_modify('article', 'type, label, title, article, display', "id = ".$_GET['id']);
    }

    /**
     * 调用修改文章功能
     */
    public function update() {
        parent::_update('article');
    }
    
    /**
     * 查询文章
     */
    public function article() {
        parent::_nav();
        $id = parent::_page('article', 'id, type, label, title, article, display', 15);
        
        $this->display();
    }

    /**
     * 上传类
     */
    public function upload() {
        // 实例化上传类
        $upload = new \Think\Upload();

        // 设置附件上传大小
        $upload->maxSize = 3145728 ;

        // 设置附件上传类型
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg',);

        // 设置附件上传目录
        $upload->savePath = './';

        // 上传文件
        $info   =   $upload->upload();

        if(!$info) {
            $this->error($upload->getError());
        } else {
            $this->success('上传成功！');
        }
    }
}
