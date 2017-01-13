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
        <?php include "itemList.php" ?>
        <script src="../js/jquery-1.9.1.min.js"></script>
    </head>
    <body>
        <table class="items">
            <tr>
                <th>Item</th>
                <th>Direction</th>
                <th>Entry</th>
                <th>Stop loss</th>
                <th>Target profit 1</th>
                <th>Target profit 2</th>
                <th>Term</th>
                 <?php itemSelection(); ?>
            </tr>
        </table>
        <input type="button" value="Post Strategy" onclick="postStrategy()"></input>
        <script>
          function postStrategy(){
            var item = {'item':'', 'date':new Date().toLocaleDateString(), 'direction':0, entry:0.0, 'sl':0.0, tp1:0.0, tp2:0.0, term:0};
            var names = $('.item_name');
            var directions = $('.direction');
            var entries = $('.entry');
            var sls = $('.sl');
            var tp1 = $('.tp1');
            var tp2 = $('.tp2');
            var terms = $('.term');
            var data =[];
            for(var i = 0 ; i< names.length;i++) {
              
              item['item'] = $(names[i]).text();
              item['direction'] = $(directions[i]).val();
              item['entry'] = $(entries[i]).val();
              item['sl'] = $(sls[i]).val();
              item['tp1'] = $(tp1[i]).val();
              item['tp2'] = $(tp2[i]).val();
              item['term'] = $(terms[i]).val();
              data.push(JSON.stringify(item));
            }
            console.log(data);
            $.post("createStrategy.php", {'data':data});
            
          } 
          
        </script> 
    </body>
</html>
