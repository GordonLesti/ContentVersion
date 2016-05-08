<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Api\Data;

interface PageVersionInterface
{
    const PAGE_VERSION_ID = 'page_version_id';
    const PAGE_ID = 'page_id';
    const CONTENT = 'content';
    const CREATION_TIME = 'creation_time';

    public function getId();

    public function getPageId();

    public function getContent();

    public function getCreationTime();

    public function setId($id);

    public function setPageId($pageId);

    public function setContent($content);

    public function setCreationTime($creationTime);
}
