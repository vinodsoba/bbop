<?php
namespace Magento\CatalogInventory\Model\Indexer\Stock\Processor;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Indexer\Stock\Processor
 */
class Interceptor extends \Magento\CatalogInventory\Model\Indexer\Stock\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\IndexerRegistry $indexerRegistry)
    {
        $this->___init();
        parent::__construct($indexerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexer');
        if (!$pluginInfo) {
            return parent::getIndexer();
        } else {
            return $this->___callPlugins('getIndexer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reindexRow($id, $forceReindex = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexRow');
        if (!$pluginInfo) {
            return parent::reindexRow($id, $forceReindex);
        } else {
            return $this->___callPlugins('reindexRow', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reindexList($ids, $forceReindex = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexList');
        if (!$pluginInfo) {
            return parent::reindexList($ids, $forceReindex);
        } else {
            return $this->___callPlugins('reindexList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reindexAll()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexAll');
        if (!$pluginInfo) {
            return parent::reindexAll();
        } else {
            return $this->___callPlugins('reindexAll', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function markIndexerAsInvalid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'markIndexerAsInvalid');
        if (!$pluginInfo) {
            return parent::markIndexerAsInvalid();
        } else {
            return $this->___callPlugins('markIndexerAsInvalid', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexerId');
        if (!$pluginInfo) {
            return parent::getIndexerId();
        } else {
            return $this->___callPlugins('getIndexerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isIndexerScheduled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIndexerScheduled');
        if (!$pluginInfo) {
            return parent::isIndexerScheduled();
        } else {
            return $this->___callPlugins('isIndexerScheduled', func_get_args(), $pluginInfo);
        }
    }
}
