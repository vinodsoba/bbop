<?php
namespace Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Category\Settings\Specific;

/**
 * Interceptor class for @see \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Category\Settings\Specific
 */
class Interceptor extends \Ess\M2ePro\Block\Adminhtml\Ebay\Listing\Product\Category\Settings\Specific implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ess\M2ePro\Block\Adminhtml\Magento\Context\Template $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function _construct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_construct');
        if (!$pluginInfo) {
            return parent::_construct();
        } else {
            return $this->___callPlugins('_construct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getMarketplaceId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMarketplaceId');
        if (!$pluginInfo) {
            return parent::getMarketplaceId();
        } else {
            return $this->___callPlugins('getMarketplaceId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setMarketplaceId($marketplaceId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMarketplaceId');
        if (!$pluginInfo) {
            return parent::setMarketplaceId($marketplaceId);
        } else {
            return $this->___callPlugins('setMarketplaceId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryMode');
        if (!$pluginInfo) {
            return parent::getCategoryMode();
        } else {
            return $this->___callPlugins('getCategoryMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCategoryMode($categoryMode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCategoryMode');
        if (!$pluginInfo) {
            return parent::setCategoryMode($categoryMode);
        } else {
            return $this->___callPlugins('setCategoryMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryValue');
        if (!$pluginInfo) {
            return parent::getCategoryValue();
        } else {
            return $this->___callPlugins('getCategoryValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCategoryValue($categoryValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCategoryValue');
        if (!$pluginInfo) {
            return parent::setCategoryValue($categoryValue);
        } else {
            return $this->___callPlugins('setCategoryValue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setInternalData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInternalData');
        if (!$pluginInfo) {
            return parent::setInternalData($data);
        } else {
            return $this->___callPlugins('setInternalData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInternalData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInternalData');
        if (!$pluginInfo) {
            return parent::getInternalData();
        } else {
            return $this->___callPlugins('getInternalData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUniqueId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUniqueId');
        if (!$pluginInfo) {
            return parent::setUniqueId($id);
        } else {
            return $this->___callPlugins('setUniqueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueId');
        if (!$pluginInfo) {
            return parent::getUniqueId();
        } else {
            return $this->___callPlugins('getUniqueId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCompactMode($isMode = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCompactMode');
        if (!$pluginInfo) {
            return parent::setCompactMode($isMode);
        } else {
            return $this->___callPlugins('setCompactMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCompactMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCompactMode');
        if (!$pluginInfo) {
            return parent::isCompactMode();
        } else {
            return $this->___callPlugins('isCompactMode', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        if (!$pluginInfo) {
            return parent::getAttributes();
        } else {
            return $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedSpecifics()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectedSpecifics');
        if (!$pluginInfo) {
            return parent::getSelectedSpecifics();
        } else {
            return $this->___callPlugins('getSelectedSpecifics', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSelectedSpecifics(array $specifics)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSelectedSpecifics');
        if (!$pluginInfo) {
            return parent::setSelectedSpecifics($specifics);
        } else {
            return $this->___callPlugins('setSelectedSpecifics', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDictionarySpecifics()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDictionarySpecifics');
        if (!$pluginInfo) {
            return parent::getDictionarySpecifics();
        } else {
            return $this->___callPlugins('getDictionarySpecifics', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEbaySelectedSpecifics()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEbaySelectedSpecifics');
        if (!$pluginInfo) {
            return parent::getEbaySelectedSpecifics();
        } else {
            return $this->___callPlugins('getEbaySelectedSpecifics', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomSelectedSpecifics()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomSelectedSpecifics');
        if (!$pluginInfo) {
            return parent::getCustomSelectedSpecifics();
        } else {
            return $this->___callPlugins('getCustomSelectedSpecifics', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredDetailsFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequiredDetailsFields');
        if (!$pluginInfo) {
            return parent::getRequiredDetailsFields();
        } else {
            return $this->___callPlugins('getRequiredDetailsFields', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSuffixId($suffix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuffixId');
        if (!$pluginInfo) {
            return parent::getSuffixId($suffix);
        } else {
            return $this->___callPlugins('getSuffixId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlId');
        if (!$pluginInfo) {
            return parent::getHtmlId();
        } else {
            return $this->___callPlugins('getHtmlId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentUrl');
        if (!$pluginInfo) {
            return parent::getCurrentUrl($params);
        } else {
            return $this->___callPlugins('getCurrentUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getButtonHtml($label, $onclick, $class = '', $buttonId = null, $dataAttr = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getButtonHtml');
        if (!$pluginInfo) {
            return parent::getButtonHtml($label, $onclick, $class, $buttonId, $dataAttr);
        } else {
            return $this->___callPlugins('getButtonHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFormKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormKey');
        if (!$pluginInfo) {
            return parent::getFormKey();
        } else {
            return $this->___callPlugins('getFormKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOutputEnabled');
        if (!$pluginInfo) {
            return parent::isOutputEnabled($moduleName);
        } else {
            return $this->___callPlugins('isOutputEnabled', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorization()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthorization');
        if (!$pluginInfo) {
            return parent::getAuthorization();
        } else {
            return $this->___callPlugins('getAuthorization', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getToolbar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getToolbar');
        if (!$pluginInfo) {
            return parent::getToolbar();
        } else {
            return $this->___callPlugins('getToolbar', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateContext');
        if (!$pluginInfo) {
            return parent::setTemplateContext($templateContext);
        } else {
            return $this->___callPlugins('setTemplateContext', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        if (!$pluginInfo) {
            return parent::getTemplate();
        } else {
            return $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        if (!$pluginInfo) {
            return parent::setTemplate($template);
        } else {
            return $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFile');
        if (!$pluginInfo) {
            return parent::getTemplateFile($template);
        } else {
            return $this->___callPlugins('getTemplateFile', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getArea');
        if (!$pluginInfo) {
            return parent::getArea();
        } else {
            return $this->___callPlugins('getArea', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        if (!$pluginInfo) {
            return parent::assign($key, $value);
        } else {
            return $this->___callPlugins('assign', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        if (!$pluginInfo) {
            return parent::fetchView($fileName);
        } else {
            return $this->___callPlugins('fetchView', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        if (!$pluginInfo) {
            return parent::getBaseUrl();
        } else {
            return $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getObjectData');
        if (!$pluginInfo) {
            return parent::getObjectData($object, $key);
        } else {
            return $this->___callPlugins('getObjectData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        if (!$pluginInfo) {
            return parent::getCacheKeyInfo();
        } else {
            return $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        if (!$pluginInfo) {
            return parent::getJsLayout();
        } else {
            return $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo);
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
    public function getParentBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentBlock');
        if (!$pluginInfo) {
            return parent::getParentBlock();
        } else {
            return $this->___callPlugins('getParentBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        if (!$pluginInfo) {
            return parent::setLayout($layout);
        } else {
            return $this->___callPlugins('setLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        if (!$pluginInfo) {
            return parent::getLayout();
        } else {
            return $this->___callPlugins('getLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNameInLayout');
        if (!$pluginInfo) {
            return parent::setNameInLayout($name);
        } else {
            return $this->___callPlugins('setNameInLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        if (!$pluginInfo) {
            return parent::getChildNames();
        } else {
            return $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        if (!$pluginInfo) {
            return parent::setAttribute($name, $value);
        } else {
            return $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        if (!$pluginInfo) {
            return parent::setChild($alias, $block);
        } else {
            return $this->___callPlugins('setChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        if (!$pluginInfo) {
            return parent::addChild($alias, $block, $data);
        } else {
            return $this->___callPlugins('addChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        if (!$pluginInfo) {
            return parent::unsetChild($alias);
        } else {
            return $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetCallChild');
        if (!$pluginInfo) {
            return parent::unsetCallChild($alias, $callback, $result, $params);
        } else {
            return $this->___callPlugins('unsetCallChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChildren');
        if (!$pluginInfo) {
            return parent::unsetChildren();
        } else {
            return $this->___callPlugins('unsetChildren', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        if (!$pluginInfo) {
            return parent::getChildBlock($alias);
        } else {
            return $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildHtml');
        if (!$pluginInfo) {
            return parent::getChildHtml($alias, $useCache);
        } else {
            return $this->___callPlugins('getChildHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildChildHtml');
        if (!$pluginInfo) {
            return parent::getChildChildHtml($alias, $childChildAlias, $useCache);
        } else {
            return $this->___callPlugins('getChildChildHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockHtml');
        if (!$pluginInfo) {
            return parent::getBlockHtml($name);
        } else {
            return $this->___callPlugins('getBlockHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        if (!$pluginInfo) {
            return parent::insert($element, $siblingName, $after, $alias);
        } else {
            return $this->___callPlugins('insert', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'append');
        if (!$pluginInfo) {
            return parent::append($element, $alias);
        } else {
            return $this->___callPlugins('append', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        if (!$pluginInfo) {
            return parent::getGroupChildNames($groupName);
        } else {
            return $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildData');
        if (!$pluginInfo) {
            return parent::getChildData($alias, $key);
        } else {
            return $this->___callPlugins('getChildData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiId');
        if (!$pluginInfo) {
            return parent::getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
        } else {
            return $this->___callPlugins('getUiId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsId');
        if (!$pluginInfo) {
            return parent::getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
        } else {
            return $this->___callPlugins('getJsId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        if (!$pluginInfo) {
            return parent::getUrl($route, $params);
        } else {
            return $this->___callPlugins('getUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewFileUrl');
        if (!$pluginInfo) {
            return parent::getViewFileUrl($fileId, $params);
        } else {
            return $this->___callPlugins('getViewFileUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        if (!$pluginInfo) {
            return parent::formatDate($date, $format, $showTime, $timezone);
        } else {
            return $this->___callPlugins('formatDate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTime');
        if (!$pluginInfo) {
            return parent::formatTime($time, $format, $showDate);
        } else {
            return $this->___callPlugins('formatTime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtml');
        if (!$pluginInfo) {
            return parent::escapeHtml($data, $allowedTags);
        } else {
            return $this->___callPlugins('escapeHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJs');
        if (!$pluginInfo) {
            return parent::escapeJs($string);
        } else {
            return $this->___callPlugins('escapeJs', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlAttr');
        if (!$pluginInfo) {
            return parent::escapeHtmlAttr($string, $escapeSingleQuote);
        } else {
            return $this->___callPlugins('escapeHtmlAttr', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeCss');
        if (!$pluginInfo) {
            return parent::escapeCss($string);
        } else {
            return $this->___callPlugins('escapeCss', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stripTags');
        if (!$pluginInfo) {
            return parent::stripTags($data, $allowableTags, $allowHtmlEntities);
        } else {
            return $this->___callPlugins('stripTags', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeUrl');
        if (!$pluginInfo) {
            return parent::escapeUrl($string);
        } else {
            return $this->___callPlugins('escapeUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeXssInUrl');
        if (!$pluginInfo) {
            return parent::escapeXssInUrl($data);
        } else {
            return $this->___callPlugins('escapeXssInUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeQuote');
        if (!$pluginInfo) {
            return parent::escapeQuote($data, $addSlashes);
        } else {
            return $this->___callPlugins('escapeQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJsQuote');
        if (!$pluginInfo) {
            return parent::escapeJsQuote($data, $quote);
        } else {
            return $this->___callPlugins('escapeJsQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameInLayout');
        if (!$pluginInfo) {
            return parent::getNameInLayout();
        } else {
            return $this->___callPlugins('getNameInLayout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        if (!$pluginInfo) {
            return parent::getCacheKey();
        } else {
            return $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        if (!$pluginInfo) {
            return parent::getVar($name, $module);
        } else {
            return $this->___callPlugins('getVar', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopePrivate');
        if (!$pluginInfo) {
            return parent::isScopePrivate();
        } else {
            return $this->___callPlugins('isScopePrivate', func_get_args(), $pluginInfo);
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

    /**
     * {@inheritdoc}
     */
    public function createBlock($block, $name = '', array $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createBlock');
        if (!$pluginInfo) {
            return parent::createBlock($block, $name, $arguments);
        } else {
            return $this->___callPlugins('createBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHelper($helper, array $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelper');
        if (!$pluginInfo) {
            return parent::getHelper($helper, $arguments);
        } else {
            return $this->___callPlugins('getHelper', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__');
        if (!$pluginInfo) {
            return parent::__();
        } else {
            return $this->___callPlugins('__', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getTooltipHtml($content, $directionToRight = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTooltipHtml');
        if (!$pluginInfo) {
            return parent::getTooltipHtml($content, $directionToRight);
        } else {
            return $this->___callPlugins('getTooltipHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function appendHelpBlock($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'appendHelpBlock');
        if (!$pluginInfo) {
            return parent::appendHelpBlock($data);
        } else {
            return $this->___callPlugins('appendHelpBlock', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPageActionsBlock($block, $name = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageActionsBlock');
        if (!$pluginInfo) {
            return parent::setPageActionsBlock($block, $name);
        } else {
            return $this->___callPlugins('setPageActionsBlock', func_get_args(), $pluginInfo);
        }
    }
}