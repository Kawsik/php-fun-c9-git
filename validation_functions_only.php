<?php
// username and password and email
    function blank_check($value){
        return isset($value) && !empty($value);
    }

// username
    // function string_check($value){
    //     return is_string($value);
    // }
    function upper_check($value){
        return ctype_upper($value);
    }

// password
    function length_check($value, $min){
        return strlen($value) > $min;
    }
    function matching_check($value){
        return !in_array($value, array("123456"));
    }

// email
    function special_char($value){
        return strstr($value, "@");
    }

?>