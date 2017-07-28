<?php
/*************************************************************
* File:           demo.php
* Current Ver:     
* Function:       
* Author:         Brandon Plentl (bp)
* Environment:    PhpStorm - Windows 7
* Code Cleaned:   
* Code Validated: 
* Notes:          
* Fixes Needed:	  
* Revisions:      
*************************************************************/

### THIS IS REQUIRED TO USE THIS LOGGING CLASS
require_once("Log2File.class.php");   // Contains all the main logging functions

$log = new Log2File();


$my_array = array(
    'Web' => 'Brandon',
    'Boss' => 'Daniel',
    'Designer' => 'Jessica',
    'Writer' => 'Sarah',
    'Designer2' => 'Anthony'
);

$log->DumpArrayToLog($my_array);

$log->LogUserAgent();
$log->ErrorLog("This is a normal Error!");
$log->LogInput();
$log->SQLHistoryLog("SELECT * FROM mytable where field=7");

?>
<?php $log->Trace(1); ?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="ajax_log2file.js"></script>
</head>
<body>
<div id="div1"></div>
<?php $log->Trace(2); ?>
<form id="test" action="" method="post">
    <input type="button" id="test_button" name="test_button" value="MyButton"  />
    <input type="text" id="test_text" name="fName" placeholder="Log will track this" />
    <input type="text" id="X_test_text" name="X_test_text" placeholder="Log will not track this item" />
    <input type="text" id="CCnum" name="CCnum" placeholder="Log will not track this item" />
    <input type="checkbox" name="checkbox1" id="checkbox1" value="Checkbox 1" />Mail me more info<br />
    <input type="radio" name="radio1" id="Myradio1" value="Radio 1" />Radio 1<input type="radio" name="radio1" id="Myradio2" value="Radio 2" />Radio 2<br />
    <select name="countries" id="countries">
        <?php $log->Trace(3); ?>
        <option>Argentina</option>
        <option>Albania</option>
        <option>Afganistain</option>
        <option selected="selected">Aruba</option>
    </select>

    <input type="button" id="test_log" name="test_log" value="Do Not Click" onclick="History('This user clicked a button they were not suppose to.')"  />
    <?php $log->Trace(4); ?>
    <input type="submit" id="submit" name="submit" value="submit" />
</form>
<?php $log->Trace(5); ?>
<?php $log->Trace(6); ?>
</body>
</html>