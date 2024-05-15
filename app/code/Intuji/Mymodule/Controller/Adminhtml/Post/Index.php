<?php

namespace Intuji\Nymodule\Controller\Adminhtml\Post;

use Magento\Framework\Data\Form\FormKey\Validator as FormKeyValidator;

class Index extends \Magento\Backend\App\Action
{
	protected $resultPageFactory = false;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend((__('Manage Intuji Blogs')));


		// Validate form key
		if (!$this->_formKeyValidator->validate($this->getRequest())) {
			$this->messageManager->addErrorMessage(__('Invalid form key. Please refresh the page.'));
			return $resultPage->setPath('*/*/');
		}

		return $resultPage;
	}


}