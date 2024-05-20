<?php

namespace Intuji\Mymodule\Controller\Adminhtml\Post;

use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;
use Intuji\Mymodule\Model\ResourceModel\Post\IntujicollectionFactory;
use Intuji\Mymodule\Model\IntujipostFactory;

class Massdelete extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;
	protected $IntujipostFactory;

	public $IntujicollectionFactory;

    public $filter;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
	 	Filter $filter,
        IntujicollectionFactory $IntujicollectionFactory,
        IntujipostFactory $IntujipostFactory
	)
	{
		parent::__construct($context);
		$this->IntujipostFactory = $IntujipostFactory;
	 	$this->filter = $filter;
        $this->IntujicollectionFactory = $IntujicollectionFactory;
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{  
	    $ids=$this->getRequest()->getParams();
	    //echo "<pre>";
	    //print_r($ids); exit;
		 try {
            $collection = $this->filter->getCollection($this->IntujicollectionFactory->create());
            $count = 0;

            // With Mass Action Filter Class
            
            foreach ($collection as $model) {
                $model = $this->IntujipostFactory->create()->load($model->getId());
                $model->delete();
                $count++;
            }

            //Without Mass Action Filter Class
             /*foreach ($ids['selected'] as $id) {
                $model = $this->IntujipostFactory->create()->load($id);
                $model->delete();
                $count++;
            } */

            $this->messageManager->addSuccess(__('A total of %1 blog(s) have been deleted.', $count));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/index');
	}


}