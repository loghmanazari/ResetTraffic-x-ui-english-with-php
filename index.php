<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("error_log", __DIR__.'/error_log');
$input=(isset($_GET))?$_GET:$_POET;
if(isset($input['action'])){
    $action=$input['action'];
    if($action=='resetTraffic' and isset($input['email'])){
        $email=$input['email'];
        $db = new SQLite3('/etc/x-ui/x-ui.db');
        $tablesquery = $db->query("SELECT * from client_traffics where email='$email';");
        
        $rows=$tablesquery->fetchArray();
        if(isset($rows['email'])){
            
            $tablesquery = $db->exec("update client_traffics set up=0,down=0 where email='$email'");
            if($tablesquery==true){
                $return =['ok'=>true];
            }else{
                $return =['ok'=>false];
            }
            echo json_encode($return);
        }

    }
}
