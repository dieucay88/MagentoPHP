<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 9:33 SA
 */
class Dtn_Return_Block_Adminhtml_Customer_Edit_Tab_Return_List extends Mage_Adminhtml_Block_Widget_Grid {
    public  function  __construct()
    {
        parent::__construct();
        $this->setId('returnList');
        $this->setUseAjax(true);
        $this->setDefaultSort('event_date');
        $this->setFilterVisibility(false);
        $this->setPagerVisibility(false);
//        $collection = Mage::getModel('giang_blog/blogpost')->getCollection();
//        print_r($collection);die;

    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('dtn_return/return')->getCollection();
        //->addFieldToFilter('main_table.customer_id',$this->getRequest()->getParams('id'));
        $this->setCollection($collection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    protected function _prepareColumns()
    {
        $this->addColumn('return_id',array(
            'header' => Mage::helper('dtn_return')->__('User ID'),
            'width'  => 50,
            'index'  => 'return_id',
            'sortable' => false,
        ));

        $this->addColumn('firstname',array(
            'header' => Mage::helper('dtn_return')->__('First Name'),
            'width'  => 50,
            'index'  => 'firstname',
            'sortable' => false,
        ));

        $this->addColumn('lastname',array(
            'header' => Mage::helper('dtn_return')->__('Last Name'),
            'width'  => 50,
            'index'  => 'lastname',
            'sortable' => false,
        ));

        $this->addColumn('customer',array(
            'header' => Mage::helper('dtn_return')->__('Customer'),
            'width'  => 50,
            'index'  => 'customer',
            'sortable' => false,
        ));

        return parent::_prepareColumns(); // TODO: Change the autogenerated stub
    }
}











































