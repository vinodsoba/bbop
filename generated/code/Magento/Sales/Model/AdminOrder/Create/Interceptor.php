<?php
namespace Magento\Sales\Model\AdminOrder\Create;

/**
 * Interceptor class for @see \Magento\Sales\Model\AdminOrder\Create
 */
class Interceptor extends \Magento\Sales\Model\AdminOrder\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Registry $coreRegistry, \Magento\Sales\Model\Config $salesConfig, \Magento\Backend\Model\Session\Quote $quoteSession, \Psr\Log\LoggerInterface $logger, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Sales\Model\AdminOrder\Product\Quote\Initializer $quoteInitializer, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory, \Magento\Customer\Model\Metadata\FormFactory $metadataFormFactory, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Sales\Model\AdminOrder\EmailSender $emailSender, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Quote\Model\Quote\Item\Updater $quoteItemUpdater, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Customer\Model\Customer\Mapper $customerMapper, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Quote\Model\QuoteFactory $quoteFactory, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($objectManager, $eventManager, $coreRegistry, $salesConfig, $quoteSession, $logger, $objectCopyService, $messageManager, $quoteInitializer, $customerRepository, $addressRepository, $addressFactory, $metadataFormFactory, $groupRepository, $scopeConfig, $emailSender, $stockRegistry, $quoteItemUpdater, $objectFactory, $quoteRepository, $accountManagement, $customerFactory, $customerMapper, $quoteManagement, $dataObjectHelper, $orderManagement, $quoteFactory, $data, $serializer, $dataObjectConverter, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsValidate($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsValidate');
        if (!$pluginInfo) {
            return parent::setIsValidate($flag);
        } else {
            return $this->___callPlugins('setIsValidate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsValidate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsValidate');
        if (!$pluginInfo) {
            return parent::getIsValidate();
        } else {
            return $this->___callPlugins('getIsValidate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initRuleData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initRuleData');
        if (!$pluginInfo) {
            return parent::initRuleData();
        } else {
            return $this->___callPlugins('initRuleData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRecollect($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRecollect');
        if (!$pluginInfo) {
            return parent::setRecollect($flag);
        } else {
            return $this->___callPlugins('setRecollect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function recollectCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'recollectCart');
        if (!$pluginInfo) {
            return parent::recollectCart();
        } else {
            return $this->___callPlugins('recollectCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveQuote');
        if (!$pluginInfo) {
            return parent::saveQuote();
        } else {
            return $this->___callPlugins('saveQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSession');
        if (!$pluginInfo) {
            return parent::getSession();
        } else {
            return $this->___callPlugins('getSession', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        if (!$pluginInfo) {
            return parent::getQuote();
        } else {
            return $this->___callPlugins('getQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQuote(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuote');
        if (!$pluginInfo) {
            return parent::setQuote($quote);
        } else {
            return $this->___callPlugins('setQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initFromOrder(\Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initFromOrder');
        if (!$pluginInfo) {
            return parent::initFromOrder($order);
        } else {
            return $this->___callPlugins('initFromOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initFromOrderItem(\Magento\Sales\Model\Order\Item $orderItem, $qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initFromOrderItem');
        if (!$pluginInfo) {
            return parent::initFromOrderItem($orderItem, $qty);
        } else {
            return $this->___callPlugins('initFromOrderItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerWishlist($cacheReload = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerWishlist');
        if (!$pluginInfo) {
            return parent::getCustomerWishlist($cacheReload);
        } else {
            return $this->___callPlugins('getCustomerWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerCart');
        if (!$pluginInfo) {
            return parent::getCustomerCart();
        } else {
            return $this->___callPlugins('getCustomerCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerCompareList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerCompareList');
        if (!$pluginInfo) {
            return parent::getCustomerCompareList();
        } else {
            return $this->___callPlugins('getCustomerCompareList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        if (!$pluginInfo) {
            return parent::getCustomerGroupId();
        } else {
            return $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function moveQuoteItem($item, $moveTo, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveQuoteItem');
        if (!$pluginInfo) {
            return parent::moveQuoteItem($item, $moveTo, $qty);
        } else {
            return $this->___callPlugins('moveQuoteItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function applySidebarData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applySidebarData');
        if (!$pluginInfo) {
            return parent::applySidebarData($data);
        } else {
            return $this->___callPlugins('applySidebarData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem($itemId, $from)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItem');
        if (!$pluginInfo) {
            return parent::removeItem($itemId, $from);
        } else {
            return $this->___callPlugins('removeItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function removeQuoteItem($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeQuoteItem');
        if (!$pluginInfo) {
            return parent::removeQuoteItem($item);
        } else {
            return $this->___callPlugins('removeQuoteItem', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct($product, $config = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProduct');
        if (!$pluginInfo) {
            return parent::addProduct($product, $config);
        } else {
            return $this->___callPlugins('addProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addProducts(array $products)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProducts');
        if (!$pluginInfo) {
            return parent::addProducts($products);
        } else {
            return $this->___callPlugins('addProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateQuoteItems($items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQuoteItems');
        if (!$pluginInfo) {
            return parent::updateQuoteItems($items);
        } else {
            return $this->___callPlugins('updateQuoteItems', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAddress');
        if (!$pluginInfo) {
            return parent::getShippingAddress();
        } else {
            return $this->___callPlugins('getShippingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAddress($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAddress');
        if (!$pluginInfo) {
            return parent::setShippingAddress($address);
        } else {
            return $this->___callPlugins('setShippingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAsBilling($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAsBilling');
        if (!$pluginInfo) {
            return parent::setShippingAsBilling($flag);
        } else {
            return $this->___callPlugins('setShippingAsBilling', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBillingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBillingAddress');
        if (!$pluginInfo) {
            return parent::getBillingAddress();
        } else {
            return $this->___callPlugins('getBillingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBillingAddress($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBillingAddress');
        if (!$pluginInfo) {
            return parent::setBillingAddress($address);
        } else {
            return $this->___callPlugins('setBillingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingMethod');
        if (!$pluginInfo) {
            return parent::setShippingMethod($method);
        } else {
            return $this->___callPlugins('setShippingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetShippingMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetShippingMethod');
        if (!$pluginInfo) {
            return parent::resetShippingMethod();
        } else {
            return $this->___callPlugins('resetShippingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectShippingRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectShippingRates');
        if (!$pluginInfo) {
            return parent::collectShippingRates();
        } else {
            return $this->___callPlugins('collectShippingRates', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function collectRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectRates');
        if (!$pluginInfo) {
            return parent::collectRates();
        } else {
            return $this->___callPlugins('collectRates', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPaymentMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPaymentMethod');
        if (!$pluginInfo) {
            return parent::setPaymentMethod($method);
        } else {
            return $this->___callPlugins('setPaymentMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPaymentData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPaymentData');
        if (!$pluginInfo) {
            return parent::setPaymentData($data);
        } else {
            return $this->___callPlugins('setPaymentData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function applyCoupon($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyCoupon');
        if (!$pluginInfo) {
            return parent::applyCoupon($code);
        } else {
            return $this->___callPlugins('applyCoupon', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountData($accountData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAccountData');
        if (!$pluginInfo) {
            return parent::setAccountData($accountData);
        } else {
            return $this->___callPlugins('setAccountData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function importPostData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importPostData');
        if (!$pluginInfo) {
            return parent::importPostData($data);
        } else {
            return $this->___callPlugins('importPostData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_prepareCustomer');
        if (!$pluginInfo) {
            return parent::_prepareCustomer();
        } else {
            return $this->___callPlugins('_prepareCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createOrder');
        if (!$pluginInfo) {
            return parent::createOrder();
        } else {
            return $this->___callPlugins('createOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        if (!$pluginInfo) {
            return parent::addData($arr);
        } else {
            return $this->___callPlugins('addData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        if (!$pluginInfo) {
            return parent::setData($key, $value);
        } else {
            return $this->___callPlugins('setData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        if (!$pluginInfo) {
            return parent::unsetData($key);
        } else {
            return $this->___callPlugins('unsetData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $index);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        if (!$pluginInfo) {
            return parent::getDataByPath($path);
        } else {
            return $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        if (!$pluginInfo) {
            return parent::getDataByKey($key);
        } else {
            return $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        if (!$pluginInfo) {
            return parent::setDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        if (!$pluginInfo) {
            return parent::getDataUsingMethod($key, $args);
        } else {
            return $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        if (!$pluginInfo) {
            return parent::hasData($key);
        } else {
            return $this->___callPlugins('hasData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        if (!$pluginInfo) {
            return parent::toArray($keys);
        } else {
            return $this->___callPlugins('toArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        if (!$pluginInfo) {
            return parent::convertToArray($keys);
        } else {
            return $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        if (!$pluginInfo) {
            return parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('toXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        if (!$pluginInfo) {
            return parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
        } else {
            return $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        if (!$pluginInfo) {
            return parent::toJson($keys);
        } else {
            return $this->___callPlugins('toJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        if (!$pluginInfo) {
            return parent::convertToJson($keys);
        } else {
            return $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        if (!$pluginInfo) {
            return parent::toString($format);
        } else {
            return $this->___callPlugins('toString', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        if (!$pluginInfo) {
            return parent::isEmpty();
        } else {
            return $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        if (!$pluginInfo) {
            return parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
        } else {
            return $this->___callPlugins('serialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        if (!$pluginInfo) {
            return parent::debug($data, $objects);
        } else {
            return $this->___callPlugins('debug', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        if (!$pluginInfo) {
            return parent::offsetSet($offset, $value);
        } else {
            return $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        if (!$pluginInfo) {
            return parent::offsetExists($offset);
        } else {
            return $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        if (!$pluginInfo) {
            return parent::offsetUnset($offset);
        } else {
            return $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        if (!$pluginInfo) {
            return parent::offsetGet($offset);
        } else {
            return $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo);
        }
    }
}
