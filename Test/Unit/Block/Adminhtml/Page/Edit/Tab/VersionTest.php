<?php
/**
 * Copyright © 2016 Gordon Lesti. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lesti\ContentVersion\Test\Block\Adminhtml\Page\Edit\Tab;

class VersionTest extends \PHPUnit_Framework_TestCase
{
    private $context;

    private $collectionFactory;

    private $registry;

    private $urlBuilder;

    private $versionBlock;

    public function setUp()
    {
        $this->urlBuilderMock = $this->getMockBuilder('Magento\Framework\UrlInterface')
            ->disableOriginalConstructor()
            ->getMock();
        $this->registry = $this->getMockBuilder('Magento\Framework\Registry')
            ->disableOriginalConstructor()
            ->getMock();
        $this->collectionFactory = $this
            ->getMockBuilder('Lesti\ContentVersion\Model\ResourceModel\PageVersion\CollectionFactory')
            ->disableOriginalConstructor()
            ->getMock();
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->context = $objectManager->getObject(
            'Magento\Backend\Block\Template\Context',
            [
                'urlBuilder' => $this->urlBuilderMock,
            ]
        );
        $this->versionBlock = $objectManager->getObject(
            'Lesti\ContentVersion\Block\Adminhtml\Page\Edit\Tab\Version',
            [
                'context' => $this->context,
                'registry' => $this->registry,
                'collectionFactory' => $this->collectionFactory,
            ]
        );
    }

    public function testGetTabLabel()
    {
        $this->assertSame('Versions', $this->versionBlock->getTabLabel());
    }

    public function testGetTabTitle()
    {
        $this->assertSame('Versions', $this->versionBlock->getTabTitle());
    }

    public function testCanShowTab()
    {
        $this->assertTrue($this->versionBlock->canShowTab());
    }

    public function testIsHidden()
    {
        $this->assertFalse($this->versionBlock->isHidden());
    }
}
