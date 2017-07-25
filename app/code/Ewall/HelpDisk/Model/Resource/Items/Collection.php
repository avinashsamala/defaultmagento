<?php
/**
 * Copyright © 2015 Ewall. All rights reserved.
 */

namespace Ewall\HelpDisk\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ewall\HelpDisk\Model\Items', 'Ewall\HelpDisk\Model\Resource\Items');
    }
}
