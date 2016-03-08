<?php
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>犯二？重命名？</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=1" />
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body {
            /*background: #eee url(bg.jpg) repeat;*/
            background-color: #ffffff;
            padding-bottom: 70px;
        }
        .navbar {
            border-radius: 0;
            min-height: 30px;
        }
        .nav > li > a {
            padding: 5px 15px;
        }
        .navbar-brand {
            margin-right: 20px;
            height: 30px;
            padding: 5px 15px;
        }
    </style>

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <img alt="F2" src="/images/logo-black.png" width="20" />
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php
                $url = $_SERVER["REQUEST_URI"];
                $nav_urls["/yzyr.php"] = "有朝一日";
                $nav_urls["/mcdh.php"] = "面朝大海";
                $nav_urls["/waztd.php"] = "我爱这土地";
                $nav_urls["/qjj.php"] = "将进酒";
                $nav_urls["/cw.php"] = "春望";

                foreach ($nav_urls as $x => $x_value) {
                    if ($url == $x) {
                        echo '<li class="active"><a href="javascript:">'.$x_value.'<span class="sr-only">(current)</span></a></li>';
                    } else {
                        echo '<li><a href="'.$x.'">'.$x_value.'</a></li>';
                    }
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:">呵呵</a></li>
            </ul>
        </div>
    </div>
</nav>
