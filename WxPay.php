<?php

include 'pay.php';

class WxPay implements Pay
{
    public function userInfo()
    {
        echo 'get user info';
    }

    public function pay()
    {
        echo 'pull Wechat pay request';
    }

    public function order()
    {
        echo 'put order sn into Db';
    }
}
