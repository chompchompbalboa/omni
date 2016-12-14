<!DOCTYPE HTML>
<html>
    <head>
        <title>wedesign</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="/assets/wedesign/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        @include('wedesign.header')
        <div id="main">
            @include('wedesign.reel')
        </div>
        @include('wedesign.scripts')
    </body>
</html>