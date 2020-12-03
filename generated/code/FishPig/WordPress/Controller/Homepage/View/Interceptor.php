<?php
namespace FishPig\WordPress\Controller\Homepage\View;

/**
 * Interceptor class for @see \FishPig\WordPress\Controller\Homepage\View
 */
class Interceptor extends \FishPig\WordPress\Controller\Homepage\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \FishPig\WordPress\Model\Context $wpContext)
    {
        $this->___init();
        parent::__construct($context, $wpContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayoutHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayoutHandles');
        if (!$pluginInfo) {
            return parent::getLayoutHandles();
        } else {
            return $this->___callPlugins('getLayoutHandles', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPage');
        if (!$pluginInfo) {
            return parent::getPage();
        } else {
            return $this->___callPlugins('getPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityObject');
        if (!$pluginInfo) {
            return parent::getEntityObject();
        } else {
            return $this->___callPlugins('getEntityObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkForAmp()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkForAmp');
        if (!$pluginInfo) {
            return parent::checkForAmp();
        } else {
            return $this->___callPlugins('checkForAmp', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        if (!$pluginInfo) {
            return parent::getActionFlag();
        } else {
            return $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        if (!$pluginInfo) {
            return parent::getResponse();
        } else {
            return $this->___callPlugins('getResponse', func_get_args(), $pluginInfo);
        }
    }
}
