<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConn
 *
 * @author zhamingd
 */
class DBConn {
  
  function getBlogConn(){
    $mysqli = new mysqli("localhost", "root", "", "blog");
    if($mysqli->connect_errno){
        echo "failed to connect to mysql:" . $mysqli->connect_errno ;
        return null;
    } else {
      return $mysqli;
    }
  }
}
