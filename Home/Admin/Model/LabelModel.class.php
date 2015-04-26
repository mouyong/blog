<?php
namespace Admin\Model;
use Think\Model;
class LabelModel extends Model{

    /**
     * 验证添加导航是否符合
     */
    protected $_validate = array(
        array('labels', 'require', '标签云不能为空', 1, '', 1),
        array('label', 'require', '标　签不能为空', 1, '', 1),
        array('display', 'require', '状　态不能为空', 1, '', 1),
    );
}
