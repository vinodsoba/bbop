<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Walmart\Template\SellingFormat;

use Ess\M2ePro\Controller\Adminhtml\Walmart\Template;

/**
 * Class Index
 * @package Ess\M2ePro\Controller\Adminhtml\Walmart\Template\SellingFormat
 */
class Index extends Template
{
    //########################################

    public function execute()
    {
        return $this->_redirect('*/walmart_template/index');
    }

    //########################################
}
