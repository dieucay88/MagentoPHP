<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 3:53 CH
 */
class Giang_Blog_Block_Adminhtml_Registries_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
        public function __construct()
        {
            parent::__construct();
            $this->_objectId = 'id';
            $this->_blockGroup = 'giang_blog';
            $this->_controller = 'adminhtml_registries';
            $this->_mode = 'edit';
            $this->_updateButton('save', 'label', Mage::helper
            ('giang_blog')->__('Save Registry'));
            $this->_updateButton('delete', 'label',
                Mage::helper('giang_blog')->__('Delete Registry'));
        }

        public function getHeaderText()
        {
            if (Mage::registry('registry_data') && Mage::registry('registry_data')->getUserId())
            return Mage::helper('giang_blog')->__("Edit Registry",Mage::registry('registry_data')->getUserId());

            return Mage::helper('giang_blog')->__('Add Registry');
        }

}
