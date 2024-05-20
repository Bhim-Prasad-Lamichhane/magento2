<?php

namespace Intuji\Mymodule\Controller\Adminhtml\Post;

class Savepost extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;
	protected $IntujipostFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
		\Intuji\Mymodule\Model\IntujipostFactory $intujipostFactory
	)
	{
		$this->intujipostFactory = $intujipostFactory;
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
		{
			$data = $this->getRequest()->getPostValue();

			// Instantiate the Intujipost model using the factory
			$model = $this->intujipostFactory->create();

			$resultRedirect = $this->resultRedirectFactory->create();
			try {
				// Set data to the model and save
				$model->setData($data);
				$model->save();
				$this->messageManager->addSuccessMessage(__('You saved the post.'));
			} catch(\Exception $e) {
				$this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the post.'));
			}
			return $resultRedirect->setPath('*/*/');
		}
}