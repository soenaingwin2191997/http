<?php

    if($_FILES['photo']){

        $tmp=$_FILES['photo']['tmp_name'];
        $type=$_FILES['photo']['type'];

        if($type=='image/jpg' or $type=='image/jpeg' or $type=='image/png'){
            move_uploaded_file($tmp,"../photos/profile.jpg");
            header("location:../profile.php");
        }else{
            header("location: ../profile.php?error=error");
        }
    }
    
