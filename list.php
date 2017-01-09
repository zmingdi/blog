<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>List all posts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css/global.css" />
    </head>
    <body>
        <header class="header">
            <table> 
                <tr>
                    <td>Home</td>
                    <td>Information</td>
                    <td>Forex Study</td>
                    <td>Experience</td>
                    <td>About me</td>
                </tr>
            </table>
         </header>
        <div id="left">
            <div id="price_box">
                <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a>
            </div>
            <ul>
                <li>Information</li>  
                <li>Information</li>  
                <li>Information</li>  
                <li>Information</li>  
                <li>Information</li>  
            </ul>
        </div>
        <article class="content">
            
            <div class="content_title">
                <h1>
                    Post list
                </h1>
            </div>
            
            <div class="content_body">
                <ul>
                <?php
                  include "dbconn/DBConn.php";
                  $dbconn = new DBConn();
                  $mysqli = $dbconn->getBlogConn();
                  $sql = $sql = "SELECT post_id, title, post_date FROM `posts`";
                  $result=$mysqli->query($sql);
                  while($row=$result->fetch_array()){
                    echo "<li>";
                    echo "<a href='detail.php?id=" . $row["post_id"] . "'>" . $row['title'] . "</a>";
                    echo "</li>";
                  }
                  
                ?>  
                </ul>
                
            </div>
        </article>
        
        <footer>
            <ul>
                <li>footer</li> 
                <li>footer</li> 
                <li>footer</li> 
                <li>footer</li> 
                <li>footer</li> 
            </ul>
        </footer>
    </body>
</html>
