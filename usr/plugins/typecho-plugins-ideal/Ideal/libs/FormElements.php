<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * FormElements.php
 * Author     : hewro
 * Date       : 2017/10/08
 * Version    :
 * Description: 后台外观设置中的表单中的一些基本元素
 */



class Ideal extends Typecho_Widget_Helper_Layout{
    public function __construct($html)
    {
        $this->html($html);
        $this->start();
        $this->end();
    }

    public function start(){}
    public function end(){}
}

class EndSymbol_ideal extends Typecho_Widget_Helper_Layout{
    public function __construct($num)
    {
        for ($i =0;$i<$num;$i++){
            $this->addItem(new Ideal("</div>"));
        }
    }
    public function start(){}
    public function end(){}
}

class Title_ideal extends Typecho_Widget_Helper_Layout
{
    /**
     * 构造函数,设置标签名称
     *
     * @access public
     * @param string $titleName
     * @param $subtitleName
     * @param bool $isOpen
     * @internal param string $tagName 标签名称
     * @internal param array $attributes 属性列表
     */
    public function __construct($titleName,$subtitleName = null,$isOpen = false)
    {
        $this->addItem(new Ideal('<div class="mdui-panel-item">'));

        $this->addItem(new Ideal('<div class="mdui-panel-item-header mdui-ripple">
'.$titleName. '<small class="mdui-panel-item-sub-header">'.$subtitleName.'</small></div>'));

        $this->addItem(new Ideal('<div class="mdui-panel-item-body">'));

    }

    public function start(){}
    public function end(){}
}






