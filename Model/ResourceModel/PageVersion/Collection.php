<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Model\ResourceModel\PageVersion;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 */
class Collection extends AbstractCollection
{
    // @codingStandardsIgnoreStart
    protected $_idFieldName = 'page_version_id';
    // @codingStandardsIgnoreEnd

    // @codingStandardsIgnoreStart
    /**
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Lesti\ContentVersion\Model\PageVersion', 'Lesti\ContentVersion\Model\ResourceModel\PageVersion');
    }
}
