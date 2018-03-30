<?php

class Picqer_PostNL_Model_Adminhtml_Observer_OrderGrid extends TIG_PostNL_Model_Adminhtml_Observer_OrderGrid
{
    public function modifyGrid(Varien_Event_Observer $observer)
    {
        $helper = Mage::helper('picqer_postnl');
        if ($helper->isExtensionActive() && ! $helper->showPostNLOptions()) {
            return $observer;
        }

        return parent::modifyGrid($observer);
    }
}
