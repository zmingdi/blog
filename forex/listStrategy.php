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
        require __DIR__ . '..\dbconn\DBConn.php';
        $conn = new DBConn();
        $mysqli = $conn->getBlogConn();
        $sql='select title from strategies'
        ?>
    </body>
</html>
