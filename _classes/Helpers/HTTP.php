<?php

namespace Helpers;

class HTTP{
    static $root="http://localhost/php";
    static function redirect($path,$q=''){
        $url=static::$root.$path;
        if($q) $url.="?$q";

        header("location:$url");
        exit();
    }
}