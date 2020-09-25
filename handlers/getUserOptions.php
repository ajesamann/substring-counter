<?php
#grab the options declared by the user
function checkUserOptions(){
    if(isset($_POST['caps-option']) && isset($_POST['space-option'])){
        #if both options are selected
        return 3;
    }elseif(isset($_POST['caps-option'])){
        #if they want the caps seperated as a unique character
        return 2;
    }elseif(isset($_POST['space-option'])){
        #if the want spaces included in the count
        return 1;
    }else{
        #if nothing is selected
        return 0;
    }
}
?>