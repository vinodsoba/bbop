<?php
namespace Magento\Inventory\Model\Source\Command\Save;

/**
 * Interceptor class for @see \Magento\Inventory\Model\Source\Command\Save
 */
class Interceptor extends \Magento\Inventory\Model\Source\Command\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryApi\Model\SourceValidatorInterface $sourceValidator, \Magento\Inventory\Model\ResourceModel\Source $sourceResource, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($sourceValidator, $sourceResource, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\InventoryApi\Api\Data\SourceInterface $source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($source);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
