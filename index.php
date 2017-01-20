<html>
  <?php
    $pageName = 'pages/list.php';
    if(isset($_POST['page'])){
      $pageName = $_POST['page'];
    }
  ?>
  <head>
    <meta charset="UTF-8">
    <title>List all posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/global.css" />
  </head>

  <body>
    <?php
      include "common/head.html";
      include "common/left.html";
      
      $post_date = date('Y/m/d');
    ?>
    <div class="tooltip"></div>
    <article class="content">
      <div class="tooltip"></div>
      <div class="content_body">
        <?php include  $pageName; ?>
      </div>
    </article>
    <?php include "common/footer.html"; ?>
  </body>
</html>

