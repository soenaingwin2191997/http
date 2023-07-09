<?php

    include('../vendor/autoload.php');
    session_start();

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;
    use Helpers\HTTP;

    $auth=Auth::check();

    if($_FILES['photo']){

        $name=$_FILES['photo']['name'];
        $tmp=$_FILES['photo']['tmp_name'];
        $type=$_FILES['photo']['type'];

        if($type=='image/jpg' or $type=='image/jpeg' or $type=='image/png'){

            move_uploaded_file($tmp,"photos/$name");

            $table=new UsersTable(new MySQL());
            $table->updatePhoto($auth->id,$name);

            $auth->photo=$name;

            HTTP::redirect('/profile.php');
            
        }else{
            HTTP::redirect('/profile.php','error=type');
        }
    }
    

