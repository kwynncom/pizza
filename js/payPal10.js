function activatePPBtn() {
    
    byid('paypal-button-container').innerHTML = '';
    
    [paypal.FUNDING.PAYPAL].forEach(function(fundingSource) {
        const button = paypal.Buttons({ 
            fundingSource: fundingSource,  
            style: { height: 55 }, 
            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{"amount" : {"currency_code" : "USD", "value" : byid('total').innerHTML }}]
              });
            },
           onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                payment_complete(details);
            });
            }
        });
        if (button.isEligible()) { button.render('#paypal-button-container'); }
    });
}
