<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*  $config['charset'] = 'iso-8859-1';
  $config['protocol'] = 'mail'; // mail, sendmail, or smtp    The mail sending protocol.
  $config['mailpath'] = '';
  $config['smtp_host'] = 'mail.dev.swahilicoast.co.ke';// SMTP Server Address.
  $config['smtp_user'] = 'mail@dev.swahilicoast.co.ke'; // SMTP Username.'msaisimunye80@gmail.com';//
  $config['smtp_pass'] = 'munywefu1988'; // SMTP Password.
  $config['smtp_port'] = '25';// SMTP Port.
  $config['wordwrap'] = TRUE;
  $config['priority'] = 1; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
  $config['crlf'] = '\r\n'; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
  $config['newline'] = '\r\n'; // "\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).	*/
  $config['protocol'] = 'sendmail'; // mail, sendmail, or smtp    The mail sending protocol.
  $config['mailpath'] = '/usr/sbin/sendmail';
 /* $config['smtp_host'] = 'mail.dev.swahilicoast.co.ke';// SMTP Server Address.
  $config['smtp_user'] = 'mail@dev.swahilicoast.co.ke'; // SMTP Username.'msaisimunye80@gmail.com';//
  $config['smtp_pass'] = 'munywefu1988'; // SMTP Password.
  $config['smtp_port'] = '25';// SMTP Port.*/
  
  $config['charset'] = 'iso-8859-1';
  $config['wordwrap'] = TRUE;
  $config['priority'] = 1; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
  $config['crlf'] = '\r\n'; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
  $config['newline'] = '\r\n'; // "\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).