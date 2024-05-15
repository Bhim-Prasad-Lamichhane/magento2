<?php
namespace Intuji\Mymodule\Model\ResourceModel\Post;

class Intujicollection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Intuji\Mymodule\Model\Intujipost', 'Intuji\Mymodule\Model\ResourceModel\Intujipost');
	}

}