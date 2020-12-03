<?php
namespace Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\QuoteItemQtyList;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\QuoteItemQtyList
 */
class Interceptor extends \Magento\CatalogInventory\Model\Quote\Item\QuantityValidator\QuoteItemQtyList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getQty($productId, $quoteItemId, $quoteId, $itemQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        if (!$pluginInfo) {
            return parent::getQty($productId, $quoteItemId, $quoteId, $itemQty);
        } else {
            return $this->___callPlugins('getQty', func_get_args(), $pluginInfo);
        }
    }
}
