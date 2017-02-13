<html>

    <head>
        <meta charset="UTF-8">
        <title>List all posts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="/html5-astral/css/global.css"></link>
        <script src="/html5-astral/js/forex.js"></script>
        <script src="/html5-astral/js/jquery-1.11.1.min.js"></script>
    </head>

    <body>
        <?php
        include "../common/head.html";
        include "../common/left.html";
        require "itemList.php";
        $post_date = date('Y/m/d');
        ?>
        <div class="tooltip"></div>
        <article class="content">
            <div class="tooltip"></div>
            <div class="content_body">
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

                <input type="button" value="Post Strategy" class='poststrategy'></input>
            </div>
            <script>
              $('.poststrategy').on('click', postStrategy);
            </script>
        </article>
        <?php include "../common/footer.html"; ?>
    </body>
</html>

