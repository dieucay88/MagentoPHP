<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 03/05/2016
 * Time: 10:43 SA
 */
class Dtn_Return_Block_Return extends Mage_Core_Block_Template
{
    public function postReturn()
    {
        $model = Mage::getModel('dtn_return/return')->getCollection();
        return $model;
    }
}