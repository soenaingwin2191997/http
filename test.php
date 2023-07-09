<?php

include "vendor/autoload.php";

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

use Faker\Factory as Faker;
use Faker\Provider\HtmlLorem;

// HTTP::redirect("/index.php","http=test");
// $user=Auth::check();
// print_r($user); 

// $mysql=new MySQL();
// $db=$mysql->connect();

// $result=$db->query("SELECT * FROM roles");

// print_r($result->fetchAll());

$table=new UsersTable(new MySQL());
$id=$table->insert([
    'name'=>"Alice",
    'email'=>'alice@gmail.com',
    'phone'=>'094378787',
    'address'=>'Some Address',
    'password'=>'password',
]);
echo $id;
