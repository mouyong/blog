<?php
namespace Admin\Controller;
/**
 * 友链类
 */
class FlinkController extends CommonController {
    /**
     * 调用添加友链模板
     */
    public function save() {
        parent::_save();
    }

    /** 
     * 调用添加友链功能
     */
    public function add() {
        parent::_add('flink');
    }

    /**
     * 调用删除友链功能
     */
    public function del() {
        parent::_del('flink');
    }

    /**
     * 调用修改友链模板
     */
    public function modify() {
        parent::_modify('flink', 'id, webname, url, display', 'id = '.$_GET['id']);
    }

    /**
     * 调用修改友链功能
     */
    public function update() {
    
        parent::_update('flink');
    
    }

	/**
	 * 列出所有友链
	 */
	public function index() {
        parent::_ls('flink', 'id, webname, url, display');
	}
}