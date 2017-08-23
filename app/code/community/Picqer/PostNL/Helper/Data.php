<?php

class Picqer_PostNL_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Check whether this extension is active
     * @return bool
     */
    public function isExtensionActive()
    {
        $active = Mage::getStoreConfig('picqer_shipping_options/postnl_settings/picqer_postnl_active');

        return (bool)$active;
    }

    /**
     * Check whether to show PostNL options in admin
     * @return bool
     */
    public function showPostNLOptions()
    {
        $showOptions = Mage::getStoreConfig('picqer_shipping_options/postnl_settings/picqer_postnl_showoptions');

        return (bool)$showOptions;
    }

    /**
     * Check whether the TIG PostNL extension is installed
     * @return bool
     */
    public function isTIGPostNlExtensionInstalled()
    {
        $tigInstalled = Mage::helper('core')->isModuleEnabled('TIG_PostNL');

        return (bool)$tigInstalled;
    }
}