<?php
namespace Magento\Customer\Model\Vat;

/**
 * Interceptor class for @see \Magento\Customer\Model\Vat
 */
class Interceptor extends \Magento\Customer\Model\Vat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($scopeConfig, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantCountryCode($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantCountryCode');
        if (!$pluginInfo) {
            return parent::getMerchantCountryCode($store);
        } else {
            return $this->___callPlugins('getMerchantCountryCode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantVatNumber($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMerchantVatNumber');
        if (!$pluginInfo) {
            return parent::getMerchantVatNumber($store);
        } else {
            return $this->___callPlugins('getMerchantVatNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupIdBasedOnVatNumber($customerCountryCode, $vatValidationResult, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupIdBasedOnVatNumber');
        if (!$pluginInfo) {
            return parent::getCustomerGroupIdBasedOnVatNumber($customerCountryCode, $vatValidationResult, $store);
        } else {
            return $this->___callPlugins('getCustomerGroupIdBasedOnVatNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkVatNumber($countryCode, $vatNumber, $requesterCountryCode = '', $requesterVatNumber = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkVatNumber');
        if (!$pluginInfo) {
            return parent::checkVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber);
        } else {
            return $this->___callPlugins('checkVatNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canCheckVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCheckVatNumber');
        if (!$pluginInfo) {
            return parent::canCheckVatNumber($countryCode, $vatNumber, $requesterCountryCode, $requesterVatNumber);
        } else {
            return $this->___callPlugins('canCheckVatNumber', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerVatClass($customerCountryCode, $vatValidationResult, $store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerVatClass');
        if (!$pluginInfo) {
            return parent::getCustomerVatClass($customerCountryCode, $vatValidationResult, $store);
        } else {
            return $this->___callPlugins('getCustomerVatClass', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCountryInEU($countryCode, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCountryInEU');
        if (!$pluginInfo) {
            return parent::isCountryInEU($countryCode, $storeId);
        } else {
            return $this->___callPlugins('isCountryInEU', func_get_args(), $pluginInfo);
        }
    }
}
