<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lesti\ContentVersion\Observer;

use Magento\Framework\Event\ObserverInterface;

class CmsPageSaveAfterObserver implements ObserverInterface
{
    private $objectManager;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $cmsPage = $observer->getObject();
        $model = $this->objectManager->create('Lesti\ContentVersion\Model\PageVersion');
        $model->setContent($cmsPage->getContent());
        $model->setPageId($cmsPage->getId());
        try {
            $model->save();
        } catch (\Exception $e) {}
    }
}
