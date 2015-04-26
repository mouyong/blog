<?php
namespace Home\Controller;
/**
 * 网站前台
 */
class IndexController extends CommonController {
    /**
     * 主页
     */
    public function index() {
        parent::_query();
        // 查询最新文章,并分页
        parent::_page('article', 'id, type, title, article, posttime', 3, "display = '1'");
        
        $this->display();
    }

    /**
     * About
     */
    public function about() {
        parent::_query();
        // 查询about表,分配数据,并调用模板
        parent::_page('about', 'key, value', '', '', '');

        $this->display();
    }

    /**
     * Article
     */
    public function article() {
        parent::_query();
        // 查询article表,分配数据,并调用模板
        parent::_page('article', 'type, title, article, posttime', '', "id = '".$_GET['id']."'", '' ,'find');

        $this->display();
    }

    /**
     * Learn
     */
    public function learn() {
        parent::_query();
        // 查询article表中的blog数据,分配数据,并调用模板
        parent::_page('article', 'id, type, title, article, posttime', 5, "type = 'blog' && display = '1'");

        $this->display();
    }

    /**
     * Left
     */
    public function left() {
        parent::_query();
        // 查询article表中的left数据,分配数据,并调用模板
        parent::_page('article', 'id, type, title, article, posttime', 5, "type = 'left' && display = '1'");

        $this->display();
    }

    /**
     * label_group
     */
    public function group() {
        parent::_query();

        // 查询article表中的label分组,分配数据,并调用模板
        $group = parent::_page('article', 'id, type, title, article, posttime', 5, "label like '%".$_GET['label']."%' && display = '1'");
        
        $this->assign('labels',$_GET['label']);

        $this->display();
    }
}
