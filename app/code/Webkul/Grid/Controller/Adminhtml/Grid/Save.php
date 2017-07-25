<?php
/**
 * Webkul Grid Row Save Controller
 *
 * @category    Webkul
 * @package     Webkul_Grid
 * @author      Webkul Software Private Limited
 *
 */
namespace Webkul\Grid\Controller\Adminhtml\Grid;
 
class Save extends \Magento\Backend\App\Action
{
    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $this->_redirect('grid/grid/addrow');
            return;
        }
        try {
            $rowData = $this->_objectManager->create('Webkul\Grid\Model\Grid');
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('grid/grid/index');
    }
 
    /**
     * Check Category Map permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Webkul_Auction::add_auction');
    }
}