<?php
namespace Admin\Controller;
/**
 * Common
 */
class LoginController extends \Think\Controller {
	/**
	 * 调用登陆模板
	 */
	public function index() {
		$this->display();
	}

	/**
	 * 进行登陆验证并保存SESSION
	 */
	public function signin() {
		$user = M('develop');
		$where['administrator'] = $_POST['username'];
		$where['password'] = md5(md5($_POST['password']));
		$count = $user->field('id')->where($where)->find();
		
		if($count){
			$_SESSION['administrator'] = $administrator;
			$_SESSION['id'] = $count['id'];
			$this->success('用户登录成功',U('Index/index'));
		}else{
			$this->error('该用户不存在');
		}
	}
}