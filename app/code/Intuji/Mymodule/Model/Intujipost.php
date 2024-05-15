<?php
namespace Intuji\Mymodule\Model;

class Intujipost extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
		$this->_init('Intuji\Mymodule\Model\ResourceModel\Intujipost');
	}
}