<?php
function fIsValidLength($input, $minLength, $maxLength) {
   $input = trim($input);
   $IsValid = (strlen($input) >= $minLength && strlen($input) <= $maxLength);
   return $IsValid;
}

function validDate($date) {
   $arr = explode('/', $date);
   if (count($arr) == 3 && is_numeric($arr[0]) && is_numeric($arr[1]) && is_numeric($arr[2])) {
      if (checkdate($arr[1], $arr[2], $arr[0])) {
         return true;
      } else {
         return false; 
      }
   } else {
      return false;
   }
}

function fIsValidZipcode($zip){
    if(strlen($zip) == 5 && is_numeric($zip)){
        return true;
    }
    else{
        return false;
    }
}

function fIsValidRange($value,$min,$max){
    if(!is_numeric($value)){
        return false;
    }
    else{
        if($value >= $min && $value <= $max){
            return true;
        }
        else{
            return false;
        }
    }
}
?>