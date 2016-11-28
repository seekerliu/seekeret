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
        .header {
            text-align: center;
            background: #f5f5f5;
            height:50px;
            line-height:50px;
            font-size:20px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            margin-bottom: 20px;
        }
        .container { width:70%; margin:0 auto 20px;
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
            border-right:1px dashed #ddd;
        }
        .websites dt {
            width:120px;
            text-align:center;
            height:38px;
            line-height:38px;
            over-flow:hidden;
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
        .success dt {
            color: #00a65a;
        }
        .success a:hover {
            color: #00a65a;
            border-color: #00a65a;
        }
        .warning {
            border-top-color: #f39c12;
        }
        .warning dt {
            color : #f39c12;
        }
        .warning a:hover {
            color: #f39c12;
            border-color: #f39c12;
        }
        .danger {
            border-top-color: #dd4b39;
        }
        .danger dt {
            color: #dd4b39;
        }
        .danger a:hover {
            color:#dd4b39;
            border-color: #dd4b39;
        }
    </style>
</head>
<body>
    <div class="header"><b>SEEKER</b>ET</div>
    <div class="container">
        <div class="box search-box warning">
        </div>
    </div>
    <div class="container">
        <div class="box websites success">
            @foreach($categories as $category)
            <dl>
                <dt>{{$category->name}}</dt>
                <dd>
                    @foreach($category->websites->take(8) as $website)
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
</html>