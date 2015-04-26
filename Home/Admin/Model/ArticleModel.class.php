<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
    /** 
     * 添加文章发布时间
     */
    protected $_auto = array(
        array('article','tag',1,'callback'),
        array('posttime','time',1,'function'),
    );

    /**
     * 验证添加文章是否符合
     */
    protected $_validate = array(
        array('title', 'require', '标题不能为空', 1, '', 1),
        array('type', 'require', '类型不能为空', 1, '', 1),
        array('label', 'require', '标签不能为空', 1, '', 1),
        array('article', 'require', '文章不能为空', 1, '', 1),
        array('display', 'require', '状态不能为空', 1, '', 1),
    );

    /**
     * 将特殊的HTML实体转换回普通字符
     */
    protected function tag($article) {
        return htmlspecialchars_decode($article);
    }
}
