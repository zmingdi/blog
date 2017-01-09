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
          include "head.html";
          include "left.html";
          include "footer.html";
        ?>
        
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
        
        
        <script> 
                //$( "#price_box" ).css( "border", "3px solid red" );
                //var url = "js/test.js";
                
                var priceList = {};
                var list = "fx_seurusd,fx_sgbpusd,fx_susdjpy,fx_saudusd,fx_susdchf,fx_susdcad,fx_snzdusd,fx_susdhkd,fx_susdrub,fx_susdkrw,fx_susdthb,fx_susdsgd";
                var currs = list.split(',');
                currs.forEach(function(e){
                    priceList["hq_str_"+e] = "";
                });
                var cl = 'red';
                getPrice();
                setInterval("getPrice()", 3000);  
                function getPrice(){
                   $.ajaxSetup({ cache: true ,processData: false});
                    var timestamp = new Date();
                    
                    var url = "http://hq.sinajs.cn/rn="+timestamp.getTime()
                              +"?list="+list;
                    var arrow = "";
                    $.get(url, function(){                    
                        
                        var values ='';
                        currs.forEach(function(e){
                            var item = eval("hq_str_"+ e);
                            item = item.split(',');
                            if(currs["hq_str_"+ e]>item[1]) {
                                cl="green";
                                arrow = "arrow_down";
                            } else if(currs["hq_str_"+ e]==item[1]) {
                                cl="black";
                                arrow = "arrow_none";
                            } else {
                                arrow = "arrow_up";
                                cl='red';
                            }
                            currs["hq_str_"+ e] = item[1];
                            
                            values += ('<li style="color:[cl]">'.replace("[cl]",cl) + "<span class='[arrow]'></span>".replace('[arrow]', arrow) +item[9].replace('即期汇率','')+ ':' + item[1] + '</li>');
                        })

                        $( "#price_box ul" ).html(values);
                        $( "#price_box #refresh_time").html("refresh time: <br />" + timestamp.toLocaleString());

                        //$( "#price_box" ).css( "border", "3px solid red" );
                    },'script'); 
                }
                
              </script>
    </body>
</html>
