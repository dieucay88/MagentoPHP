<?php
class Giang_Blog_Model_Resource_Blogpost_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('giang_blog/blogpost');
        parent::_construct();
    }
}