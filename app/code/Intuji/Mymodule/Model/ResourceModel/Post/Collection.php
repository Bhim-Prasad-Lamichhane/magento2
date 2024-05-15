<?php
namespace Intuji\Mymodule\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Intuji\Mymodule\Model\Post as Model;
use Intuji\Mymodule\Model\ResourceModel\Post as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
