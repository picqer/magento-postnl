<?php

class Picqer_PostNL_Model_Adminhtml_Observer_ShipmentView extends TIG_PostNL_Model_Adminhtml_Observer_ShipmentView
{
    public function addPrintLabelButton(Varien_Event_Observer $observer)
    {
        $helper = Mage::helper('picqer_postnl');
        if ($helper->isExtensionActive() && ! $helper->showPostNLOptions()) {
            return $observer;
        }

        return parent::addPrintLabelButton($observer);
    }
}