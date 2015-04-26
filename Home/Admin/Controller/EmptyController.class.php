<?php
namespace Admin\Controller;
/**
 * 空控制器
 */
class EmptyController extends \Think\Controller {
	public function index() {
		E('404--未找到该控制器:'.CONTROLLER_NAME);
	}
}