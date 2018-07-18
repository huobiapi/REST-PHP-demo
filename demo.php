<?php
// 定义参数
define('ACCOUNT_ID', ''); // 你的账户ID 
define('ACCESS_KEY',''); // 你的ACCESS_KEY
define('SECRET_KEY', ''); // 你的SECRET_KEY

include "lib.php";

//实例化类库
$req = new req();
// 获取账户余额示例
var_dump($req->get_balance());

?>