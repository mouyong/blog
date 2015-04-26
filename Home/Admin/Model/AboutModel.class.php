<?php
namespace Admin\Model;
use Think\Model;
class AboutModel extends Model{
    /** 
     * HTML实体转换
     */
    protected $_auto = array(
        array('value','tag',1,'callback'),
    );

    /**
     * 验证添加导航是否符合
     */
    protected $_validate = array(
        array('key', 'require', 'Key不能为空', 1, '', 1),
        array('value', 'require', 'Value不能为空', 1, '', 1),
        array('display', 'require', '状　　态不能为空', 1, '', 1),
    );

    /**
     * 将特殊的HTML实体转换回普通字符
     */
    protected function tag($value) {
        return htmlspecialchars_decode($value);
    }
}
