<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 03/05/2016
 * Time: 10:25 SA
 */
class Dtn_Return_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
//        if ($this->getRequest()->isPost()) {
//            $data3 = $this->getRequest()->getPost();
//            $data3['created_at'] = date('Y-m-d');
//            $data3['return_unix'] = uniqid();
//            $sessionCustomer = Mage::getSingleton("customer/session");
//            if ($sessionCustomer->isLoggedIn()) {
//                $customer = $sessionCustomer->getCustomer();
//                $data3['customer_id'] = $customer->getId();
//                $data3['customer_firstname'] = $customer->getFirstname();
//                $data3['customer_lastname'] = $customer->getLastname();
//            }
            $data = Mage::app()->getRequest()->getParams();
            $errors = $this->validateForm($data['oder'], $data['sku']);
            if (count($errors) == 0) {
                $return = Mage::getModel('dtn_return/return');
                $return->addData($data)->save();

                $this->_redirect('*/*/list');
            } else {
                $adminSession = Mage::getSingleton('core/session');
                foreach ($errors as $error) {
                    $adminSession->addError(Mage::helper('dtn_return')->__($error));
                }
                $this->_redirect('*/*/index');
            }
        }
    
    public function validateForm($order_id,$sku)
{
    $errors = [];
    $orderInfo = Mage::getModel('sales/order')->loadByIncrementId($order_id);
    if ($orderInfo->hasData()) {
        $items = $orderInfo->getAllVisibleItems();
        $existsSku = false;
        foreach ($items as $item) {
            if ($item->getSku() == $sku) {
                $existsSku = true;
                break;
            }
        }
        if (!$existsSku) {
            $errors[] = 'Product Sku does not exists';
        }
    } else {
        $errors[] = 'Order ID does not exists';
    }
    return $errors;
        }


    
    public function listAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}