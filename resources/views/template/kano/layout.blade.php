<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="content-type" content="text/html;charset=gbk" />
    <title>{{config('webset.webname')}}-{{config('webset.websubname')}}-@yield('title')</title>
    <meta name="description" content="{{config('webset.webname')}}-{{config('webset.websubname')}}-@yield('title')-{{config('webset.wedesc')?config('webset.wedesc'):'全网vip免费看'}}" />
    <meta name="keywords" content="{{config('webset.webkeywords')?config('webset.webkeywords'):'全网vip免费看'}}" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=yes" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate, max-age=0">
    <script type="text/javascript">var InstallDir="/";</script>
    <script type="text/javascript" src="/public/static/kano/js/jquery1.7.2.min.js"></script>
    <script type="text/javascript" src="/public/static/kano/js/swiper.min.js"></script>
    <script type="text/javascript" src="/public/static/kano/js/wap.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/static/kano/css/iconfont.css">
    <style>
        body{
            -webkit-transform:translateZ(0);
        }
    </style>
    <link rel="stylesheet" href="/public/static/kano/css/in2.css"/>
    <link href="/public/static/kano/css/swiper.css" type="text/css" rel="stylesheet">
    @section('other')
    @show
</head>

<body class="page_list">

<header class="site_header">
    <h1 class="site_title"><a href="/" class="logo"></a>
        <a><strong class="channel_title"></strong></a></h1>
    <div class="search js_nav_search" style="width: auto;"><div class="input_con">
            <div id="search">
                <input class="sput" data-defval="" name="k" id="k" placeholder="片名或主演" type="search">
                <input type="submit" value="so" class="sook ">
            </div>
        </div>
    </div>
</header>
<!--导航-->
<nav class="site_nav">
    <div class="site_nav_inner" id="site_nav_inner_id">
        <div class="nav_row">
            @if($navlist)
                @foreach($navlist as $v)
                    <a href="{{$v['navaddr']}}" class="">{{$v['navname']}}</a>
                @endforeach
            @else
            @endif
            {!! config('appconfig.isdh')?'<a href="/app.html" target="_blank">'.config('appconfig.appdh').'</a>':'' !!}
            <span class="justify_fix"></span>
        </div>

    </div>
</nav>
<div class="tabbar">
    <a href="/" class="item">
        <i class="iconfont icon-shouye icon"></i>
        <p class="text">首页</p>
    </a>
    <a href="/movielist/all/1.html" class="item ">
        <i class="iconfont icon-dianying1 icon"></i>
        <p class="text">电影</p>
    </a><a href="/tvlist/all/1.html" class="item ">
        <i class="iconfont icon-diannao icon"></i>
        <p class="text">电视剧</p>
    </a><a href="/dmlist/all/1.html" class="item ">
        <i class="iconfont icon-erji icon"></i>
        <p class="text">动漫</p>
    </a><a href="/zylist/all/1.html" class="item ">
        <i class="iconfont icon-huatong icon"></i>
        <p class="text">综艺</p>
    </a>
</div>
@section('content')
@show
<footer class="mod_footer" >
    <div class="mod_footer_inner">
        <p style="padding: 0 4px;text-align:center" class="copyright">
            本站提供的最新电影和电视剧资源均系收集于各大视频网站,本站只提供web页面服务,并不提供影片资源存储,也不参与录制、上传<br/>
            若本站收录的节目无意侵犯了贵司版权，请给网页底部邮箱地址来信,我们会及时处理和回复,谢谢。<br/>
            管理员邮箱：{{config('webset.webmail')}} <br/>
        <div style="display:inline-block; text-align: center">{!! config('webset.webtongji') !!}</div>
        <div class="copyright">Copyright &copy; 2008 - 2017  {{config('webset.webicp')}}-{{config('webset.copyright')}} All Rights Reserved</div>
    </div>
</footer>
<div style="height: 68px"></div>
<script>
    //swiper banner start
    var mySwiper = new Swiper('.swiper-container',{
        pagination: '.pagination',
        loop:true,//循环模式  是/否
        grabCursor: true,//光标属性   当为true时，光标移动到banner上变成手掌的样式
        paginationClickable: false,//生成分页控件
        calculateHeight:true,//响应式容器高度
        autoplay:3000//过度时间
    })


    $('.arrow-left').on('click', function(e){
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.arrow-right').on('click', function(e){
        e.preventDefault()
        mySwiper.swipeNext()
    })

</script>
<script>
    $(function () {
        $('.sook').click(function () {
            var key = $('#k').val();
            if (key != '' && key != null) {
                window.location = '/search/' + key + '.html'
            }
        });

        $('input').keyup(function () {
            if (event.keyCode == 13) {
                $(".sook").trigger("click");
            }
        })
    })
</script>
</body>
</html>