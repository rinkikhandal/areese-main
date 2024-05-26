<?php

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
  'lifetime'=>1800, //30min in sec
  'domain'=>'localhost',
  'path'=>'/',
  'secure'=>true,
  'httponly'=>true
]);

session_start();


// regenerating the session after every 30 minutes
if(isset($_SESSION["user_id"])){
  if(!isset($_SESSION["last_regeneration"])){
    regenerate_session_id_loggedin();
  }else{
  $interval = 60*30 ;
  if(time()-$_SESSION["last_regeneration"]>=$interval){
  regenerate_session_id_loggedin();
  }
  }

}else{

  if(!isset($_SESSION["last_regeneration"])){
    regenerate_session_id();
  }else{
  $interval = 60*30 ;
  if(time()-$_SESSION["last_regeneration"]>=$interval){
  regenerate_session_id();
  }
  }
}


// if logged in then append the user id to session id=========
function regenerate_session_id_loggedin(){
  session_regenerate_id(true);

  $newSessionId = session_create_id();
  $userId = $_SESSION["user_id"];

    $sessionId = $newSessionId . "_" . $userId;

    session_id($sessionId);

  $_SESSION["last_regeneration"]=time();
}

// normal session regeneration======
function regenerate_session_id(){
  session_regenerate_id(true);
  $_SESSION["last_regeneration"]=time();
}