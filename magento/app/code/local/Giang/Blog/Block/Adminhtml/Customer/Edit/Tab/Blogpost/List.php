<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 9:33 SA
 */
class Giang_Blog_Block_Adminhtml_Customer_Edit_Tab_Blogpost_List extends Mage_Adminhtml_Block_Widget_Grid {
    public  function  __construct()
    {
        parent::__construct();
        $this->setId('blogpostList');
        $this->setUseAjax(true);
        $this->setDefaultSort('event_date');
        $this->setFilterVisibility(false);
        $this->setPagerVisibility(false);
//        $collection = Mage::getModel('giang_blog/blogpost')->getCollection();
//        print_r($collection);die;

    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('giang_blog/blogpost')->getCollection();
        //->addFieldToFilter('main_table.customer_id',$this->getRequest()->getParams('id'));
        $this->setCollection($collection);
        return parent::_prepareCollection(); // TODO: Change the autogenerated stub
    }
    protected function _prepareColumns()
    {
        $this->addColumn('user_id',array(
            'header' => Mage::helper('giang_blog')->__('User ID'),
            'width'  => 50,
            'index'  => 'user_id',
            'sortable' => false,
        ));

        $this->addColumn('fullname',array(
            'header' => Mage::helper('giang_blog')->__('Full Name'),
            'width'  => 50,
            'index'  => 'fullname',
            'sortable' => false,
        ));

        $this->addColumn('username',array(
            'header' => Mage::helper('giang_blog')->__('User Name'),
            'width'  => 50,
            'index'  => 'username',
            'sortable' => false,
        ));

        $this->addColumn('password',array(
            'header' => Mage::helper('giang_blog')->__('Pass Word'),
            'width'  => 50,
            'index'  => 'password',
            'sortable' => false,
        ));

        return parent::_prepareColumns(); // TODO: Change the autogenerated stub
    }
}











































