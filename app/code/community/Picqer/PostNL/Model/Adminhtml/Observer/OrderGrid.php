<?php

class Picqer_PostNL_Model_Adminhtml_Observer_OrderGrid extends TIG_PostNL_Model_Adminhtml_Observer_OrderGrid
{

    public function modifyGrid(Varien_Event_Observer $observer)
    {
        if($this->extensionActive()) {
            return $observer;
        }

        return parent::modifyGrid($observer);
    }

    /**
     * Check whether this extension is active
     * @return bool
     */
    private function extensionActive()
    {
        $active = Mage::getStoreConfig('picqer_shipping_options/postnl_settings/picqer_postnl_active');
        if ($active != 1)
        {
            return false;
        }

        return true;
    }


}
