<html ng-app="ionicApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>精选课程</title>

    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/share.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/index.css')}}" rel="stylesheet"/>
    <script src="{{asset('js/all.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/layer.js')}}"></script>
    <script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>
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
</head>
<body>
<!--精选课程-->

<!--顶部-->
<div class="bar bar-header bar-positive  " >
    <a class="button button-clear icon ion-ios-arrow-left" onclick="history.go(-1);"></a>
    <h1 class="title">课程列表</h1>

</div>
<!--内容-->

<ion-view title="Home" hide-nav-bar="true">
    <ion-scroll  direction="y" scrollbar-y="false" style="width: 100%; height: 100%">

        <div style="width:70px;height:70px;"></div>
        <div class="NewsList">
            <ul class="clearfix classul">
                <?php foreach($data as $key=>$val){?>
                    <li>
                        <div class="bord">
                            <div class="lt">
                                <a href="{{URL('cont')}}?cur_id=<?=$val['cur_id']?>" title=""><img src="http://more.com/<?=$val['cur_img']?>" height="50" width='50' alt=""/></a>
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
        {{--<div id="page">--}}
            {{--{{$data->links()}}--}}
        {{--</div>--}}
        {{--@include('partials.pagination')--}}
        {{--<section class="indexMore bgf6 bb clearfix">--}}
            {{--<div class="pl15 mypage">--}}
                {{--<span class="hover">1</span>--}}
                {{--<a href="javascript:void(0);">2</a>--}}
                {{--<a href="javascript:void(0);">3</a>--}}
                {{--<a href="javascript:void(0);">4</a>--}}
                {{--<a>...</a>--}}
                {{--<a href="javascript:void(0)/wuhan/kc-p_50" >50</a>--}}
                {{--<a  href="javascript:void(0)/wuhan/kc-p_2" class="pl10 pr10">下一页<i class="pl5 fm2"></i></a>--}}
                {{--<a href="javascript:void(0)javascript:void(0)" class="more_r more" id="back-to-top">回到顶部<i></i></a>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<div style="height:50px;width:100%;clear:all"></div>--}}
    </ion-scroll>
</ion-view>

<!-- 底部-->
@include('master')


</body>
</html>

