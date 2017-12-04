<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

//检查支付状态
if ($order_id = $_REQUEST['order_id']) {
    $pay_log = $GLOBALS['db']->getRow('SELECT is_paid FROM ' . $GLOBALS['ecs']->table('pay_log') . ' WHERE order_id = '.$order_id);
    if ($pay_log && $pay_log['is_paid'] == 1) {
        echo true;
    } else {
        echo false;
    }
}