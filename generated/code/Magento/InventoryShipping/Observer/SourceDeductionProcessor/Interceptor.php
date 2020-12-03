<?php
namespace Magento\InventoryShipping\Observer\SourceDeductionProcessor;

/**
 * Interceptor class for @see \Magento\InventoryShipping\Observer\SourceDeductionProcessor
 */
class Interceptor extends \Magento\InventoryShipping\Observer\SourceDeductionProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Model\IsSingleSourceModeInterface $isSingleSourceMode, \Magento\InventoryCatalogApi\Api\DefaultSourceProviderInterface $defaultSourceProvider, \Magento\InventoryShipping\Model\GetItemsToDeductFromShipment $getItemsToDeductFromShipment, \Magento\InventoryShipping\Model\SourceDeductionRequestFromShipmentFactory $sourceDeductionRequestFromShipmentFactory, \Magento\InventorySourceDeductionApi\Model\SourceDeductionServiceInterface $sourceDeductionService, \Magento\InventorySalesApi\Api\Data\ItemToSellInterfaceFactory $itemsToSellFactory, \Magento\InventorySalesApi\Api\PlaceReservationsForSalesEventInterface $placeReservationsForSalesEvent)
    {
        $this->___init();
        parent::__construct($isSingleSourceMode, $defaultSourceProvider, $getItemsToDeductFromShipment, $sourceDeductionRequestFromShipmentFactory, $sourceDeductionService, $itemsToSellFactory, $placeReservationsForSalesEvent);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($observer);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
