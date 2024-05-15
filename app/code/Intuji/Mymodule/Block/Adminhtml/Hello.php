<?php

namespace Intuji\Mymodule\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Hello extends Template
{
    /**
     * @var string
     */
    protected $_template = 'Intuji_Mymodule::hello.phtml';

    /**
     * Retrieve message to display
     *
     * @return string
     */
    public function getHelloMessage()
    {
        return __('Hello Intuji');
    }
}
