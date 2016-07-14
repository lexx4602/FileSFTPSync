<?php

/**
 * Created by PhpStorm.
 * User: ABorisov
 * Date: 11.07.2016
 * Time: 16:44
 */
class Logging
{
    public $email;
    public $FileName;
    private $EmailBody;
    private $LogBody;

    public function AddAction ($StrAction)
    {
     //   $this::
    }

    public function CreateEmail ($StrAction)
    {

    }
    
    public function SendMail ($email)
    {

/*
 * 
 * 
 * $to  = "<mail@example.com>, " ; 
    $to .= "mail2@example.com>"; 

    $subject = "Заголовок письма"; 

    $message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

    $headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
    $headers .= "From: От кого письмо <from@example.com>\r\n"; 
    $headers .= "Reply-To: reply-to@example.com\r\n"; 

    mail($to, $subject, $message, $headers); 
 * 
 * 
 * 
 * 
 */        
   
        
         
        
    }

    public function WriteLog ($FileName)
    {

    }


}