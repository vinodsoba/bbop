<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\ResourceModel\Listing\Other;

/**
 * Class Collection
 * @package Ess\M2ePro\Model\ResourceModel\Listing\Other
 */
class Collection extends \Ess\M2ePro\Model\ResourceModel\ActiveRecord\Collection\Component\Parent\AbstractModel
{
    //########################################

    public function _construct()
    {
        parent::_construct();
        $this->_init(
            'Ess\M2ePro\Model\Listing\Other',
            'Ess\M2ePro\Model\ResourceModel\Listing\Other'
        );
    }

    //########################################
}
