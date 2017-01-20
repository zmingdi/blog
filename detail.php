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
        <script src="js/jquery-1.10.2.js"></script>
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
        <?php
          include "common/head.html";
          include "common/left.html";
          include "common/footer.html";
        ?>
        <div class="tooltip"></div>
        <article class="content">
            
            <div class="content_title">
                <h1>
                    <?php echo $title ?>
                </h1>
                
                <h5><?php echo $post_date ?></h5>
            </div>
            <script>
              $(".content_title").hover(function(ein){
                $('.content_title').css("color:red");
                var tooltip = $('.tooltip');
                tooltip.css("display","block");
                tooltip.css("position","absolute");
                tooltip.text("hahahahahaah");
                tooltip.css("left", ein.clientX);
                tooltip.css("top",ein.clientY);
              }, function(eout){
                $('.content_title').css("color:none");
                var tooltip = $('.tooltip');
                tooltip.css("display","none");
              });
              </script>
            <div class="content_body">
                <?php echo $content ?>
            </div>
        </article>
        
        
        
    </body>
</html>
