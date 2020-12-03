<?php
namespace Magento\InventoryCatalog\Model\ResourceModel\SetDataToLegacyStockItem;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\ResourceModel\SetDataToLegacyStockItem
 */
class Interceptor extends \Magento\InventoryCatalog\Model\ResourceModel\SetDataToLegacyStockItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\InventoryCatalogApi\Model\GetProductIdsBySkusInterface $getProductIdsBySkus)
    {
        $this->___init();
        parent::__construct($resourceConnection, $getProductIdsBySkus);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, float $quantity, int $status)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($sku, $quantity, $status);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
