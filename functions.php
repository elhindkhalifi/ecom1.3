<?php
function nameLengthIsValid($nameToValid)
{
    //min 2 max 10
    $length= strlen($nameToValid);
    $responses=[
        "isValid"=>true,
        "msg"=>""
    ];
if ($length <2) {
    $responses=[
    'isValid'=>false,
    'msg'=> 'Non trop court'
    ];
    }elseif ($length >10) {
    $responses=[
    "isValid"=>false,
    'msg'=> 'Non trop long'
    ];
    }
    return $responses;
}
?>