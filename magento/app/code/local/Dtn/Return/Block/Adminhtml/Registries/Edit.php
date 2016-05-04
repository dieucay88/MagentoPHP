<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 3:53 CH
 */
class Dtn_Return_Block_Adminhtml_Registries_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'return_id';
        $this->_blockGroup = 'dtn_return';
        $this->_controller = 'adminhtml_registries';
        $this->_mode = 'edit';
        $this->_updateButton('save', 'label', Mage::helper
        ('dtn_return')->__('Save Registry'));
        $this->_updateButton('delete', 'label',
            Mage::helper('dtn_return')->__('Delete Registry'));
    }

    public function getHeaderText()
    {
        if (Mage::registry('registry_data') && Mage::registry('registry_data')->getUserId())
            return Mage::helper('dtn_return')->__("Edit Registry",Mage::registry('registry_data')->getUserId());
        return Mage::helper('dtn_return')->__('Add Registry');
    }

}
