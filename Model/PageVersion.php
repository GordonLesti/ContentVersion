<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Model;

use Lesti\ContentVersion\Api\Data\PageVersionInterface;
use Magento\Framework\DataObject\IdentityInterface;

/**
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class PageVersion extends \Magento\Framework\Model\AbstractModel implements PageVersionInterface
{
    // @codingStandardsIgnoreStart
    protected $_eventPrefix = 'content_version_page';
    // @codingStandardsIgnoreEnd

    // @codingStandardsIgnoreStart
    /**
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Lesti\ContentVersion\Model\ResourceModel\PageVersion');
    }

    public function getId()
    {
        return parent::getData(self::PAGE_VERSION_ID);
    }

    public function getPageId()
    {
        return parent::getData(self::PAGE_ID);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    public function setId($pageVersionId)
    {
        return $this->setData(self::PAGE_VERSION_ID, $pageVersionId);
    }

    public function setPageId($pageId)
    {
        return $this->setData(self::PAGE_ID, $pageId);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }
}
