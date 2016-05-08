<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Model\ResourceModel;

class PageVersion extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    // @codingStandardsIgnoreStart
    /**
     * @SuppressWarnings(PHPMD.CamelCaseMethodName)
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('content_version_page', 'page_version_id');
    }
}
