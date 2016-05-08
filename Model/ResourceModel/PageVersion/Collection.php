<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Model\ResourceModel\PageVersion;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'page_version_id';

    protected function _construct()
    {
        $this->_init('Lesti\ContentVersion\Model\PageVersion', 'Lesti\ContentVersion\Model\ResourceModel\PageVersion');
    }
}
