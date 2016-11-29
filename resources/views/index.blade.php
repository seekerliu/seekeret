<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="{{$settings['keywords']}}"/>
    <meta name="description" content="{{$settings['description']}}"/>
    <title>{{$settings['title']}}</title>
    <style>
        * { margin: 0; padding:0; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
        body { background: #f5f8fa; }
        a { text-decoration: none; }
        h3 {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 500;
        }
        ul, li {
            list-style: none;
        }
        .header {
            text-align: center;
            background: #f5f5f5;
            height:50px;
            line-height:50px;
            font-size:20px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            margin-bottom: 20px;
        }
        .header a {
            color:#333;
        }
        .container { width:880px; margin:0 auto 20px;
            padding:10px 15px;
        }
        .footer {
            text-align:center;
            color:#333;
        }
        .websites dl {
            overflow:hidden;
            border-bottom:1px dashed #ddd;
        }
        .websites dd, .websites dt {
            float: left;
        }
        .websites dt {
            width:120px;
            text-align:center;
            height:38px;
            line-height:38px;
            overflow:hidden;
        }
        .websites dd {
            width:759px;
            border-left:1px dashed #ddd;
        }
        .websites a {
            height:18px;
            line-height:18px;
            display:inline-block;
            padding:10px 15px;
        }
        .websites a:hover {
            height:17px;
            padding:9px 15px 8px;
            background:#eee;
            border-bottom:3px solid #d2d6de;
        }
        .box {
            background: #fff;
            border-radius: 3px;
            border-top: 3px solid #d2d6de;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .box a {
            color: #333;
        }

        .success {
            border-top-color: #00a65a;
        }
        .success dt,  .success .box-title {
            color: #00a65a;
        }
        .success a:hover {
            color: #00a65a;
            border-color: #00a65a;
        }
        .warning {
            border-top-color: #f39c12;
        }
        .warning dt, .warning .box-title {
            color : #f39c12;
        }
        .warning a:hover {
            color: #f39c12;
            border-color: #f39c12;
        }
        .danger {
            border-top-color: #dd4b39;
        }
        .danger dt, .danger .box-title {
            color: #dd4b39;
        }
        .danger a:hover {
            color:#dd4b39;
            border-color: #dd4b39;
        }
        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative
        }
        .box-title {
            display: inline-block;
            font-size: 18px;
            margin: 0;
            line-height: 1;
        }
        .box-header.with-border {
            border-bottom: 1px solid #f4f4f4;
        }
        .recommend {
            overflow:hidden;
        }
        .recommend li {
            display: inline-block;
            float:left;
        }
    </style>
</head>
<body>
    <div class="header"><a href="/"><b>SEEKER</b>ET</a></div>

    @if(!empty($recommend))
    <div class="container">
        <div class="box websites warning">
            <div class="box-header with-border">
                <h3 class="box-title">{{$recommend->name}}</h3>
            </div>
            <ul class="recommend">
                @foreach($recommend->websites->sortBy('order') as $website)
                <li><a href="{{$website->link}}" target="_blank">{{$website->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="box websites success">
            @foreach($categories as $category)
            <dl>
                <dt>{{$category->name}}</dt>
                <dd>
                    @foreach($category->websites->sortBy('order') as $website)
                        <a href="{{$website->link}}" target="_blank">{{$website->name}}</a>
                    @endforeach
                </dd>
            </dl>
            @endforeach
        </div>
    </div>
    <div class="container footer">
        &copy;2016 seekeret.com
    </div>
</body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86278584-3', 'auto');
    ga('send', 'pageview');

</script>
</html>