<?

# Check table users and add message to log 
# Add new user
# Fields to use: id, user_id, 

#394569644 - Kayzer
#101394186 - RedBlack

// if (!$message) return false;


function addToLog($message) {
    # get log file from config later
    $file = 'log.txt';
    if (!checkFile($file)) {
        # stop here
    }
    $message = "Mess: " . $message . "\r\n";
    // Write the contents to the file, 
    // using the FILE_APPEND flag to append the content to the end of the file
    // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
    file_put_contents($file, $message, FILE_APPEND | LOCK_EX);
}

function checkUser($message) {
    # parse message to ...
    echo $message . "parse message to ...";
}

function checkFile($filename) {
    # if exists
    return true;
}