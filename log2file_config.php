<?php
/*************************************************************
* File:            log2file_config.php   
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

// The following Log paths can be set to Absolute Paths so you can set the path outside of the Site for security
// Currently using .htaccess to block people
define("Log_Path",              "./_logz");
define("Sql_Log_Path",          "./_logz");
define("Usertrack_Log_Path",    "./_logz/usertracks");
define("Util_Log_Path",         "./_logz");

define("TraceMode",             TRUE);	          //FALSE: Trace() deactivated; TRUE: Trace() activiated
define("Usertrack_Available",   TRUE);	          //FALSE: Usertrack log deactivated; TRUE: Usertrack log activiated