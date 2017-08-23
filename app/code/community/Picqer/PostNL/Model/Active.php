<?php

class Picqer_PostNL_Model_Active
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('picqer_postnl')->__('Yes')),
            array('value' => 0, 'label' => Mage::helper('picqer_postnl')->__('No'))
        );
    }
}