<?php
/**
 * Copyright © 2015 Ewall. All rights reserved.
 */

namespace Ewall\HelpDisk\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Ewall\HelpDisk\Model\Resource\Items');
    }
}
