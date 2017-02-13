<html>
    <head>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script>
          
          
        </script>
        <?php
          //if(isset($_POST['name'])) {
            var_dump($_POST);
            //$items = $_POST['name'];
          //}
         // $direction = $_POST['direction'];
          ?>
        
    </head>
    <body>
    <div>
        <input type="text" class="ii" place_holder="input value here"> </input>
        <input type="button" class="btn" value="try me"></input>
    </div>
    <script>
      $(".btn").on("click", function(event){
      var v = $(".ii").val();
        $.post("test.php",{name:v});
      });
    </script>
    </body>
</html>
 
 