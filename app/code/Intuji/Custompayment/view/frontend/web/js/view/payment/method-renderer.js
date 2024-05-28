define(
    [   'ko',
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        ko,
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'testpayment',
                component: 'Intuji_Custompayment/js/view/payment/method-renderer/testpayment'
            }
        );
        return Component.extend({});
    }
);