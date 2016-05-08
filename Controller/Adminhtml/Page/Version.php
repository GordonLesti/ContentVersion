<?php
/**
 *
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Controller\Adminhtml\Page;

class Version extends \Magento\Backend\App\Action
{
    private $resultJsonFactory;

    private $collectionFactory;

    private $differ;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Lesti\ContentVersion\Model\ResourceModel\PageVersion\CollectionFactory $collectionFactory,
        \SebastianBergmann\Diff\Differ $differ
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->collectionFactory = $collectionFactory;
        $this->differ = $differ;
        parent::__construct($context);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magento_Cms::save');
    }

    public function execute()
    {
        $fromAndToVersion = $this->getFromAndToVersion();
        $resultJson = $this->resultJsonFactory->create();
        $resultJson->setData($this->differ->diffToArray($fromAndToVersion['from'], $fromAndToVersion['to']));

        return $resultJson;
    }

    public function getFromAndToVersion()
    {
        $fromId = (int) $this->getRequest()->getParam('left');
        $toId = (int) $this->getRequest()->getParam('right');
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('page_Version_id', ['in' => [$fromId, $toId]]);
        return [
            'from' => htmlspecialchars($collection->getItemById($fromId)->getContent()),
            'to' => htmlspecialchars($collection->getItemById($toId)->getContent()),
        ];
    }
}
