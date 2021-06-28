<!-- // kitu atveju pasiimam msg.
// pasiimam msg(tarpini) kad galetumem atvaizduoti ir
// istrinam kad eiti prie kitu rezultatu, kad jo vis nerodytu naujose reiksmese -->

<?php
// session_start();

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
