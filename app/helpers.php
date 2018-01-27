<?php

function flash($message, $type = 'info') 
{
    $type_conversions = [
        'default' => 'info',
        'error' => 'danger',
        'blue' => 'info',
        'red' => 'danger',
        'yellow' => 'warning',
        'green' => 'success'
    ];
    if(array_key_exists($type, $type_conversions)) {
        $type = $type_conversions[$type];
    }
    Session::flash('flash_message', $message);
    Session::flash('flash_message_type', $type);
}