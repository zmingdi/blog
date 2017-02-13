<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<ul>
        <?php
          include "dbconn/DBConn.php";
          $dbconn = new DBConn();
          $mysqli = $dbconn->getBlogConn();
          $sql = $sql = "SELECT post_id, title, post_date FROM `posts` where title != '' order by post_date desc";
          $result=$mysqli->query($sql);
          while($row=$result->fetch_array()){
            echo "<li>";
            echo "<a href='detail.php?id=" . $row["post_id"] . "'>" . $row['title'] . "</a>";
            echo "</li>";
          }
        ?>  
</ul>

