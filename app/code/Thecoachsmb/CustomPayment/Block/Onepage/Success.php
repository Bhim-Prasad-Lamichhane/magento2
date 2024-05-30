<?php

namespace Thecoachsmb\CustomPayment\Block\Onepage;

use Magento\Checkout\Block\Onepage\Success as MagentoSuccess;
use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Checkout\Model\Session as CheckoutSession;

class Success extends MagentoSuccess
{
    /**
     * @var OrderRepositoryInterface
     */
    protected $orderRepository;

    /**
     * @var CheckoutSession
     */
    protected $checkoutSession;

    /**
     * @param Context $context
     * @param CheckoutSession $checkoutSession
     * @param OrderRepositoryInterface $orderRepository
     * @param array $data
     */
    public function __construct(
        Context $context,
        CheckoutSession $checkoutSession,
        OrderRepositoryInterface $orderRepository,
        array $data = []
    ) {
        $this->checkoutSession = $checkoutSession;
        $this->orderRepository = $orderRepository;
        parent::__construct($context, $checkoutSession, $data);
    }

    /**
     * Retrieve the last order
     *
     * @return \Magento\Sales\Api\Data\OrderInterface|null
     */
    public function getOrder()
    {
        $orderId = $this->checkoutSession->getLastOrderId();
        if ($orderId) {
            return $this->orderRepository->get($orderId);
        }
        return null;
    }

    /**
     * Retrieve the payment method of the order
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        $order = $this->getOrder();
        if ($order) {
            $payment = $order->getPayment();
            if ($payment) {
                return $payment->getMethodInstance()->getCode();
            }
        }
        return null;
    }
}
