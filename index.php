<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/fist.ico">

    <title>拓维</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .our-img {
            width: 6em;
            display: inline-block;
            margin: 1em;
            border: 2px solid #CCC;
            border-radius: 3em;
        }

        .nav .open > a {
            background-color: transparent;
        }

        .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
            background-color: #333;
            border-color: #333;
        }
    </style>
    <script src="js/jquery-2.1.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
            $("[data-toggle='tooltip']").tooltip();
        })
    </script>
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h2 class="masthead-brand">拓维</h2>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">主页</a></li>
                            <li><a href="#">微信服务号</a></li>
                            <li><a href="#">OA</a></li>
                            <li>
                                <a href="#">技术文档</a>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-haspopup="true" role="button" aria-expanded="false">
                                    技术文档
                                    <span class="caret"></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="http://httpd.apache.org" target="_blank">Apache
                                            2.4</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="http://www.php100.com/manual/apache2/" target="_blank">Apache
                                            2.4-中文</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="http://www.git-scm.com/book/zh/v1"
                                           target="_blank">Git</a>
                                    </li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="http://www.bootcss.com" target="_blank">Bootstrap</a>
                                    </li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="http://www.postgresql.org"
                                           target="_blank">PostgreSQL</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">联系我们</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <img class="our-img" data-toggle="tooltip" data-placement="top" title="SS" src="images/ss.jpg">
                <img class="our-img" data-toggle="tooltip" data-placement="top" title="xwQ" src="images/xwq.jpg">
                <img class="our-img" data-toggle="tooltip" data-placement="top" title="yanAn" src="images/ya.jpg">

                <p class="lead">求知若渴，虚心若愚！</p>

<!--                <p class="lead">-->
<!--                    <a href="#" class="btn btn-lg btn-default">Next</a>-->
<!--                </p>-->
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>&copy版权所有-<a href="http://www.tuowei.me">兰州拓维科技</a></p>
                    <p>|</p>
                    <p>陇ICP备15001806号</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

