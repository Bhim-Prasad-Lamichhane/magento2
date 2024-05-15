<?php
namespace Intuji\Mymodule\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Intuji\Mymodule\Model\ResourceModel\Post');
    }

    public function getId()
    {
        return $this->getData('id');
    }

    public function getUserId()
    {
        return $this->getData('userId');
    }

    public function getTitle()
    {
        return $this->getData('title');
    }

    public function getBody()
    {
        return $this->getData('body');
    }
}
