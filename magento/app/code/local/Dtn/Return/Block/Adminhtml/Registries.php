<?php

class Dtn_Return_Block_Adminhtml_Registries extends Mage_Adminhtml_Block_Widget_Grid_Container{
    public function __construct()
    {
        $this->_controller = 'adminhtml_registries';
        $this->_blockGroup = 'dtn_return';
        $this->_headerText = Mage::helper
        ('dtn_return')->__('Danh Sach Return !!!');
        parent::__construct();
    }

}