<?php
// 定义参数
define('ACCOUNT_ID', '123456'); // your account ID 
define('ACCESS_KEY','XXXXXXXX-XXXXXXXX-XXXXXXXX-XXXXX'); // your ACCESS_KEY
define('SECRET_KEY', 'XXXXXXX-XXXXXXX-XXXXXX-XXXXX'); // your SECRET_KEY

include "lib.php";

//实例化类库
$req = new req();
// 获取account-id, 用来替换ACCOUNT_ID
var_dump($req->get_account_accounts());
// 获取账户余额示例
//var_dump($req->get_balance());

?>
