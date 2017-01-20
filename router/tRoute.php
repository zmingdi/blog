<?php
  static $map=[];
  
  function initMapping(){
    $map->strategy='/forex/strategy.php';
  }
  
  $pageName='';
  
  
  function getPage(){
    if(isset($_REQUEST['pageName'])){
      $pageName=['pageName'];
      echo $pageName;
    }
  }
  
  


?>
