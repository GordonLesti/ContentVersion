<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lesti\ContentVersion\Block\Adminhtml\Page\Edit\Tab;

use Magento\Backend\Block\Widget\Tab\TabInterface;
use Magento\Framework\View\Element\Template;

class Version extends Template implements TabInterface
{
    private $collectionFactory;

    private $coreRegistry;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Lesti\ContentVersion\Model\ResourceModel\PageVersion\CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    public function getTabLabel()
    {
        return __('Versions');
    }

    public function getTabTitle()
    {
        return __('Versions');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        return false;
    }

    public function getPageVersionCollection()
    {
        $model = $this->coreRegistry->registry('cms_page');
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('page_id', $model->getId());
        $collection->setOrder('creation_time', \Magento\Framework\Data\Collection::SORT_ORDER_DESC);

        return $collection;
    }

    public function getAjaxUrl()
    {
        return $this->getUrl('contentVersion/page/version');
    }
}
