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
        input,button,select,textarea{outline:none}
        .header {
            text-align: center;
            /*background: #f5f5f5;*/
            padding-top:10px;
            height:80px;
            line-height:80px;
            font-size:36px;
            /*box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);*/
            /*margin-bottom: 30px;*/
        }
        .header a {
            color:#333;
        }
        .container { width:880px; margin:0 auto 10px;
            padding:10px 15px;
        }
        .footer {
            text-align:center;
            color:#333;
        }
        .fixed {
            position:fixed;
            width:100%;
            padding:0;
            top:0;
            /*background:#fff;*/
            z-index:9;
        }
        .fixed .search-body {
            margin:0 auto;
            width:830px;
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
            padding:10px;
        }
        .recommend li {
            display: inline-block;
            float:left;
            height:38px;
        }
        .search-body {
            overflow:hidden;
            padding:10px 25px;
        }
        .search-logo, .search-text, .search-button {
            float:left;
            height:38px;
        }
        .search-logo {
            padding-top:4px;
            height:34px;
            margin-right:15px;
        }
        .search-logo img {
            width:100px;
            height:auto;
        }
        .search-text {
            width:600px;
            padding:6px;
            border: 1px solid #d2d6de;
            position:relative;
            height:24px;
        }
        .search-text input {
            width:600px;
            position:absolute;
            z-index:6;
            left:6px;
            top:6px;
            height:26px;
            line-height:26px;
            padding:0;
            margin:0;
            font-size:14px;
            border:0 none;
        }
        .search-button input {
            width: 100px;
            height: 38px;
            color: #fff;
            letter-spacing: 1px;
            background: #3385ff;
            border:0 none;
            -webkit-appearance: none;
            -webkit-border-radius: 0;
            font-size:16px;
            cursor:pointer;
        }
        .search-button input:hover {
            background:#317ef3;
            box-shadow:1px 1px 1px #ccc;
        }
    </style>
</head>
<body>
    <div class="header"><a href="/"><b>SEEKER</b>ET</a></div>

    <div id="search" class="container">
        <div class="box search-box">
            <div class="search-body">
                <form method="get" action="http://www.google.com/search" target="_blank">
                    <div class="search-logo">
                        <img alt="Google" src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" />
                    </div>
                    <div class="search-text">
                        <input type="text" name="q">
                    </div>
                    <div class="search-button">
                        <input type="submit" name="btnK" value="Search">
                    </div>
                    {{--<input type=hidden name=ie value=GB2312>--}}
                    {{--<input type=hidden name=oe value=GB2312>--}}
                    <input type="hidden" name="hl" value="en">
                </form>
            </div>
        </div>
    </div>
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
<script type="text/javascript">
//    window.onload = function(){
        menuFixed('search');
//    }

    function menuFixed(id){
        var obj = document.getElementById(id);
        var _getHeight = obj.offsetTop;

        window.onscroll = function(){
            changePos(id,_getHeight);
        }
    }
    function changePos(id,height){
        var obj = document.getElementById(id);
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if(scrollTop < height){
            removeClass(obj, "fixed");
        }else{
            addClass(obj, "fixed");
        }
    }

    function hasClass(obj, cls) {
        return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
    }

    function addClass(obj, cls) {
        if (!this.hasClass(obj, cls)) obj.className += " " + cls;
    }

    function removeClass(obj, cls) {
        if (hasClass(obj, cls)) {
            var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
            obj.className = obj.className.replace(reg, ' ');
            obj.className = obj.className.replace(' ', '');
        }
    }

    function toggleClass(obj,cls){
        if(hasClass(obj,cls)){
            removeClass(obj, cls);
        }else{
            addClass(obj, cls);
        }
    }

    function toggleClassTest(){
        var obj = document. getElementById('test');
        toggleClass(obj,"testClass");
    }
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-86278584-3', 'auto');
    ga('send', 'pageview');

</script>
</html>