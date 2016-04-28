<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 9:21 SA
 */
class Giang_Blog_Block_Adminhtml_Customer_Edit_Tab_Blogpost extends Mage_Adminhtml_Block_Template implements Mage_Adminhtml_Block_Widget_Tab_Interface {
    public function  __construct()
    {
        $this->setTemplate('giang/blog/customer/main.phtml');
        parent::__construct();
    }
    public function getCustomerId(){
        return Mage::registry('current_customer')->getId();
    }
    public function getTabLabel()
    {
        return  $this->__('Blog Post');
        // TODO: Implement getTabLabel() method.
    }
    public function getTabTitle()
    {
        return $this->__('Click to the view customer Gift');
        // TODO: Implement getTabTitle() method.
    }
    
    public function canShowTab()
    {
        return true;
        // TODO: Implement canShowTab() method.
    }
    
    public function isHidden()
    {
        return  false;
        // TODO: Implement isHidden() method.
    }
}