
    <div id="page-wrapper">
        <div class="row">
             <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Pay Appointment</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3>After proccess you payment you have to report it</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <center>
                                <div id="smart-button-container">
                                    <div style="text-align: center;">
                                        <div id="paypal-button-container"></div>
                                    </div>
                                </div>
                                <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                                <script>
                                    function initPayPalButton() {
                                    paypal.Buttons({
                                        style: {
                                        shape: 'pill',
                                        color: 'gold',
                                        layout: 'horizontal',
                                        label: 'checkout',
                                        tagline: true
                                        },

                                        createOrder: function(data, actions) {
                                        return actions.order.create({
                                            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                                        });
                                        },

                                        onApprove: function(data, actions) {
                                        return actions.order.capture().then(function(orderData) {
                                            
                                            // Full available details
                                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                            // Show a success message within this page, e.g.
                                            const element = document.getElementById('paypal-button-container');
                                            element.innerHTML = '';
                                            element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                            // Or go to another URL:  actions.redirect('thank_you.html');
                                            
                                        });
                                        },

                                        onError: function(err) {
                                        console.log(err);
                                        }
                                    }).render('#paypal-button-container');
                                    }
                                    initPayPalButton();
                                </script>    
                            </center>
                        </div>
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>