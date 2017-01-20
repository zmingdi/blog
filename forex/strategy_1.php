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
        <?php #include "itemList.php" ?>
        <script>
          
           
          $('button').on("click",postStrategy);
        </script> 
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
                   <?php #itemSelection(); ?>
              </tr>
          </table>
        
        <input type="button" value="Post Strategy"></input>
        
        
    </body>
</html>
