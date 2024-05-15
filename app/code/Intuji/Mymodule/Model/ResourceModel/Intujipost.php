<?php
namespace Intuji\Mymodule\Model\ResourceModel;


class Intujipost extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('intuji_blog_posts', 'post_id');
	}
	
}