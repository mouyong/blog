<?php
namespace Admin\Model;
use Think\Model;
class NavModel extends Model{

    /**
     * 验证添加导航是否符合
     */
    protected $_validate = array(
        array('model', 'require', '模　　块不能为空', 1, '', 1),
        array('zhli', 'require', '中文列表名称不能为空', 1, '', 1),
        array('enli', 'checkenli', '英文列表名称不能为空', 1, 'callback', 1),
        array('path', 'require', '路　　径不能为空', 1, '', 1),
        array('display', 'require', '状　　态不能为空', 1, '', 1),
    );

    /**
     * 验证英文列表名称是否可以为空
     */
    protected function checkenli() {
        if($_POST['model'] == 1) {
            if(!empty($_POST['enli'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}
