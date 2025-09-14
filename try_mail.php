<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Jabez Munene',
    'mail_from' => 'jabez.njue@strathmore.edu',
    'name_to' => 'Munenez',
    'mail_to' => 'jabmunene@gmail.com',
    'subject' => 'INTRODUCTION To API',
    'body' => 'Welcome to <b>API</b>! Application Programming of the Internet.'
];

$ObjSendMail ->Send_Mail ($conf, $mailCnt);