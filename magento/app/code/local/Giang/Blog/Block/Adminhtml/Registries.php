<?php

class Giang_Blog_Block_Adminhtml_Registries extends Mage_Adminhtml_Block_Widget_Grid_Container{
    public function __construct()
    {
        $this->_controller = 'adminhtml_registries';
        $this->_blockGroup = 'giang_blog';
        $this->_headerText = Mage::helper
        ('giang_blog')->__('Gift Blog Manager');
        parent::__construct();
    }

}