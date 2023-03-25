<?php

if(!isset($_GET['action'])){
    $get = "$_GET[sendcap]".'&'."method=$_GET[method]".'&'."googlekey=$_GET[googlekey]".'&'."json=$_GET[json]".'&'."pageurl=$_GET[pageurl]";
}else{
    $get = "$_GET[sendcap]".'&'."action=$_GET[action]".'&'."id=$_GET[id]".'&'."json=$_GET[json]";
}
  $url = $get;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POST, false);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36',
  ));
  echo $String = curl_exec($ch);
  curl_close($ch);
?>
