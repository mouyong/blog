<?php
namespace Admin\Controller;
/**
 * 导航类
 */
class NavController extends CommonController {
    /**
     * 调用添加导航模板
     */
    public function save() {
        parent::_save();
    }

    /** 
     * 调用添加导航功能
     */
    public function add() {
        parent::_add('nav', 'index');
    }

    /**
     * 调用删除导航功能
     */
    public function del() {
        parent::_del('nav');

    }

    /**
     * 调用修改导航模板
     */
    public function modify() {
        parent::_nav();

        $navls = M('nav')->field('id, model, zhli, enli, path, display')->where('id = '.$_GET['id'])->find();

        $this->assign(array(
                'id' =>$_GET['id'],
                'navls' =>$navls,
            ));

        $this->display();
    }

    /**
     * 调用修改导航功能
     */
    public function update() {
        /*if($_POST['model'] == '1' && $_POST['display'] == '0') {
            switch ($_POST['zhli']) {
                case '学无止境':
                    parent::_data('blog');
                    break;
                case '慢 生 活':
                    parent::_data('left');
                    break;
                default:
                    parent::_update('nav');
                    break;
            }
        } else {*/
            parent::_update('nav');
        /*}*/
    }

	/**
	 * 列出所有导航
	 */
	public function index() {
        $data = parent::_nav();

        $this->assign('navls',$data);

        $this->display();
	}
}