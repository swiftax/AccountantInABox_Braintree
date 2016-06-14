<?php
ob_start();
require_once('braintree-php/lib/Braintree.php');
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('553xcsk58zhwtngt');
Braintree_Configuration::publicKey('7pkbkjpm5h28sfwt');
Braintree_Configuration::privateKey('62ab90368789ed3c67a7d5d9eef675fd');

$result = Braintree_Customer::create(array(
                'firstName' => $_POST['firstname'],
				'lastName' => $_POST['lastname'],
				'email' => $_POST['user_email'],
				'phone' => $_POST['user_phone'],
                // we can create a credit card at the same time
                'creditCard' => array(
                    'cardholderName' =>$_POST['full_name'],
					'number' => $_POST['card_number'],
					'expirationMonth' => $_POST['expiry_month'],
					'expirationYear' => $_POST['expiry_year'],
					'cvv' => $_POST['card_cvv'],
                    'billingAddress' => array(
                        'firstName' => $_POST['firstname'],
						'lastName' => $_POST['lastname'],
                        'company' => 'My Billing Address Company',
                        'streetAddress'=>$_POST['address'],
						'locality'=>$_POST['city'],
						'region'=>$_POST['state'],
						'countryName' =>$_POST['country']
                    )
                )
            ));
			//print_r($result);
if ($result->success) {
	echo("Customer ID: " . $result->customer->id . "<br>");
    echo("Credit card ID: " . $result->customer->creditCards[0]->token . "
");
	// Now we create a subscription
	$planId = $_POST['planid']; 
	$subscriptionData = array(
		'paymentMethodToken' => $result->customer->creditCards[0]->token,
		'planId' => $planId
	);
	$result = Braintree_Subscription::create($subscriptionData);
 
	if ($result->success) {
		header("location:thankyou.php"); 
		exit;
		echo("Subscription ID: " . $result->subscription->id . "<br>");
		echo("Transaction ID: " . $result->subscription->transactions[0]->id . "<br>");
	} else {
		foreach ($result->errors->deepAll() as $error) {
			echo($error->code . ": " . $error->message . "<br>");
		}
		exit;
	}
}
?>