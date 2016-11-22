<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Db_log {
    
    function __construct() {
        // Anything except exit() :P
    }
    
    // Name of function same as mentioned in Hooks Config
    function PostQuery() {
        $CI = & get_instance();
        $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; // Creating Query Log file with today's date in application/logs folder
        $handle = fopen($filepath, "a+");                 // Opening file with pointer at the end of the file
        fwrite($handle, "PostQuery" . "\n\n");                 // Get execution time of all the queries executed by controller
        fclose($handle);      // Close the file
    }
    function PreQuery() {
        $CI = & get_instance();
        $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; // Creating Query Log file with today's date in application/logs folder
        $handle = fopen($filepath, "a+");                 // Opening file with pointer at the end of the file
        fwrite($handle, "PreQuery" . "\n\n");                 // Get execution time of all the queries executed by controller
        fclose($handle);      // Close the file
    }
    
}