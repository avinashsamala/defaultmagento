<?php
/**
 * Copyright © 2015 Ewall. All rights reserved.
 */

namespace Ewall\HelpDisk\Controller\Adminhtml\Items;

class NewAction extends \Ewall\HelpDisk\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
