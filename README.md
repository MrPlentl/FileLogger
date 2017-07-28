# FileLogger
### Cause sometimes I just need a File Logging Solution

### Out of the box, just add a require path to the Log2File.class.php file
* require_once("FileLoggerBasic/Log2File.class.php");
* NOTE: jQuery is REQUIRED for the front end logging



### Under Development
I'm working on the final version of this simple Logger

SETUP
### Included in __config.php
The following Log paths can be set to Absolute Paths so you can set the path outside of the Site for security
Currently using .htaccess to block people
* define("Log_Path",              "../_logs");                // General Log directory
* define("Sql_Log_Path",          "../_logs");                // This is just for the separate log file for SQL transactions. Normally this is for INSERTS and UPDATES
* define("Usertrack_Log_Path",    "../_logs/usertracks");     // Usertrack_Log() creates a daily log for each user
* define("Util_Log_Path",         "../_logs");                // UtilLog() gives the logging ability for Commandline Utility Scripts/Programs; Not meant to be used from the Browser


### Special Features ###
* Trace Mode is great for expansive logging that you might want to turn on and off from time to time without writing and deleting code
define("TraceMode",             TRUE);	          //FALSE: Trace() deactivated; TRUE: Trace() activated

* User tracks are for logging specific users. When set to TRUE, users will have their own log file along with the History log.
define("Usertrack_Available",   TRUE);	          //FALSE: Usertrack log deactivated; TRUE: Usertrack log activated

# Method List ###
function History( $item );
    == General Log files
function UtilLog( $item );
    == Utility Log files - Used for primarily for local CLI scripts
function LogInput();
    == Logs any and all $_POST and/or $_GET values; Fields with CCnum will only print the last 4
function LogServerInfo();
function Trace( $item );
SQLHistoryLog( $SqlScript );
function ErrorLog ( $item, $logSessionInfo=FALSE );
function ErrorSessionLog();
function send_error_notification()

## License

All files are published using [GNU General Public License (GPL) version 3](https://www.gnu.org/licenses/license-list.html#GNUGPL).
I'm guessing I picked the right one, but basically, I don't care what you do with this code.


## The FileLogger Team

There is no "I" in Team... but in this case, it's just me. :) My FileLogger Class is currently maintained by [Brandon Plentl](https://github.com/MrPlentl),

## Thank you!

I really appreciate all kinds of feedback and contributions. Let me know if any of this is useful!