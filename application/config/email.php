<?php defined('BASEPATH') OR exit('No direct script access allowed.');

$config['useragent']        = 'PHPMailer';            
$config['protocol']         = 'smtp';              
$config['smtp_host']        = 'smtp.gmail.com';
$config['smtp_auth']        = true;                    
$config['smtp_user']        = 'ipparking.servicioalcliente@gmail.com';
$config['smtp_pass']        = 'IPParking1061791895';
$config['smtp_port']        = 465;
$config['smtp_timeout']     = 30;
$config['smtp_crypto']      = 'ssl';
$config['smtp_debug']       = 0;
$config['debug_output']     = '';
$config['smtp_auto_tls']    = true;
$config['smtp_conn_options'] = array();
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';               
$config['charset']          = 'UTF-8';  
$config['validate']         = true;
$config['priority']         = 1; 
$config['crlf']             = "\n";
$config['newline']          = "\n";
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;
$config['encoding']         = '8bit';