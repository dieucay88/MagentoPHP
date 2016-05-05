<?php
class Dtn_Return_Model_Resource_Reason extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('dtn_return/reason', 'reason_id');
    }

}
