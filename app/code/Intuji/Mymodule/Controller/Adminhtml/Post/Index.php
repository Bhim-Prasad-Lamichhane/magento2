<?php

namespace Intuji\Mymodule\Controller\Adminhtml\Post;

class Index extends \Magento\Backend\App\Action    // Magento\Backend\App\Action, indicating that it's a controller for the admin panel.
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


		return $resultPage;
	}


}

// public function execute() : This method is executed when the controller is called. It returns a result page with the title "Manage Intuji Blogs".

// $resultPage->getConfig()->getTitle()->prepend() :  
// fetches the title object associated with the result page's configuration and then prepends the specified text to the title content. 
// This allows you to dynamically modify the page title based on various factors such as user input, system configuration, 
// or the current state of the application.



// form here the code is passed to the layout ..
// it is intujiblog_post_index.xml    intujiblog=routerid post=controller and index=action name
