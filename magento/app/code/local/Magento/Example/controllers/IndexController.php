<?php
/**
 * Created by PhpStorm.
 * User: VuHoangGiang
 * Date: 4/26/2016
 * Time: 11:57 PM
 */
class Magento_Example_IndexController extends  Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        $this->loadLayout();
        $block = $this->getLayout()
            ->createBlock('core/text', 'example-block')
            ->setText('<h1>This is a text block</h1>');

        $this->_addContent($block);
        $this->renderLayout();
    }
}
