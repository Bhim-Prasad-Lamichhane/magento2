define(
    [   
        'ko',
        'Magento_Checkout/js/view/payment/default'
    ],
    function (Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Intuji_Custompayment/payment/testpayment'
            }
        });
    }
);