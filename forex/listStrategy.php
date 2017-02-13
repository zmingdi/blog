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
        
        <?php
          require __DIR__ . '\..\dbconn\DBConn.php';
          require_once __DIR__ . '\Constants.php';
          $date = date_create(date('Ymd'));

          if(isset($_REQUEST['date'])){
            $date= date_create($_REQUEST['date']);
          }
          $date = date_format($date, 'Y/m/d');
          
          $conn = new DBConn();
          $mysqli = $conn->getBlogConn();

          $sql="select * from forex_strategy where date='$date'";
          $result=$mysqli->query($sql);
          
        ?>
    </head>
    <body>
        <?php
          include __DIR__ . '\..\common/head.html';
          include __DIR__ . '\..\common/left.html';
        ?>
        <article class="content">
            
            <div class="content_title">
                <h1>
                    <?php echo "Strategy for " . $date ?>
                </h1>
            </div>
            
            <div class="content_body">
                <?php 
                if($result->num_rows==0){
                  echo "No strategy for $date";
                } else {
                  while($item=$result->fetch_array()){
                    echo $date;
                    echo ' ' . array_search($item['item'],Constants::ITEMS);
                    echo ' ' . $item['direction'];
                    echo ' ' . $item['entry'];
                    echo ' ' . $item['sl'];
                    echo ' ' . $item['tp1'];
                    echo ' ' . $item['tp2']; 
                    echo ' ' . $item['term'];
                    echo "<br />";
                  }
                  
                }
                echo "<br />";
                ?>
            </div>
        </article>
        <?php include __DIR__ . '/../common/footer.html'; ?>
    </body>
</html>
        
