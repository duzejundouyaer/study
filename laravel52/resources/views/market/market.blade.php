<html ng-app="ionicApp">
  <head>
        <meta charset="UTF-8">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
      {{--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.5" charset="utf-8"/>--}}
      <title>详情页</title>
    <link href="{{asset('style/css/ionic.min.css')}}" rel="stylesheet">
      <link href="{{asset('style/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('style/css/commons.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    angular.module('ionicApp', ['ionic'])
    .controller('SlideController', function($scope) {
      $scope.myActiveSlide = 0;
    })
    </script>
  </head>
<body style="height: 5000px;">
<!--顶部-->
    {{--<div class="bar bar-header bar-positive  ">--}}
		    {{--<h1 class="title">全部课程</h1>--}}
		    {{--<a class="button button-clear icon ion-android-cart" onclick="history.go(-1);"></a>--}}
	{{--</div>--}}

<div class="top_tit">
    <span class="top_tit_left"></span>
    <span class="top_tit_center">全部课程</span>
</div>
<!--内容-->


<div class="Z_con2_2">
    <div class="F_wd_top_con2">
        <div class="F_wd_top_con2_l" id="wrapper">
            <div>
                <ul class="sy">
                    <?php foreach($types as $key=>$val){?>
                        <li><?php echo $val['type_name']?></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="F_wd_top_con2_r" id="wrapper1">
                <div class="content">
                    <?php foreach($types as $keys=>$vals){ ?>
                    <ul class="by" style="display: none">
                        <?php foreach($vals['pp'] as $key=>$val){?>
                            <li class="F_wd_top_con2_r_borb1 F_wd_top_con2_r_borb2" style="clear: both;border-top: 1px slateblue solid;border-bottom: none"><?=$val['type_name']?>
                                <ul>
                                    <?php foreach($val['pp'] as $k=>$v){?>
                                        <li style="float: left"><a href="{{URL('/curr')}}?id=<?=$v['type_id']?>"><?=$v['type_name']?></a></li>
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
	<!-- 底部-->
    @include('master')
  </body>
  <script src="{{asset('jquery-2.1.1.min.js')}}" type="text/javascript"></script>
{{--  <script src="{{asset('style/js/ionic.bundle.min.js')}}"></script>--}}
  <script src="{{asset('style/js/common.js')}}" type="text/javascript"></script>
</html>