@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="row" style="background-color: #b2d3ff;margin-bottom: 15px;">
                    <form class="navbar-form navbar-left" style="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <section class="left-menu">
                        <div class="top">
                            <p><span class="glyphicon glyphicon-btc"></span>&nbsp Coins </p>
                            <ul>

                                <li><a id="bit_coin" href="#">Bit Coin</a></li>
                                <li><a href="{{route('threads.show', 'LEO')}}">Leo Coin</a></li>
                                <li><a href="{{route('threads.show', 'DD')}}">Dollar</a></li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <p> <i class="fa fa-commenting-o" aria-hidden="true"></i> &nbspFourms</p>
                            <ul style="">
                                <li><a href="#">ICO's</a></li>
                                <li><a href="#">Mining</a></li>
                                <li><a href="#">Economy</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Off topic</a></li>
                                <li><a href="#">Alrorithic</a></li>
                                <li><a href="#">Philosophy</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </section>
                </div>

            </div>

            <div class="main2 col-md-8" style="background-color: #fff;">
                <div class="row" >
                    <p class="pull-left text-muted top-text-left">Movers and Gainers&nbsp&nbsp
                        <span class="glyphicon glyphicon-chevron-down" ></span></p>
                    <p class="pull-right top-text-right"> <a href="#m">See all >> </a></p>
                </div>

                <div class="row" style="border:1px solid #eee; margin-right:20px; padding:10px 0px;">
                    <div class="col-md-12 ">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <p>
                                <img class="img-responsive img-size" src='assets/img/eth-128.png' type='image/x-icon'>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-3 ">
                        <table class="table table-condensed table-responsive">
                            <thead>
                            <tr>
                                <th><img class="img"src="assets/img/btc.jpg"></th>
                                <th>Bitcoin (BTC)</th>

                            </tr>
                            </thead>

                        </table>
                        <label style="color: #337ab7">Pair: <span class="pull-right">BTC/USDT</span></label><br>
                        <label>Last 24 hours:</label>
                        <label>BTC/USDT <span class="pull-right">BTC/USDT</span></label><br>
                        <label>Change <span class="pull-right">BTC/USDT</span></label><br>
                        <label>High: <span class="pull-right">BTC/USDT</span></label><br>
                        <label>Low: <span class="pull-right">BTC/USDT</span></label><br>
                        <label>Volume: <span class="pull-right">BTC/USDT</span></label><br>
                    </div>
                    <div class="col-md-7 col-sm-7 ">
                        <div class="graph"></div>
                    </div>
                    <div class="col-md-2 col-sm-2 "> </div>
                </div>
                <!-- tabs start-->
                <div class="row">
                    <div id="exTab1" class="">
                        <ul  class="nav nav-pills">
                            <li class="active"><a  href="#1a" data-toggle="tab">All</a></li>
                            <li><a href="#2a" data-toggle="tab">Charts</a></li>
                            <li><a href="#3a" data-toggle="tab">Following</a></li>
                            <li><a href="#4a" data-toggle="tab">Links</a></li>
                            <li><a href="#5a" data-toggle="tab">New</a></li>
                        </ul>

                        <div class="tab-content clearfix">
                            <!-- first tab contant -->
                            <div class="tab-pane active" id="1a">
                                <h5>View as: <strong>Thread</strong> </h5>
                                <hr>
                                @foreach($threads as $thread)
                                <div class="row">  <!-- first post start -->
                                    <div class="container-fluid">
                                        <div class="">

                                            <div class="col-md-2 col-sm-2 col-xs-5">
                                                <div class="user-profile">
                                                    <img class="profile-img img-responsive" src="assets/img/user.png">
                                                    <img class="heart img-responsive" src="assets/img/heart.png">
                                                    <h5 class="view-profile">View Profile</h5>
                                                </div>
                                            </div>

                                            <div class="col-md-10 col-sm-10 col-xs-12">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <p style="font-size: 14px;color: #337ab7 !important;"> <a href="">Coin</a> > <a href="">BCT</a> > <a href="">BCT Charts Only</a> </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p class="pull-right">{{$thread->updated_at}}</p>
                                                    </div>
                                                </div>


                                                <div class="col-md-12 col-sm-12 comment-text">
                                                    <h4><strong>{{$thread->title}}</strong></h4>

                                                        {!! $thread->text !!}

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                    {{--<hr>--}}

                                    <div class="container-fluid">
                                        <div class="col-md-2 col-sm-2 col-xs-12 reply">
                                            <a href="" >
                                                <i class="fa fa-reply" aria-hidden="true"></i>
                                                <h6 class="pull-right">Replying to:</h6>
                                            </a>


                                        </div>
                                        <div class="col-md-10 col-sm-10 col-xs-12">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    @foreach($thread->posts as $post)
                                                    <div class="commment-box thumbnail">
                                                        {{--<p> <a href="">@username</a> Not as as Bullish as you hut here is my chart. here 1 houre TF <span class="">SELL</span> </p>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-4 col-sm-6 box1"> </div>--}}
                                                        {{--</div>--}}
                                                        {{--<p>And here is 4 TF</p>--}}
                                                        {{--<div class="row">--}}
                                                            {{--<div class="col-md-4 col-sm-6 box2"> </div>--}}
                                                        {{--</div>--}}

                                                            {!!$post->text !!}

                                                    </div>
                                                    @endforeach

                                                    <div class="panel-footer " style="border-radius: 15px; min-height:55px !important;">
                                                        <p><button id="{{"btn"}}{{$thread->id}}" class="reply-btn btn btn-info pull-right">Reply</button></p>
                                                        <script>
                                                            $(document).ready(function(){

                                                                $("{{'#'}}{{"btn"}}{{$thread->id}}").click(function(){
                                                                    $("{{'#'}}{{$thread->id}}").removeClass("hide");
                                                                    $("{{'#'}}{{"btn-close"}}{{$thread->id}}").removeClass("hide");
                                                                    $("{{'#'}}{{"btn"}}{{$thread->id}}").addClass("hide");
                                                                });

                                                                $("{{'#'}}{{"btn-close"}}{{$thread->id}}").click(function(){
                                                                    $("{{'#'}}{{$thread->id}}").addClass("hide");
                                                                    $("{{'#'}}{{"btn"}}{{$thread->id}}").removeClass("hide");
{{--                                                                    $("{{'#'}}{{"btn"}}{{$thread->id}}").addClass("hide");--}}
                                                                });

                                                            });
                                                        </script>
                                                        <div class="reply-box hide" id="{{$thread->id}}">

                                                            <form method="POST" action="{{route('posts.store')}}">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="thread_id" value="{{$thread->id}}">
                                                                <div class="form-group">
                                                                    <div id="sample">
                                                                        <textarea id="summernote{{$thread->id}}" name="text"></textarea>
                                                                        <script>
                                                                            $(document).ready(function() {
                                                                                $('#summernote{{$thread->id}}').summernote();
                                                                            });
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                                <button id="{{"btn-close"}}{{$thread->id}}" type="button" class="reply-close hide btn btn-danger">close</button>
                                                                <button type="submit" class="btn btn-info pull-right " style="">Send</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <br>


                                                    <div class="comment-box-bottom">
                                                        <ul>
                                                            <li><i class="fa fa-smile-o text-info" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-line-chart text-info" aria-hidden="true"></i></li>
                                                            <li style="color: #3c763d;">Buy</li>
                                                            <li style="color: #a98142;">Hold</li>
                                                            <li style="color: #a94442;">Sell</li>
                                                            <li><i class="fa fa-share text-info" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <hr>
                                    @endforeach
                            </div> <!-- first post end-->
                            <hr>


                            <div class="tab-pane" id="2a">

                            </div>
                            <div class="tab-pane" id="3a"> </div>
                            <div class="tab-pane" id="4a">




                                <br>



                                <div class="panel-footer" style="border-radius: 15px !important; ">
                                    @foreach($links as $link)
                                        <h4>Thread Id</h4>
                                        <div class="reply-box" style="padding-bottom: 35px; border-radius: 15px !important; ">

                                        {!! $link->link !!}
                                            <p><button id="{{"btn2"}}{{$link->id}}" class="reply-btn btn btn-info pull-right">Reply</button></p>
                                            <script>
                                                $(document).ready(function(){

                                                    $("{{'#'}}{{"btn2"}}{{$link->id}}").click(function(){
                                                        $("{{'#2'}}{{$link->id}}").removeClass("hide");
                                                        $("{{'#2'}}{{"btn-close"}}{{$link->id}}").removeClass("hide");
                                                        $("{{'#'}}{{"btn2"}}{{$link->id}}").addClass("hide");
                                                    });

                                                    $("{{'#2'}}{{"btn-close"}}{{$link->id}}").click(function(){
                                                        $("{{'#2'}}{{$link->id}}").addClass("hide");
                                                        $("{{'#'}}{{"btn2"}}{{$link->id}}").removeClass("hide");
                                                        {{--                                                                    $("{{'#'}}{{"btn"}}{{$thread->id}}").addClass("hide");--}}
                                                    });

                                                });
                                            </script>
                                            <div class="reply-box hide" id="{{'2'}}{{$link->id}}">

                                                <form method="POST" action="{{route('posts.store')}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="thread_id" value="{{$link->thread_id}}">
                                                    <div class="form-group">
                                                        <div id="sample">
                                                            <textarea id="summernote{{'link'}}{{$link->id}}" name="text"></textarea>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('#summernote{{'link'}}{{$link->id}}').summernote();
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                    <button id="{{'2'}}{{"btn-close"}}{{$link->id}}" type="button" class="reply-close hide btn btn-danger">close</button>
                                                    <button type="submit" class="btn btn-info pull-right " style="">Send</button>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>

                            </div>
                            <div class="tab-pane" id="5a">

                                <div class="panel-footer">
                                    <div class="reply-box">
                                        <!-- form start -->
                                        <form method="POST" action="{{route('threads.store')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="slug" value="{{$thread->slug}}">
                                            <input type="text" class="form-control" placeholder="Title of Discussion" name="title" style="border: none !important;height:50px;font-size: 20px;">
                                            <div class="form-group">
                                                <div id="sample">
                                                    <textarea id="summernote5a" name="text"></textarea>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#summernote5a').summernote();
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <button type="button" class="reply-close btn btn-danger">close</button>
                                            <button type="submit" class="btn btn-info pull-right" style="">Send</button>
                                        </form>  <!-- form end -->
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div> <!-- row -->

            </div><!--Container-fluid  --></div>
        <div class="bit_coin col-md-8 hide col-md-offset-2" style=" position:absolute;top: 50px;  background-color: #fff;">
            <div class="row" >
                <div class="table-responsive">

                    <table class="table table-currency table-sm" id="mytable">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Market Cap</th>
                            <th id="sl">
                                <a  href="javascript:void(0)" rel="me"><i class="fa fa-chevron-up"></i> <span>Price</span></a>

                            </th>
                            <th>Circulating Supply</th>
                            <th>Volume (24h)</th>
                            <th>%Change (24h)</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://api.coinmarketcap.com/v1/ticker/?limit=10",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 30,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET",
                            CURLOPT_HTTPHEADER => array(
                                "cache-control: no-cache",
                                "postman-token: 91710649-3df9-b934-1b50-f256442d497b"
                            ),
                        ));

                        $response = curl_exec($curl);
                        $err = curl_error($curl);

                        curl_close($curl);

                        if ($err) {
                            echo "cURL Error #:" . $err;
                        } else {
                            //echo $response;
                        }
                        $json = json_decode($response, true);
                        foreach($json as $item)
                        {


                        ?>
                        <!-- row1 start-->
                        <tr>
                            <td><?php echo $item['rank']; ?></td>
                            <td class="img-name"> <img src="assets/img/btc.jpg" alt=""> <a href="#"><?php echo $item['name']; ?></a></td>
                            <td> $<?php echo $item['market_cap_usd']; ?></td>
                            <td> <a href="#"> $<?php echo $item['price_usd']; ?></a></td>
                            <td> <a href="#"> <?php echo $item['24h_volume_usd']; ?> XBC *</a></td>
                            <td> <a href="#">$<?php echo $item['price_usd']; ?></a></td>
                            <td><?php echo $item['percent_change_24h']; ?>%</td>
                        </tr> <!-- row 1 end -->
                        <?php } ?>
                        </tbody>


                    </table>

                </div>
            </div> <!-- row -->

        </div></div>
        </div></div>

        <div class="notify" id="notify"></div>
            <!-- script  -->
            <script src="assets/dist/js/bootstrap-select.js"></script>
@endsection

@section('javascript')

    <script src="assets/dist/js/bootstrap-select.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-messaging.js"></script>

    <script>

        $(document).ready(function () {
            $('#bit_coin').click(function () {
                $('.main2').addClass('hide');
                $('.bit_coin').removeClass('hide');
            });
        });

        function sendTokenToServer(token){
//            console.log('Sending token: '+token);
            $.ajax({
                url: '{{config("app.url")}}update_fcm_token',
                data: {
                    token: token
                },
                error: function() {
                    console.log("Error while sending token!");
                },
                success: function(data) {
                    console.log(data);
                },
                type: 'GET'
            });
        }

        // Initialize Firebase
        var config = {
            messagingSenderId: "858162500879"
        };

        firebase.initializeApp(config);
        const messaging = firebase.messaging();
        messaging.requestPermission()
            .then(function() {
                console.log('Notification permission granted.');
            })
            .catch(function(err) {
                console.log('Unable to get permission to notify.', err);
            });

        messaging.getToken()
            .then(function(currentToken) {
                if (currentToken) {
                    //console.log("Token Received: ",currentToken);
                    sendTokenToServer(currentToken);
                    //updateUIForPushEnabled(currentToken);
                } else {
                    // Show permission request.
                    console.log('No Instance ID token available. Request permission to generate one.');
                    // Show permission UI.
                    //updateUIForPushPermissionRequired();
                    //setTokenSentToServer(false);
                }
            })
            .catch(function(err) {
                console.log('An error occurred while retrieving token. ', err);
                //showToken('Error retrieving Instance ID token. ', err);
                //setTokenSentToServer(false);
            });

        messaging.onTokenRefresh(function() {
            messaging.getToken()
                .then(function(refreshedToken) {
                    console.log('Token refreshed.');
                    // Indicate that the new Instance ID token has not yet been sent to the
                    // app server.
                    // Send Instance ID token to app server.
                    sendTokenToServer(refreshedToken);
                    // ...
                })
                .catch(function(err) {
                    console.log('Unable to retrieve refreshed token ', err);
//                    showToken('Unable to retrieve refreshed token ', err);
                });
        });

        messaging.onMessage(function(payload) {
            console.log("Message received. ", payload);
            add_bottom_notify_card(payload);
            add_nav_notify_card(payload);
//            toastr.info(payload.notification.body,payload.notification.title);
//            $('#notify').append('<div class="notification">'+
//                '<p class="close" onclick="remove_notify()"><i id="close" class="fa fa-times" aria-hidden="true"></i></p><div class="col-sm-3">'+
//                '<img class="img-responsive"src="assets/img/user.png" alt="">'+
//                '</div>'+
//                '<div class="col-sm-9">'+
//                '<div class="text">'+
//                '<p> <strong>'+payload.notification.title+'</strong> </p>'+
//                '<p>'+payload.notification.body+'</p>'+
//                '</div>'+
//                '</div>'+
//                '</div>');
        });

        function remove_notify(){
            var len = $('#notify').children().length;

            for(var i=0; i<len; ++i){
                $('#notify').children().eq(i)
                    .delay(5000)
                    .fadeOut(1000, function () {
                        console.log('removing notify child');
                        $(this).remove();
                    });
            }
        }

        function add_bottom_notify_card(payload){
            $('#notify').append('<div class="notification" onclick="remove_notify(this)">'+
                '<p class="close" onclick="this.remove()"><i id="close" class="fa fa-times" aria-hidden="true"></i></p><div class="col-sm-3">'+
                '<img class="img-responsive"src="assets/img/user.png" alt="">'+
                '</div>'+
                '<div class="col-sm-9">'+
                '<div class="text">'+
                '<p> <strong>'+payload.notification.title+'</strong> </p>'+
                '<p>'+payload.notification.body+'</p>'+
                '</div>'+
                '</div>'+
                '</div>');

//            if( $('#notify').children().length > 4){
//                $('#notify').children().eq(0).fadeOut('slow', function(){
//                    $(this).remove();
//                });
//            }

            remove_notify();
        }
        function add_nav_notify_card(payload){
            $('#dropdown-notification').append(' <li style="padding: 0px 0px 0px 0px !important;">'+
                '<div class="notification">'+
                '<p class="close"></p>'+
                '<div class="col-sm-3">'+
                '<img class="img-responsive"src="assets/img/user.png" alt="">'+
                '</div>'+
                '<div class="col-sm-9">'+
                '<div class="text">'+
                '<p> <strong>'+payload.notification.title+'</strong> </p>'+
                '<p>'+payload.notification.body+'</p>'+
                '</div> </div> </div> </li>');
        }

    </script>
@endsection
