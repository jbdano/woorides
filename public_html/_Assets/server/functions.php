<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/SMTP.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';


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
                    'label' => 'First Name',
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['lastName'] = array(
                    'label' => 'Last Name',
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['email'] = array(
                    'label' => 'Email',
                    'required' => true,
                    'pre_sanitize' => false,
                    'post_validate' => FILTER_VALIDATE_EMAIL
                );

                $all_keys['type'] = array(
                    'label' => 'Type',
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['message'] = array(
                    'label' => 'Message',
                    'required' => true,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                $all_keys['phone'] = array(
                    'label' => 'Phone Number',
                    'required' => false,
                    'pre_sanitize' => FILTER_SANITIZE_STRING,
                    'post_validate' => false
                );

                // additional required parameters depending on Type parameter
                switch ($client_inputs['type']) {
                    case 'Transportation Services':
                        $all_keys['eventLocation'] = array(
                            'label' => 'Event Location',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['eventStartTime'] = array(
                            'label' => 'Event Start Time',
                            'required' => true,
                            'pre_sanitize' => false,
                            'post_validate' => false
                        );
                        $all_keys['eventEndTime'] = array(
                            'label' => 'Event End Time',
                            'required' => true,
                            'pre_sanitize' => false,
                            'post_validate' => false
                        );
                        break;
                    case 'Advertising':
                        $all_keys['orgName'] = array(
                            'label' => 'Organization Name',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advStart'] = array(
                            'label' => 'Advertising Start Date',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advEnd'] = array(
                            'label' => 'Advertising End Date',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        $all_keys['advType'] = array(
                            'label' => 'Advertising Type',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                    case 'Rides':
                        $all_keys['serviceDate'] = array(
                            'label' => 'Date of Service Requested',
                            'required' => true,
                            'pre_sanitize' => FILTER_SANITIZE_STRING,
                            'post_validate' => false
                        );
                        break;
                    case 'Tours':
                        $all_keys['serviceDate'] = array(
                            'label' => 'Date of Service Requested',
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

                    $full_name = $form_inputs['firstName'] . ' ' . $form_inputs['lastName'];

                    $body = 'Name: '.$full_name.'<br>';
                    $body .= 'Email: '.$form_inputs['email'].'<br>';
                    $body .= 'Phone: '.$form_inputs['phone'].'<br>';
                    $body .= 'Type of Inquiry: '.$form_inputs['type'].'<br><br>';

                    $defer_keys = array('firstName', 'lastName', 'email', 'phone', 'message');

                    foreach ($form_inputs as $key => $value) {

                        if (!in_array($key, $defer_keys)) {

                            $label = isset($all_keys[$key]['label']) ? $all_keys[$key]['label'] : $key;
                            $body .= $label.': '.$value.'<br>';
                        }
                    }

                    $body .= '<br><strong>Message</strong>: '.$form_inputs['message'];

                    // plain text for email clients that don't support html
                    $breaks = array("<br />","<br>","<br/>");  
                    $altBody = str_ireplace($breaks, "\r\n", $body);
                    $altBody = strip_tags($altBody);

                    $mail = new PHPMailer;
                    
                    $mail->isSMTP();

                    //Enable SMTP debugging
                    // 0 = off (for production use)
                    // 1 = client messages
                    // 2 = client and server messages
                    $mail->SMTPDebug = 2;
                    $mail->Port = 587;
                    $mail->SMTPSecure = 'tls';
                    $mail->SMTPAuth = true;
                    $mail->Host = MAILHOST;
                    $mail->Username = MAILUSERNAME;
                    $mail->Password = MAILPASSWORD;

                    $mail->setFrom(MAILUSERNAME, 'Woorides Website');
                    $mail->addReplyTo($form_inputs['email'], $full_name);
                    $mail->addAddress('julian.dano2016@gmail.com', 'Julian Dano');
                    $mail->Subject = 'Message received from '.$full_name.' ('.$form_inputs['type'].')';
                    $mail->isHTML(true);
                    $mail->Body    = $body;
                    $mail->AltBody = $altBody;
                    
                    //send the message, check for errors
                    if (!$mail->send()) {
                        error_log(print_r($mail->ErrorInfo,true));
                    } 
                    else {
                        $res->success = true;
                    }
                }
            }
        }
    }

    return $res;
}
?>