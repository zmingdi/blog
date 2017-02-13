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
        <script src="js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
          selector: "textarea",
          toolbar: "bold italic strikethrough link unlink numlist bullist blockquote upload image fullscreen",
          width: 768,
          height: 550,
          upload_action: 'upload.php',//required
          upload_file_name: 'userfile',//required
          plugins: [
              "advlist autolink lists link image charmap print preview anchor",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste upload"
          ]
        });
        </script>
        <?php
          include "dbconn/DBConn.php";
          $conn = new DBConn();
          $mysqli = $conn->getBlogConn();
          $first_sql="INSERT INTO `posts` () values ()";
          $mysqli->query($first_sql);
          $post_id=mysqli_insert_id($mysqli);
        ?>
    </head>
    <body>
       <?php
          include __DIR__ . '/common/head.html';
          include __DIR__ . '/common/left.html';
          
        ?>
        <article class="content">
            <form method="POST" action="post.php">
              <input type="hidden" name="post_id" value="<?php echo $post_id ?>" />
              <div class="content_title">
                  <input type="text" name ="title" placeholder="Input your blog title" />    
              </div>
              <div class="content_body">
                  <textarea name="content" placeholder="Input your blog content"></textarea>
                  <input type="submit" value="save" /> 
              </div>
              
            </form>
        </article>
        <?php include __DIR__ . '/common/footer.html'; ?>
    </body>
</html>
