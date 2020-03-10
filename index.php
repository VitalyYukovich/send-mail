<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>send mail</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>
<body>
	<?php
     $hapikey = "key"; // change key
     // $contact = array(
     //        'properties' => array(
     //            array(
     //                'property' => 'email',
     //                'value' => 'park17.1994@gmail.com'
     //            ),
     //            array(
     //                'property' => 'firstname',
     //                'value' => 'vitaly'
     //            ),
     //            array(
     //                'property' => 'lastname',
     //                'value' => 'Yukovich'
     //            ),
     //            array(
     //                'property' => 'phone',
     //                'value' => '123-467'
     //            )
     //        )
     //    );
     //  $post_json = json_encode($contact);
     //    $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
     //    $ch = @curl_init();
     //    @curl_setopt($ch, CURLOPT_POST, true);
     //    @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
     //    @curl_setopt($ch, CURLOPT_URL, $endpoint);
     //    @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
     //    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     //    $response = @curl_exec($ch);
     //    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
     //    $curl_errors = curl_error($ch);
     //    @curl_close($ch);
     //    echo "curl Errors: " . $curl_errors;
     //    echo "\nStatus code: " . $status_code;
     //    echo "\nResponse: " . $response;
     $email= array(
     	'properties' => array(
                array(
                    'property' => 'emailId',
                    'value' => '84534683'
                ),
                array(
                    'property' => 'to',
                    'value' => 'parker17.1994@gmail.com'
                )
            )
     );
     	$post_json = json_encode($email);
        $endpoint = 'https://api.hubapi.com/email/public/v1/singleEmail/send?hapikey=' . $hapikey;
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_errors = curl_error($ch);
        @curl_close($ch);

        echo "curl Errors: " . $curl_errors;
        echo "\nStatus code: " . $status_code;
        echo "\nResponse: " . $response;
	?>
</body>
</html>
