<?php

function addToLog($message) {
    # get log file from config later
    
    if (!checkFile($logFile)) {
        # stop here
    }
    $logMessage = "Mess: " . $message . "\r\n";
    // Write the contents to the file, 
    // using the FILE_APPEND flag to append the content to the end of the file
    // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
    file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
}

function parseMsg($message) {
    # Get fields from message

    $chat_id = $message['message']['chat']['id'];
    $user_id = $message['message']['from']['id'];
    $text = $message['message']['text'];
    $u_name = $message['message']['from']['username'];
    $f_name = $message['message']['from']['first_name'];
    $l_name = $message['message']['from']['last_name'];
}


function authUser($user_id) {
# Check user in database
# Add new user if not exists with role = guest
# If exists - get role 
// TODO: cntinue from here
    if ($user_id == '101394186') $user_role = 'Costa';
    elseif ($user_id == '394569644') $user_role = 'Legend Man';
    return $user_role;
}

function checkFile($filename) {
    # if exists
    return true;
}