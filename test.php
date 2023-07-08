<?php

include "vendor/autoload.php";

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

use Faker\Factory as Faker;
use Faker\Provider\HtmlLorem;

HTTP::redirect("/index.php","http=test");
