<html ng-app="ionicApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>精选课程</title>

    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/share.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/index.css')}}" rel="stylesheet"/>
    <link href="{{asset('style/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('style/css/commons.css')}}" rel="stylesheet" type="text/css" />
    {{--    <script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>--}}
    <script src="{{asset('js/jquery-1.8.0.min.js')}}"></script>
    <script type="text/javascript">
        angular.module('ionicApp', ['ionic'])
                .controller('SlideController', function($scope) {
                    $scope.myActiveSlide = 0;
                });
    </script>
    <style type="text/css">
        .lei {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .classify_list {
            display: block;
            float: left;
            width: 24.7%;
            text-align: center;
            cursor: pointer;
            height: 40px;

        }

        .classify_list span {
            display: inline-block;
            width: 100%;
            height: 40px;
            line-height: 40px;
        }

        .classify_list .firstspan {
            border-right: 1px solid #c0c0c0;
            border-left: 1px solid #c0c0c0;
        }
        .list_ul {
            position: relative;
            left: 0;
            text-align: left;
            z-index: 10;
            background-color: #f2f2f2;
            display: none;
        }
        .list_ul li ,.list_ul li span{
            height: 35px;
            line-height:35px;
            padding-left: 5px;
            border-bottom: 0.05rem solid #dadada;
        }

        .sta {
            background: #fff;
        }

        .lastUL {
            width: 300%;
            padding: 0 0.5rem;
            background-color: #fff;
            position: absolute;
            top: 0;
            left: 100%;
            display: none;
        }

        .classify_list:nth-child(2) .list_ul li span {
            border-right: none;
            border-left: none;
        }

        .classify_list:nth-child(3) .list_ul li span {
            border-right: none;
            border-left: none;
        }

        .list_ul li a {
            display: inline-block;
            width: 100%;
            text-align: left;
        }

        .showlist {
            display: block;
        }
        #page ul li {
            float: left;}

    </style>
    <style>
        .type ul li{float: left;list-style: none;margin-left: 20px;}
        .type ul{border: 1px solid #000; height: 30px; line-height: 30px; background:#2894FF;color:#fff;}
        a{ text-decoration:none}
    </style>
</head>
<body>
<!--精选课程-->

<!--顶部-->
<div class="bar bar-header bar-positive  " >
    <a class="button button-clear icon ion-ios-arrow-left" onclick="history.go(-1);"></a>
    <h1 class="title">全部课程</h1>
</div>
<!--内容-->


<ion-view title="Home" hide-nav-bar="true">
    <ion-scroll  direction="y" scrollbar-y="false" style="width: 100%; height: 100%">
        <div class="type" style="margin-top: 43px;">
            <ul>
                <li class="allType" id="diantype">全部分类💗</li>
                <a href="{{URL('market')}}?sh=1"><li>最新💗</li></a>
                <a href="{{URL('market')}}?sh=2"><li>最热💗</li></a>
            </ul>
        </div>
        <div  style="display:none;" id="typeList">
            <div class="aaaa">
                <div class="F_wd_top_con2" >
                    <div class="F_wd_top_con2_l" id="wrapper" style="background:#2894FF; color:#fff;">
                        <div >
                            <ul class="sy" >
                                <?php foreach($types as $key=>$val){?>
                                <li class="dianji"><?php echo $val['type_name']?></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="F_wd_top_con2_r" id="wrapper1" style="" >
                        <div class="content">
                            <?php foreach($types as $keys=>$vals){ ?>
                            <ul class="by" style="display: none">
                                <?php foreach($vals['pp'] as $key=>$val){?>
                                <li class="F_wd_top_con2_r_borb1 F_wd_top_con2_r_borb2" style="clear: both;border-top: 1px slateblue solid;border-bottom: none"><?=$val['type_name']?>
                                    <ul>
                                        <?php foreach($val['pp'] as $k=>$v){?>
                                        <li style="float: left" ><a href="{{URL('/curr')}}?id=<?=$v['type_id']?>"><?=$v['type_name']?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <?php }?>
                            </ul>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--<div style="width:70px;height:70px;"></div>--}}
        <div class="NewsList">
            <ul class="clearfix classul">
                <?php foreach($data as $key=>$val){?>
                <li>
                    <div class="bord">
                        <div class="lt">
                            <a href="{{URL('cont')}}?cur_id=<?=$val['cur_id']?>" title=""><img src="http://admin.duzejun.cn/<?=$val['cur_img']?>" height="50" width='50' alt=""/></a>
                        </div>
                        <div class="rt">
                            <a href="{{URL('cont')}}?cur_id=<?=$val['cur_id']?>" title="">
                                <div class="rt1">
                                    <h3><?=$val['cur_name']?></h3>
                                    <p></p>
                                    <a href="javascript:void(0);"><p>讲师：<?=$val['teacher_name']?></p></a>
                                </div>
                            </a>
                            <div class="rt2">
                                <p class="orange">
                                    <i class="f15 mr5">&yen;</i>
                                    <i class="f20">
                                        <?php
                                        if($val['cur_price']==0)
                                        {
                                            echo "<span style='color:green;'>免费</span>";
                                        }else
                                        {
                                            echo $val['cur_price'];
                                        }
                                        ?>
                                    </i>
                                    <br/>
                                    <a style="font-size: 25px;" alt="收藏" href="{{URL('collection')}}?cur_id=<?=$val['cur_id']?>">❤</a>
                                    <?php ?>

                                    <?php ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <?php }?>

            </ul>
        </div>
        <div style="text-align: center; margin-bottom: 45px;">
            <a href="{{URL('curr')}}" class="more_r more" id="back-to-top">☟查看更多<i></i></a>
        </div>
    </ion-scroll>
</ion-view>
<script src="{{asset('style/js/common.js')}}" type="text/javascript"></script>
</body>
<!-- 底部-->
@include('master')
<script>
    $(function(){
        $(document).on("click","#diantype",function(){
            if( $("#typeList").css("display") == 'none')
            {
                //$("#typeList").show();
                $("#typeList").show();
            }else
            {
                $("#typeList").hide();
            }
        })
        $(".dianji").on("click",function(){
            $(this).css("background","#fff").siblings().css("background","#2894FF");
            $(this).css("color","#2894FF").siblings().css("color","#fff");
        })
    })
</script>
</html>

