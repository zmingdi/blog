<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css/global.css" />
        <?php
          include "dbconn/DBConn.php";
          $conn = new DBConn();
          $mysqli = $conn->getBlogConn();
          $post_id = $_GET["id"];
          $sql = "SELECT * FROM `posts` where post_id = $post_id";
          $result = $mysqli->query($sql);
          while($row = $result->fetch_array()){
            $title=$row['title'];
            $content=$row['content'];
            $post_date=$row['post_date'];
          }
          
        ?>
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
                    <?php echo $title ?>
                </h1>
                <h5><?php echo $post_date ?></h5>
            </div>
            
            <div class="content_body">
                <?php echo $content ?>
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
