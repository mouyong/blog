<?php
namespace Admin\Controller;
/**
 * 标签类
 */
class LabelController extends CommonController {
    /**
     * 调用添加标签模板
     */
    public function save() {
        parent::_save();
    }

    /** 
     * 调用添加标签功能
     */
    public function add() {
        parent::_add('label');
    }

    /**
     * 调用删除标签功能
     */
    public function del() {
        parent::_del('label');
    }

    /**
     * 调用修改标签模板
     */
    public function modify() {
        parent::_modify('label', 'id, labels, label, display', 'id = '.$_GET['id']);
    }

    /**
     * 调用修改标签功能
     */
    public function update() {
    
        parent::_update('label');
    
    }

	/**
	 * 列出所有标签
	 */
	public function index() {
        parent::_ls('label', 'id, labels, label, display');
	}
}