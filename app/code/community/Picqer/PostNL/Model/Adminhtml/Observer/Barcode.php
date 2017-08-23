<?php

class Picqer_PostNL_Model_Adminhtml_Observer_Barcode extends TIG_PostNL_Model_Core_Observer_Barcode
{
    public function generateBarcode(Varien_Event_Observer $observer)
    {
        $helper = Mage::helper('picqer_postnl');
        if ($helper->isExtensionActive() && ! $helper->showPostNLOptions()) {
            return $observer;
        }

        return parent::generateBarcode($observer);
    }
}