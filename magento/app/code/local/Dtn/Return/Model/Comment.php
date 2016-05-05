<?php class Dtn_Return_Model_Comment extends Mage_Core_Model_Abstract

{    public function _construct()
    {
        $this->_init('dtn_return/comment');
    }
    public function dropDownList()
    {
        $data = [];
        foreach ($this->getCollection() as $item)
        {
            $data[] = [
                'value' => $item->getCommentId(),
                'label' => $item->getComment()
            ];
        }
        return $data;
    }
}