<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>pizza shop ordering</title>

<script src='js/utils.js'></script>
<script src='js/js10.js'></script>
<script src='js/payPal10.js'></script>
<script src="https://www.paypal.com/sdk/js?client-id=AeIzMoxmCyjQkAp-KjWi3PlRC16q17wekFImr0sjds7Voe2acLyk5wNdHmate9LI0xIxIEPp8tMyg8VH">/* sandbox client ID */</script>

<script>
    window.onload = total;
</script>

<style>
    label { padding-right: 1ex; }
    .qty  { font-family: monospace; width: 5.5ex; }
    .ppex { margin-top: 4ex; }
    .price{ padding-left: 1ex; }
    .coPar { visibility: hidden; }
    #orderOK { visibility: hidden; }
</style>


</head>
<body>
	<div>
		<p>Session ID from Kwynn's own function:
		<?php require_once('/opt/kwynn/kwutils.php');
			echo(startSSLSession());
			?></p>
	</div>
	<p><a href='page2.php'>page 2</a>, to demo session
		
	</p>
	
	<p>Remember that /opt/kwynn is a clone of <a href='https://github.com/kwynncom/kwynn-php-general-utils'>my general PHP utilities</a>.  
		
	</p>
	<p>Updated 2022/01/04 23:35.
		
	</p>
	
<div>
    <div><label>pepperoni qty</label>
        <input class='qty' type='number' step='1' min='0' max='999' data-priceelement='pepprice' id='pepqty' oninput='total();' />
        <span class='price'>$<span id='pepprice'>5</span> each</span>
    </div>
    <div><label>total</label>$<span id='total'></span></div>
    <div id='coPar'>to checkout press the PayPal button: 
        <div>For the sandbox / testing, your life is somewhat easier if you create a sandbox PayPal account.  Otherwise, use "... or Pay with Debit or Credit Card" / 
            AmEx 378282246310005 , CVV 1234, something close to a real address, a fake phone number, continue as guest...</div>
        <div>Note that you may have to log out of various PayPal accounts when you use your real developer account and then confuse a sandbox user login.</div>
        <div id="paypal-button-container"></div>
    </div>
    <div id='orderOK'>order made! - client side confirmation PayPal transaction ID: <span id='ppxid'></span></div>
</div>

	<div class='ppex'>
		<a href='https://kwynn.com/t/20/11/pp/example10.html'>PayPal examples</a>
	</div>
    
    
    <div>PayPal server-side notes:
        <ul>
            <li>note that <a href='https://developer.paypal.com/docs/api/reference/get-an-access-token/#curl'>this page has a "CURL" option</a> in addition to the "Postman" option</li>
            <li>for PHP CURL username/password: curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");</li>
        </ul>
        
    </div>
    
    <div><a href='https://github.com/kwynncom/pizza'>source code of this project</a>
        
    </div>
    
    <div>Version: 2021/12/01 02:40 AM EST
        
    </div>
	
<div style='margin-top: 4ex'>
    <a href="https://validator.w3.org/check?uri=referer"><img
        src="media/html5valid.jpg"
        alt="HTML5 valid" width="103" height="36" /></a>
</div>
	
</body>
</html>





