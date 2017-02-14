<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  if(isset($_POST['post_id'])) {
    $post_id = $_POST['post_id'];
  } else {
    http_response_code(400);
    echo "Error. No post id.";
    return ;
  }
  require "../dbconn/DBConn.php";
  $conn = new DBConn();
  $mysqli = $conn->getBlogConn();
  $sql = "delete from posts where post_id = $post_id";
  $result = $mysqli->query($sql);
  $result = $mysqli->affected_rows;
  if($result>0){
    http_response_code(200);
    echo "Success.";
  } else {
    http_response_code(400);
    echo "Error.";
  }


?>