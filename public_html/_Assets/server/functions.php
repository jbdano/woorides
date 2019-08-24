<?php

include_once 'functions-config.php';

$res = new stdClass();
$res->success = false;

$vars = isset($_POST) ? $_POST : $_GET;

if (isset($vars['f'])) {
    
    switch ($vars['f']) {
        case 'submitcontactform':
            $res = submitcontactform($vars['params']);
            break;
    }
}

function submitcontactform($string=null) {

    $res = new stdClass();
    $res->success = false;

    if (isset($string)) {

        parse_str($string, $client_inputs);
        
        // check for robots (beep boop)
        if (isset($client_inputs['info']) && $client_inputs['info'] === '') {

            // check for required Type parameter
            if (isset($client_inputs['type']) && $client_inputs['type'] !== '') {

                // configure parameters to look for
                $all_keys = array();
                
                $all_keys['firstName'] = array(
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['lastName'] = array(
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['email'] = array(
                    'required' => true,
                    'pre_sanitize' => false,
                    'post_validate' => FILTER_VALIDATE_EMAIL
                );

                $all_keys['type'] = array(
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['message'] = array(
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['phone'] = array(
                    'required' => false,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                // additional required parameters depending on Type parameter
                switch ($client_inputs['type']) {
                    case 'events':
                        $all_keys['eventLocation'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['eventStartTime'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['eventEndTime'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                    case 'advertising':
                        $all_keys['orgName'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advStart'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advEnd'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advType'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                    case 'rides':
                        $all_keys['serviceDate'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                    case 'tours':
                        $all_keys['serviceDate'] = array(
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                }

                // collect all sanitized form data here
                $form_inputs = array();
                $form_valid = false;

                // sanitize and validate all required and optional key parameters
                foreach ($all_keys as $key => $key_info) {

                    if (isset($client_inputs[$key]) && $client_inputs[$key] !== '') {

                        $value = $client_inputs[$key];

                        if ($key_info['pre_sanitize'] !== false) {

                            $value = filter_var($value, $key_info['pre_sanitize']);
                        }

                        if ($key_info['post_validate'] !== false && $value !== false) {

                            $value = filter_var($value, $key_info['post_validate']);
                        }

                        if ($value !== false) {

                            $form_inputs[$key] = $value;
                        }
                    }
                }

                if (count($all_keys) === count($form_inputs)) {

                    $form_valid = true;
                }

                if ($form_valid) {


                    


                    
                }
            }
        }




        
        // make sure the hidden checkbox input was not checked and passed through
        // if ($robot_check && $required_check && $topic_check) {

        //     $fname = $client_inputs['firstName'];
        //     $lname = $client_inputs['lastName'];
        //     $fullname = $fname." ".$lname;
        //     $email = $client_inputs['email'];
        //     $phone = (isset($client_inputs['phone']) && ($client_inputs['phone'] != '')) ? $client_inputs['phone'] : 'none';
        //     $topic = $client_inputs['topic'];
        //     $topic_code = $client_inputs['topic_code'];
        //     $message = $client_inputs['message'];

        //     // Remove all illegal characters from email
        //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        //     // Validate e-mail
        //     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        //         switch ($topic_code) {
        //             case 'volunteer':
        //                 $to = 'volunteer@acechildren.org';
        //                 break;
        //             case 'mentor':
        //                 $to = 'mentor@acechildren.org';
        //                 break;
        //             case 'donation':
        //                 $to = 'donate@acechildren.org';
        //                 break;
        //             case 'partner':
        //                 $to = 'marketing@acechildren.org';
        //                 break;
        //             case 'feedback':
        //                 $to = 'marketing@acechildren.org';
        //                 break;
        //             default:
        //                 $to = 'info@acechildren.org';
        //                 break;
        //         }

        //         $subject = "Message received from ".$fullname." (".$topic.")";
        //         $headers = "Reply-To: ".$email." \r\n";
        //         $headers .= "MIME-Version: 1.0 \r\n";
        //         $headers .= "Content-Type: text/html; charset=iso-8859-1";
               
        //         $body = "Name: ".$fullname."<br/>";
        //         $body .= "Email: ".$email."<br/>";
        //         $body .= "Phone: ".$phone."<br/>";
        //         $body .= "Topic: ".$topic."<br/><br/>";
        //         $body .= "Message:<br/>";
        //         $body .= $message;

        //         $body = utf8_decode($body);

        //         if (mail($to,$subject,$body,$headers)) {
        //             $res->success = true;
        //         }
        //     }
        // }
    }

    return $res;
}
?>