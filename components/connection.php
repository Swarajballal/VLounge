<?php
    $db_name = 'mysql:host=sql313.epizy.com;dbname=epiz_34063527_shop_db';
    $db_user = 'epiz_34063527';
    $db_password = 'VVPepfcuBA1';

    $conn = new PDO($db_name, $db_user, $db_password);

//    if($conn){
//       echo "Connected";
//    }
    function unique_id(){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($chars);
        $randomString = '';
        for($i = 0; $i < 20; $i++){
            $randomString .= $chars[mt_rand(0, $charLength - 1)];
        }
        return $randomString;
    }
?>
