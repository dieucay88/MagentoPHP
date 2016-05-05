<?php
class Dtn_Return_Model_Resource_Comment_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('dtn_return/comment');
        parent::_construct();
    }
}