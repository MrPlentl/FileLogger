<?php
/**
 * Created by PhpStorm.
 * User: bplentl
 * Date: 9/19/2014
 * Time: 3:57 PM
 */

define("USERNAME","webmaster@daystar.com");
define("PASSWORD","w-H621LOdAFKivoKXaox2g");

//define("TO_ADDRESS","webmaster@daystar.com");
//define("TO_NAME","Webmaster");
define("DEFAULT_TO_ADDRESS","brandon.plentl@daystar.com");
define("DEFAULT_TO_NAME","Brandon Plentl");
define("DEFAULT_FROM_ADDRESS","webmaster@daystar.com");
define("DEFAULT_FROM_NAME","Webmaster - Brandon Plentl");

class mail extends log2file {
    public function send_email($to_address,$to_name,$from_address,$from_name,$subject,$content){
        // send e-mail to ...
        include_once("swiftmailer/swift_required.php"); //Swift Mailer include

        //$subject="New Giving Error";
        $to = array( $to_address => $to_name );
        //$bcc = "brandon.plentl@daystar.com";
        $from = array($from_address => $from_name);

        $transport = new Swift_SmtpTransport('smtp.mandrillapp.com', 587);
        $transport->setUsername( USERNAME );
        $transport->setPassword( PASSWORD );	// This API key is used for Giving Errors
        $swift = new Swift_Mailer($transport);

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($content, 'text/html');
        $message->setTo($to);
        //$message->setBCC($bcc);

        if ($recipients = $swift->send($message, $failures)){
            $this->History("EMAIL sent.");
        }else{
            $this->ErrorLog("Could not send EMAIL", "[ERROR]");
        }
    }

    public function send_error_email($content){
        // send e-mail to ...
        include_once("swiftmailer/swift_required.php"); //Swift Mailer include

        $subject="Incoming Error Message";
        $to = array( DEFAULT_TO_ADDRESS => DEFAULT_TO_NAME );
        //$bcc = "brandon.plentl@daystar.com";
        $from = array(DEFAULT_FROM_ADDRESS => DEFAULT_FROM_NAME);

        $transport = new Swift_SmtpTransport('smtp.mandrillapp.com', 587);
        $transport->setUsername( USERNAME );
        $transport->setPassword( PASSWORD );	// This API key is used for Giving Errors
        $swift = new Swift_Mailer($transport);

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        $message->setBody($content, 'text/html');
        $message->setTo($to);
        //$message->setBCC($bcc);

        if ($recipients = $swift->send($message, $failures)){
            $this->History("EMAIL sent.");
        }else{
            $this->ErrorLog("Could not send EMAIL", "[ERROR]");
        }
    }
} 