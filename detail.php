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
        <script src="js/jquery-1.11.1.min.js"></script>
        
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
        <script>
          function deletePost(post_id){
            
            $.ajax({url: "pages/deletePost.php", data:{'post_id':post_id},  method: 'POST', cache:false
              , processData:true
              , dataType:'json'
              , statusCode: {
                  400: function() {
                    alert( "page not found" );
                  }
                  , 200 : function(){
                    alert("Post deleted. id = " + post_id);
                    window.location = "/html5-astral/";
                  }
                }
              });
          }
        </script>
    </head>
    <body>
        <?php
          include "common/head.html";
          include "common/left.html";
          
        ?>
        <div class="tooltip"></div>
        <article class="content">
            
            <div class="content_title">
                <h1><?php echo $title ?></h1>
                <span><?php echo $post_date ?></span><span>Edit</span><span><a href="#"  onclick="deletePost(<?php echo $post_id ?>)">Delete</a></span>
                
            </div>
            <!--script>
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
              </script--!>
            <div class="content_body">
                <?php echo $content ?>
            </div>
        </article>
        
        
        <?php include "common/footer.html"; ?>
    </body>
</html>
