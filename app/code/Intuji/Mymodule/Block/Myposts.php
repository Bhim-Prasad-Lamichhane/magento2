<?php
namespace Intuji\Mymodule\Block;

use Magento\Framework\View\Element\Template;

class Myposts extends Template
{
    public function getPosts()
    {
        return $this->getData('posts');
    }
}
