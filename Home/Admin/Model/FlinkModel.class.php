<?php
namespace Admin\Model;
use Think\Model;
class FlinkModel extends Model{
    /**
     * 验证添加导航是否符合
     */
    protected $_validate = array(
        array('webname', 'require', '网站名称不能为空', 1, '', 1),
        array('url', 'require', 'U R L不能为空', 1, '', 1),
        array('display', 'require', '状　　态不能为空', 1, '', 1),
    );
}
