<html>
<head>
    <title>@yield('title')</title>
    <!--<link rel="stylesheet" type="text/css" href="/css/app.css">-->
    <style>
    body {font-size: 16pt; color: #999; margin: 5px;}
    h1 {font-size: 50pt; text-align: right; color: #f6f6f6;margin: -20px 0px -30px 0px; letter-spacing: -4pt;}
    ul {font-size: 12pt;}
    hr {margin: 25px 100px; border-top: 1px dashed #ddd;}
    th {background-color: #999; color: #fff; padding: 5px 10px;}
    td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
    .page__header {text-align: left}
    .page__header__buttom {padding: 5px; letter-spacing: 1px;}
    .page__header__buttom:hover { text-decoration: none;}
    .content {margin: 10px;}
    .footer {text-align: right; font-size: 10pt; margin: 10px; border-bottom: solid 1px #ccc; color: #ccc;}
    </style>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
</head>
<body>
    <div id="head" style="background: url(images/bg_head.png) bottom left repeat-x #106eb7;">
        <h1 class="page__header" style="font-weight: bolder; letter-spacing: 0px;">BBS 掲示板
            <p class="btn btn-light" style="float: right"><a class="page__header__buttom" href="/user">ユーザー登録</a></p>
        </h1>
    </div>
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>
