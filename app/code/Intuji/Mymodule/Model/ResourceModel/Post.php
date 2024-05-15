<?php
namespace Intuji\Mymodule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb  //Extending AbstractDb, this class inherits methods and functionalities that allow it to interact with the database
{
    protected function _construct()
    {
        $this->_init('posts', 'id');    //posts i.e table name and id i.e primary key
    }
}
