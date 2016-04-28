<?php
class Giang_Blog_BlogController extends Mage_Core_Controller_Front_Action
{



    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }


    public function testAction() 
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function newAction(){
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    public function saveAction()
    {
        $data = Mage::app()->getRequest()->getParams();
        $data2 = Mage::getModel('giang_blog/blogpost')->setData($data);
        try{
            $data2->save();
        }catch (Exception $e){
            echo $e->getMessage();
        }
        $this->_redirect("giang/blog/test");
    }

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
       

    }


    public function _validateClass($data){
        $errs = [];
        if(trim($data['fullname'] == '')){
            $errs[] = ' Class Name is required';
        }
        return $errs;
    }



        public function updateAction()
        {
            $id = $this->getRequest()->getParam('user_id'); 
            if($this->getRequest()->isPost() && $id)
            {
                $data = $this->getRequest()->getPost();
                $validate_errs = $this->_validateClass($data);

                if (count($validate_errs))
                {
                  foreach ($validate_errs as $err )
                  {
                        echo $err;
                  }
                    require  false;
                }
            }try{
            $model = Mage::getModel('giang_blog/blogpost')->load($id)->addData($data);
            $model->setId($id)->save();
            $this->_redirect('giang/blog/test');
        }catch (Exception $e)
            {
                 echo $e->getMessage();
            }
            $this->_redirect('giang/blog/test');
        }


    

    public function delAction()
    {
        $rid = $this->getRequest()->getParam('user_id');
        $model = Mage::getModel('giang_blog/blogpost');
        try {
            $model->setId($rid)->delete();
            echo " Da xoa thanh cong";
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        $this->_redirect("giang/blog/test");
    }


}