<?php

if(!function_exists('setToasterSuccess')) {
    function setToasterSuccess(string $message) 
    {
        toast($message,'success');
    }
}


if(!function_exists('setToastetFail')) {
    function setToasterFail(string $message) 
    {
        toast($message,'error');
    }
}
