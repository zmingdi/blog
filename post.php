<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "dbconn/DBConn.php";
        $title=$_POST["title"];
        $content=$_POST["content"];
        echo "id = " . $_POST['post_id'];
        $conn = new DBConn();
        $mysqli=$conn->getBlogConn();
        $post_date = date('Y/m/d');
        $query="UPDATE `posts` SET `title`='$_POST[title]',`content`='$_POST[content]',`post_date`='$post_date' WHERE `post_id`=$_POST[post_id]";
        echo $query;
        #"UPDATE `posts` SET `post_id`=[value-1],`title`=$_POST[title],`content`=$_POST[content],`post_date`=$post_date WHERE post_id=$_POST[post_id]";
        $result=$mysqli->query($query) ;
        if(!$result){
          echo "failed to insert into post table: " . $mysqli->error;
        } else {
          header( 'Location: ./detail.php?id=' . $_POST['post_id'] ) ;
        }
          $mysqli->close();
        ?>
    </body>
</html>
