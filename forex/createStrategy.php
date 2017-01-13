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
        include "../dbconn/DBConn.php";
        $items = $_POST["data"];
        header("localtion: createStrategy.php");
        $conn = new DBConn();
        $mysqli = $conn->getBlogConn();
        $date = date('Y/m/d');
        forEach($items as $item ){
          $item = json_decode($item);
          if(!$item->entry) {
            continue;
          }
          //echo 'item = ' . $item;
          //INSERT INTO `forex_strategy`(`id`, `date`, `item`, `direction`, `entry`, `sl`, `tp1`, `tp2`, `term`, `result`, `entry_time`, `unload_time`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])
          $sql="insert into `forex_strategy` (`date`, `item`, `direction`, `entry`, `sl`, `tp1`, `tp2`, `term`) "
                  . "values ('$item->item', '$date','$item->direction','$item->entry','$item->sl','$item->tp1','$item->tp2','$item->term')";
          echo $sql;
          $mysqli->query($sql);
        }
        ?>
    </body>
</html>
