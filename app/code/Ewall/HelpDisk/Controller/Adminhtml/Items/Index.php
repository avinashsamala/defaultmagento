<?php
/**
 * Copyright © 2015 Ewall. All rights reserved.
 */

namespace Ewall\HelpDisk\Controller\Adminhtml\Items;

class Index extends \Ewall\HelpDisk\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Ewall_HelpDisk::helpdisk');
        $resultPage->getConfig()->getTitle()->prepend(__('Ewall Items'));
        $resultPage->addBreadcrumb(__('Ewall'), __('Ewall'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
