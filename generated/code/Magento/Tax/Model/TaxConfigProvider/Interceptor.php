<?php
namespace Magento\Tax\Model\TaxConfigProvider;

/**
 * Interceptor class for @see \Magento\Tax\Model\TaxConfigProvider
 */
class Interceptor extends \Magento\Tax\Model\TaxConfigProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Tax\Helper\Data $taxHelper, \Magento\Tax\Model\Config $taxConfig, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($taxHelper, $taxConfig, $checkoutSession, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        if (!$pluginInfo) {
            return parent::getConfig();
        } else {
            return $this->___callPlugins('getConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayShippingMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDisplayShippingMode');
        if (!$pluginInfo) {
            return parent::getDisplayShippingMode();
        } else {
            return $this->___callPlugins('getDisplayShippingMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDisplayShippingPriceExclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDisplayShippingPriceExclTax');
        if (!$pluginInfo) {
            return parent::isDisplayShippingPriceExclTax();
        } else {
            return $this->___callPlugins('isDisplayShippingPriceExclTax', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isDisplayShippingBothPrices()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDisplayShippingBothPrices');
        if (!$pluginInfo) {
            return parent::isDisplayShippingBothPrices();
        } else {
            return $this->___callPlugins('isDisplayShippingBothPrices', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewItemPriceDisplayMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewItemPriceDisplayMode');
        if (!$pluginInfo) {
            return parent::getReviewItemPriceDisplayMode();
        } else {
            return $this->___callPlugins('getReviewItemPriceDisplayMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewTotalsDisplayMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewTotalsDisplayMode');
        if (!$pluginInfo) {
            return parent::getReviewTotalsDisplayMode();
        } else {
            return $this->___callPlugins('getReviewTotalsDisplayMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFullTaxSummaryDisplayed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFullTaxSummaryDisplayed');
        if (!$pluginInfo) {
            return parent::isFullTaxSummaryDisplayed();
        } else {
            return $this->___callPlugins('isFullTaxSummaryDisplayed', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isTaxDisplayedInGrandTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isTaxDisplayedInGrandTotal');
        if (!$pluginInfo) {
            return parent::isTaxDisplayedInGrandTotal();
        } else {
            return $this->___callPlugins('isTaxDisplayedInGrandTotal', func_get_args(), $pluginInfo);
        }
    }
}
