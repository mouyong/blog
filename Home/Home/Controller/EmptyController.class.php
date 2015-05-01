<?php
namespace Home\Controller;
/**
 * 空控制器
 */
class EmptyController extends \Think\Controller {
	public function index() {
        header("HTTP/1.0 404 Not Found");
        header("Location: ../Public/404.html");
		// E('404--未找到该控制器:'.CONTROLLER_NAME);
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