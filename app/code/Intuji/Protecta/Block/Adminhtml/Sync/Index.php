<?php
namespace Intuji\Protecta\Block\Adminhtml\Sync;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Template;

class Index extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getSyncUrl()
    {
        return $this->getUrl('intujiblog/sync/syncAll');
    }
}
