<?php
session_start();
function getMessage()
{
    if (!isset($_SESSION['msg'])) {
        return false;
    }
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function setMessage(string $msg)
{
    $_SESSION['msg'] = $msg;
}