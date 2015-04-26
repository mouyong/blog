<?php
namespace Admin\Controller;
/**
 * About类
 */
class AboutController extends CommonController {
    /**
     * 调用添加About模板
     */
    public function save() {
        parent::_save();
    }

    /** 
     * 调用添加About功能
     */
    public function add() {
        parent::_add('about');
    }

    /**
     * 调用删除About功能
     */
    public function del() {
        parent::_del('about');
    }

    /**
     * 调用修改About模板
     */
    public function modify() {
        parent::_modify('about', 'id, key, value, display', 'id = '.$_GET['id']);
    }

    /**
     * 调用修改About功能
     */
    public function update() {
        parent::_update('about');
    }

	/**
	 * 列出所有About
	 */
	public function index() {
        parent::_ls('about', 'id, key, value, display');
	}

    /**
     * 空操作
     */
    public function _empty() {
        $this->show("404--未找到该操作:".ACTION_NAME);
    }
}