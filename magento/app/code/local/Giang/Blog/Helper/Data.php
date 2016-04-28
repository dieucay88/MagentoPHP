<?php
/**
 * Created by PhpStorm.
 * User: DTN
 * Date: 25/04/2016
 * Time: 10:12 SA
 */
class Giang_Blog_Helper_Data extends Mage_Core_Helper_Abstract {
    public function getGiangBlog(){
        $model = Mage::getModel('giang_blog/blogpost')->getCollection();
        return $model;
    }
}