<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 9:21 SA
 */
class Dtn_Return_Block_Adminhtml_Customer_Edit_Tab_Return extends Mage_Adminhtml_Block_Template implements Mage_Adminhtml_Block_Widget_Tab_Interface {
    public function  __construct()
    {
        $this->setTemplate('dtn/return/customer/return.phtml');
        parent::__construct();
    }
    public function getCustomerId(){
        return Mage::registry('current_customer')->getId();
    }
    public function getTabLabel()
    {
        return  $this->__('Return');
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