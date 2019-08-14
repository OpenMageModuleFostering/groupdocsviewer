<?php
class Gdv_Groupdocsviewer_Model_Mysql4_Groupdocsviewer extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
         $this->_init('groupdocsviewer/groupdocsviewer', 'id');
    }
}