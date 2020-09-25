<?php
#require the module to get the user options
require 'getUserOptions.php';
require 'stringCounter.php';

#grab the submit button and check when it is clicked
if(isset($_POST['submit'])){
    #check to make sure the input isn't empty
    if(strlen($_POST['user-string']) == 0){
        echo 'You must type in a string!';
    #check to make sure the input isn't too long
    }elseif(strlen($_POST['user-string']) >= 30){
        echo "That's too long!";
    }else{
        #check what options the user has selected
        if(checkUserOptions() == 0){
            #make everything lowercase and count the letters without spaces
            countString(false, false);
        }elseif (checkUserOptions() == 1) {
            #make everything lowercase and count the letters including the spaces
            countString(true, false);
        }elseif(checkUserOptions() == 2){
            #count every letter even the capital ones as a unique character
            countString(false, true);
        }elseif(checkUserOptions() == 3){
            #count spaces and capital letters as unique characters
            countString(true, true);
        }
    }
}
?>
