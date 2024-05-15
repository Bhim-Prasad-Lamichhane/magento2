<?php
namespace Intuji\Mymodule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Intuji\Mymodule\Model\ResourceModel\Post\CollectionFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $postCollectionFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        CollectionFactory $postCollectionFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->postCollectionFactory = $postCollectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection = $this->postCollectionFactory->create();
        $posts = $collection->getItems();
        
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $block = $resultPage->getLayout()->getBlock('myposts');
        
        if ($block) {
            $block->setData('posts', $posts);
        }

        return $resultPage;
    }
}
