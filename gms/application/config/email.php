<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.gmail.com', 
    'smtp_port' => 465,
    'smtp_user' => 'mirrene22@gmail.com',
    'smtp_pass' => '09491812736',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '30', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);