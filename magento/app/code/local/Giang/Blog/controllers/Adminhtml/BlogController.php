<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 27/04/2016
 * Time: 9:02 SA


 
 */
class Giang_Blog_Adminhtml_BlogController extends Mage_Adminhtml_Controller_Action{
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    public function editAction()
    {
        $id = $this->getRequest()->getParam('id', null);
        $registry = Mage::getModel('giang_blog/blogpost');
        if ($id) {
            $registry->load((int)$id);
            if ($registry->getId()) {
                $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
                if ($data) {
                    $registry->setData($data)->setId($id);
                }
            } else {
                Mage::getSingleton('adminhtml/session')->addError(Mage::helper('awesome')->__('The Gift Registry does not exist'));
                $this->_redirect('*/*/');
            }
        }
        Mage::register('registry_data', $registry);
        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
        $this->renderLayout();
    }

    public function saveAction()
    {
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            try {
                $id = $this->getRequest()->getParam('id');
                if ($data && $id) {
                    $registry = Mage::getModel('giang_blog/blogpost')->load($id);
                    $registry->addData($data)->setId($id)->save();
                    $this->_getSession()->addSuccess(
                        Mage::helper('giang_blog')->__('Edit Ngon !!'));
                    $this->_redirect('*/*/index');
                }else{
                    Mage::getModel('giang_blog/blogpost')->addData($data)->save();
                    $this->_getSession()->addSuccess(
                        Mage::helper('giang_blog')->__('Add Ngon !!'));
                    $this->_redirect('*/*/index');
                }
            } catch (Exception $e) {
                $this->_getSession()->addError(
                    Mage::helper('giang_blog')->__('An error occurred while saving the registry data. Please review the log and try again.'));
                Mage::logException($e);
                $this->_redirect('*/*/edit', array('user_id' => $this->getRequest()->getParam('user_id')));
                return $this;
            }
        }
    }
    public function newAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

    public function massDeleteAction()
    {
        $registryIds = $this->getRequest()->getParam('registries');
        if (!is_array($registryIds)) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('giang_blog')->__('Please select one or more registries.'));
        } else {
            try {
                $registry = Mage::getModel('giang_blog/blogpost');
                foreach ($registryIds as $registryId) {
                    $registry = Mage::getModel('giang_blog/blogpost');
                    $registry->load($registryId)
                        ->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Total of %d record(s) were deleted.', count($registryIds)));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody($this->getLayout()->createBlock('giang_blog/adminhtml_registries_grid')->toHtml());
    }
}