<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Gravitao</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href= "{{ asset('Frontend/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('Frontend/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('Frontend/images/fevicon.png') }}" type="{{ asset('Frontend/image/gif') }}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('Frontend/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('Frontend/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- section header start -->
      <div class="header_section">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="logo"><a href="{{url('/')}}"><img src="{{ asset('frontend/images/logo.png') }}"></a></div>
               {{-- </div>
               <div class="col-md-9">
                  <div class="menu_text">
                     <ul>
                        <li><a href="{{url('/')}}">HOME</a></li>
                        <li><a href="{{url('/about')}}">ABOUT</a></li>
                        <li><a href="{{url('/service')}}">SERVICES</a></li>
                        <li><a href="{{url('/project')}}">PROJECTS</a></li>
                        <li><a href="{{url ('/contact')}}">CONTACT US</a></li>
                        <li><a href="{{url('/client')}}">CLIENTS</a></li>
                        <li><a href="{{url('/')}}"><img src="{{ asset('frontend/images/search-icon.png') }}"></a></li>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="{{url('/')}}">HOME</a>
                              <a href="{{url('/about')}}">ABOUT</a>
                              <a href="{{url('/service')}}">SERVICES</a>
                              <a href="{{url('/project')}}">PROJECTS</a>
                              <a href="{{url ('/contact')}}">CONTACT US</a>
                              <a href="{{url('/client')}}">CLIENTS</a>
                           </div>
                        </div>
                        <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="{{ asset('Frontend/images/toggle.png') }}" class="toggle_menu"></span>
                  </div>
                  </li>
                  </ul>
               </div>
            </div>
         </div> --}}
      </div>
      <!-- section header end -->