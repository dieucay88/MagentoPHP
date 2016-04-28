<?php class Giang_Blog_Model_Resource_Blogpost extends Mage_Core_Model_Resource_Db_Abstract

{    public function _construct()
    {
        $this->_init('giang_blog/blogpost', 'user_id');
    }
  
}
