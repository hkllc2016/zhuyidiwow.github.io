<?php
//连接MySQL用
$con = mysql_connect("mysql.comp.polyu.edu.hk", '13104363d', 'kpqadkqu');
mysql_select_db("13104363d");
date_default_timezone_set("Asia/Hong_Kong");
if (!$con)
    die('could not connect:' . mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Poem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Merriweather|Open+Sans|Montserrat' rel='stylesheet'
          type='text/css'>

    <!-- Bootstrap Main CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/poem.css" rel="stylesheet">

    <!-- Include JQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap main javascript -->
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //$("#poem").load("sources/poems/e" + 3 + ".html");

            $("#en").click(function() {
                $("article").fadeOut(500, function() {
                    <?php

                        $sql = "SELECT COUNT(id)  AS count FROM poem_en";
                        $query = mysql_query($sql);
                        $count = mysql_fetch_assoc($query);
                        $count = $count['count'];

                        $displayed = floor(rand(0, $count)) + 1;
                        $sql = "SELECT * FROM poem_en WHERE id=$displayed";
                        $query = mysql_query($sql);
                        $poem = mysql_fetch_assoc($query);

                        $title = $poem['title'];
                        $author = $poem['author'];
                        $content = 'asdasdas';
                    ?>
                    var title = '<?php echo $title; ?>';
                    $(".title").text(title);
                    $(".author").text('<?php echo $author; ?>');
                    $(".content").text('<?php echo $content; ?>');
/*
                    $(".title").text(title);
                    $(".author").text(author);
                    $(".content").text(content);*/
                }).fadeIn(500);
            });

        });
    </script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">poem
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">POEM</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="en" href="#">RANDOM ENGLISH</a></li>
                <li><a id="ch" href="#">RANDOM CHINESE</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- POEM -->
<div id="poem">
    <article class="container-fluid bg-1 text-center english">
        <h3 class="margin30 title">WTF</h3>

        <h4 class="margin30 author">Author: Charlotte Smith</h4>

        <div class="content">

        </div>
    </article>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center english">
    <p>Copyright belongs to the authors</p>

    <p>@Yidi, ZHU 2016</p>
</footer>

</body>
</html>
