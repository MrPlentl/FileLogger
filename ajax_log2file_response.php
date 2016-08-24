<?php
/*************************************************************
* File:            ajax_log2file_response.php   
* Current Ver:     
* Function:       
* Author:          Brandon Plentl (bp)
* Environment:     PhpStorm - Windows 7 and iOS X
* Code Cleaned:   
* Code Validated: 
* Notes:          
* Fixes Needed:	  
* Revisions:      
*************************************************************/

require_once("log2file.php");

if(isset($_GET['history_log'])&&$_GET['history_log']!="") {
    $log = new log2file();
    $log->History($_GET['history_log']);
}