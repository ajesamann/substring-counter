<?php
function countString($spacesBoolean, $capsBoolean){
    #grab the input from the user
    $string = strip_tags($_POST['user-string']);
    $lowercase_string = strtolower($string);
    #converting the string to an array so it can be manipulated
    $stringArray = str_split($string);
    $lowercaseStringArray = str_split($lowercase_string);
    #array in which will hold the results
    $resultArr = [];

    if($spacesBoolean && $capsBoolean){
        #include the capital letters and spaces in this outcome
        #loop through the string provided by the user
        foreach ($stringArray as $char){
            #for each character count how many times that character shows up in the string
            $number = substr_count($string, $char);
            #store the letter along with how many times it appears in the string, inside this object
            $letterNumObj = (object)['letter' => $char, 'number' => $number];
            #check if the letter has been pushed into the results array already, if it has then do nothing, else push the object in
            in_array($letterNumObj, $resultArr) ? null : array_push($resultArr, $letterNumObj);
        }
        #echo each letter and its number from the result array
        foreach($resultArr as $result){
            #spaces included
            echo $result->letter == ' ' ? "<div class='count'>Spaces - $result->number</div>" : "<div class='count'>$result->letter - $result->number</div>";
        }
    }elseif($spacesBoolean){
        #include the spaces in this outcome
        foreach ($lowercaseStringArray as $char){
            $number = substr_count($lowercase_string, $char);
            $letterNumObj = (object)['letter' => $char, 'number' => $number];
            in_array($letterNumObj, $resultArr) ? null : array_push($resultArr, $letterNumObj);
        }
        foreach($resultArr as $result){
            #spaces included
            echo $result->letter == ' ' ? "<div class='count'>Spaces - $result->number</div>" : "<div class='count'>$result->letter - $result->number</div>";
        }
    }elseif($capsBoolean){
        #include the capital letters as seperate letters in this outcome
        foreach ($stringArray as $char){
            $number = substr_count($string, $char);
            $letterNumObj = (object)['letter' => $char, 'number' => $number];
            in_array($letterNumObj, $resultArr) ? null : array_push($resultArr, $letterNumObj);
        }
        foreach($resultArr as $result){
            echo $result->letter == ' ' ? null : "<div class='count'>$result->letter - $result->number</div>";
        }
    }else{
        #don't include spaces or capital letters in this outcome
        foreach ($lowercaseStringArray as $char){
            $number = substr_count($lowercase_string, $char);
            $letterNumObj = (object)['letter' => $char, 'number' => $number];
            in_array($letterNumObj, $resultArr) ? null : array_push($resultArr, $letterNumObj);
        }
        foreach($resultArr as $result){
            echo $result->letter == ' ' ? null : "<div class='count'> $result->letter - $result->number</div>";
        }
    }
}
?>