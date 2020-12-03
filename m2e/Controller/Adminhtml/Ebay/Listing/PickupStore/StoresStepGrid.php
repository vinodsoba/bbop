<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Ebay\Listing\PickupStore;

/**
 * Class StoresStepGrid
 * @package Ess\M2ePro\Controller\Adminhtml\Ebay\Listing\PickupStore
 */
class StoresStepGrid extends \Ess\M2ePro\Controller\Adminhtml\Ebay\Listing\PickupStore
{
    //########################################

    public function execute()
    {
        $this->initListing();
        $this->setAjaxContent($this->createBlock('Ebay_Listing_PickupStore_Step_Stores_Grid'));
        return $this->getResult();
    }

    //########################################
}
