 @extends('frontend.master_home')
 @section('main_content')
 
 <!-- ***** Main Banner Area Start ***** -->
  @include('frontend.layouts.banner')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    @include('frontend.layouts.about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
   @include('frontend.layouts.menu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('frontend.layouts.chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    @include('frontend.layouts.reservation')
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
   @include('frontend.layouts.down_menu')
    <!-- ***** Chefs Area Ends ***** --> 
    @endsection
 