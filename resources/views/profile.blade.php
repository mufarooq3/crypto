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
                           <ul >
                               <li><a href="{{route('threads.show', 'BTC')}}">Bit Coin</a></li>
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

           <div class="col-md-8" style="background-color: #fff;padding: 0;">

               <div class="profile_p">

                   <div class="header"></div>

                   <div class="col-md-12" style="">
                       <div class="col-md-4 profile_p-img">
                           <img class="img-responsive img-circle" src="{{asset('assets/img/user_profile.png')}}">
                           <div class="text">
                               <h2>User  Name</h2>
                               <h4>Member</h4>
                           </div>
                       </div>
                   </div>

                   <div class="col-md-12" style="background-color:#fff;">
                       <div class="col-md-4" style="padding:10px 30px;"> <p class="pull-right">Joined <br> Date  </p></div>
                   </div>

                   <div class="col-md-12" style="background-color:#fff;">
                       <div class="col-md-4" style=""> </div>
                       <div class="col-md-8" style="">
                           <div class="col-md-2 com" style="">
                               <img class="img-responsive img-circle" src="{{asset('assets/img/user_profile.png')}}">
                           </div>
                           <div class="col-md-10" style="">
                               <p> <a href="">[ANN] [Pre - ICO] REcoin - the first cryptocurrency backed by real estate</a> <br>
                                   Mary Bush replied to REcoin's topic in CRYPTOCURRENCY ANNOUNCEMENTS  </p>

                               <p>Are there someone who have already invested in REcoin? for example, I invested $800 :) </p>

                               <div class="col-md-4" style=""> <a href="#"> Monday at 08:38 PM</a> </div>
                               <div class="col-md-4" style=""> <a href="#"> 253 replies </a> </div>
                           </div>


                       </div>
                   </div>


               </div> <!-- end col-md-10 -->
       </div>
   </div>
   </div>
    <!-- script  -->

    <script src="assets/dist/js/bootstrap-select.js"></script>
@endsection
