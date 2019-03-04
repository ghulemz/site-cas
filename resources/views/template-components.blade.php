{{--
  Template Name: Components
--}}

@extends('layouts.app')

@section('content')

    <a href="#"><div class="button">Learn More</div></a>
    &nbsp;
    <div class="wrapper-desc-banner bg-dark">
        <h1 class="title-desc-banner">Real-World Skills. Launching Careers.</h1>
        <div class="content-desc-banner">
            <p>Core Plus Aerospace is a two-year high school manufacturing curriculum that prepares students for high-demand jobs through hands-on learning. Students gain real-world skills that open doors to good-paying manufacturing jobs and give them an advantage. when applying for apprenticeships, post-high school certificates, and college degrees.</p>
        </div>
    </div>

    <div class="yt-wrapper d-flex align-items-center" data-src="3ii_oCrMxpg">
        <img class="yt-image" src="http://img.youtube.com/vi/3ii_oCrMxpg/mqdefault.jpg">
        <div class="yt-play"></div>
    </div>

    <div class="subscribe">
        Subscribe
    </div>

    <img src="@asset('images/core-plus-black.png')" alt="" class="logo align-self-center">

    <button class="navbar-toggler hamburger hamburger--spring btn-toggler-md" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="search-wrapper">
        <form action="@php echo home_url('/') @endphp" method="get" class="d-flex">
            <i class="icofont-search"></i>
            <input type="text" name="s" id="search" value="@php the_search_query(); @endphp">
        </form>
    </div>

    <div class="menu-top-wrapper">
        <nav class="navbar navbar-expand-sm">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 d-flex-align-items-center justify-content-between">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For Educators</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For Parents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="social-link d-flex align-items-center">
        <i class="icofont-youtube-play item-icon pr-1"></i>
        <i class="icofont-facebook item-icon pr-1"></i>
        <i class="icofont-twitter item-icon pr-2"></i>
        <i class="icofont-instagram item-icon pr-2"></i>
        <i class="icofont-envelope item-icon"></i>
    </div>

    <div class="wrapper-link-top d-flex align-items-center">
        <div class="social-link pr-2 d-flex align-items-center">
            <i class="icofont-youtube-play item-icon pr-1"></i>
            <i class="icofont-facebook item-icon pr-1"></i>
            <i class="icofont-twitter item-icon pr-2"></i>
            <i class="icofont-instagram item-icon pr-2"></i>
            <i class="icofont-envelope item-icon"></i>
        </div>
        <div class="subscribe">
            Subscribe
        </div>
    </div>

    <div class="button find-location">
        <span class="content">Find Location</span>
    </div>

    {{--<img width="100%" src="@asset('images/background.jpg')" alt="">--}}
    {{--<img width="100%" src="@asset('images/background-500.jpg')" alt="">--}}


    {{--<div id="owl-carousel-1" class="owl-carousel owl-theme">--}}
        {{--<div> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <img src="http://img.youtube.com/vi/iudOyoQED9M/mqdefault.jpg" alt="1"></div>--}}
        {{--<div> <img src="http://img.youtube.com/vi/Ii6BvVXTcZ4/mqdefault.jpg" alt="2"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </div>--}}
        {{--<div> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <img src="http://img.youtube.com/vi/F_2QZ2tGYyI/mqdefault.jpg" alt="3"> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', </div>--}}
    {{--</div>--}}

    <div class="header-wrapper">
        <div class="header-top d-sm-flex justify-content-between d-none">
            <div class="search-wrapper">
                <form action="@php echo home_url('/') @endphp" method="get" class="d-flex">
                    <i class="icofont-search"></i>
                    <input type="text" name="s" id="search" value="@php the_search_query(); @endphp">
                </form>
            </div>
            <div class="wrapper-link-top d-flex align-items-center">
                <div class="social-link pr-2 d-flex align-items-center">
                    <i class="icofont-youtube-play item-icon pr-1"></i>
                    <i class="icofont-facebook item-icon pr-1"></i>
                    <i class="icofont-twitter item-icon pr-2"></i>
                    <i class="icofont-instagram item-icon pr-2"></i>
                    <i class="icofont-envelope item-icon"></i>
                </div>
                <div class="subscribe">
                    Subscribe
                </div>
            </div>
        </div>
        <div class="header-bottom d-flex flex-column flex-lg-row">
            <div class="wrapper-mobile d-flex justify-content-between d-lg-block">
                <img src="@asset('images/core-plus-black.png')" alt="" class="logo align-self-center">
                <button class="navbar-toggler hamburger hamburger--spring btn-toggler-lg" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
                </button>
            </div>
            <div class="menu-top-wrapper align-self-end align-self-lg-end align-self-center">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav w-100 d-flex-align-items-center justify-content-between">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">For Educators</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">For Parents</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">For Students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="button find-location align-self-end ml-auto d-flex justify-content-center align-items-center">
                <span class="content">Find Location</span>
            </div>
        </div>
    </div>

    <div id="my-element" style="width:500px; height:50px;background:red;">
        <span>My awesome text! My awesome text! My awesome text! My awesome text!</span>
    </div>

    <div class="wrapper-desc-content">
        <h2 class="title-desc-content">
            For Educators
        </h2>

        <div class="content-desc-content">
            <p>
                We offer resources and tools to answer your questions and help you show students, families, and other educators what Core Plus Aerospace is about and how it prepares students for success.
            </p>
        </div>
    </div>

    <div class="wrapper-form">
        <h3 class="title-top-footer">
            Subscribe
        </h3>
        <?php echo gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $echo = true );
        ?>
    </div>


    <div class="header-wrapper">
        <div class="bg-header-top">
            <div class="container container-content">
                <div class="header-top d-sm-flex justify-content-between d-none">
                    <div class="search-wrapper">
                        <form action="@php echo home_url('/') @endphp" method="get" class="d-flex">
                            <i class="icofont-search"></i>
                            <input type="text" name="s" id="search" value="@php the_search_query(); @endphp">
                        </form>
                    </div>
                    <div class="wrapper-link-top d-flex align-items-center">
                        <div class="social-link pr-2 d-flex align-items-center">
                            <i class="icofont-youtube-play item-icon pr-1"></i>
                            <i class="icofont-facebook item-icon pr-1"></i>
                            <i class="icofont-twitter item-icon pr-2"></i>
                            <i class="icofont-instagram item-icon pr-2"></i>
                            <i class="icofont-envelope item-icon"></i>
                        </div>
                        <div class="subscribe">
                            Subscribe
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-header-bottom">
            <div class="container container-content">
                <div class="header-bottom d-flex flex-column flex-lg-row">
                    <div class="wrapper-mobile d-flex justify-content-between d-lg-block">
                        <img src="@asset('images/core-plus-black.png')" alt="" class="logo align-self-center">
                        <button class="navbar-toggler hamburger hamburger--spring btn-toggler-lg" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
                        </button>
                    </div>
                    <div class="menu-top-wrapper align-self-end align-self-lg-end align-self-center">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav w-100 d-flex-align-items-center justify-content-between">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Educators</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Parents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Students</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">News</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="button find-location align-self-end ml-auto d-flex justify-content-center align-items-center">
                        <span class="content">Find Location</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $background = get_template_directory_uri()."/assets/images/background.jpg"?>
    <div class="bg-container" style="background: url('<?php echo $background?>') center/cover">
        <div class="bg-dark-tranparant" style="background-color: #00000070">
            <div class="container container-content">
                <div class="wrapper-outer-banner d-flex flex-column flex-md-row justify-content-between">
                    <div class="wrapper-desc-banner order-1 order-md-0">
                        <h1 class="title-desc-banner pt-3 pt-md-0 pb-1 pb-md-3">Real-World Skills. Launching Careers.</h1>
                        <div class="content-desc-banner pb-1 pb-md-2">
                            <p>Core Plus Aerospace is a two-year high school manufacturing curriculum that prepares students for high-demand jobs through hands-on learning. Students gain real-world skills that open doors to good-paying manufacturing jobs and give them an advantage. when applying for apprenticeships, post-high school certificates, and college degrees.</p>
                        </div>
                        <a href="#"><div class="button">Learn More</div></a>
                    </div>
                    <div id="owl-carousel-1" class="owl-carousel owl-theme">
                        <div>
                            <div class="yt-wrapper d-flex align-items-center pr-0" data-src="GVm70BcwwZQ">
                                <img class="yt-image" src="http://img.youtube.com/vi/GVm70BcwwZQ/mqdefault.jpg">
                                <div class="yt-play"></div>
                            </div>
                        </div>
                        <div>
                            <div class="yt-wrapper d-flex align-items-center pr-0" data-src="iudOyoQED9M">
                                <img class="yt-image" src="http://img.youtube.com/vi/iudOyoQED9M/mqdefault.jpg">
                                <div class="yt-play"></div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>{{--background: bg-color bg-image position/bg-size bg-repeat bg-origin bg-clip bg-attachment initial|inherit;--}}

    <div class="container container-content">
        <div class="wrapper-audience d-flex flex-column flex-md-row">
            <div class="wrapper-desc-content d-flex flex-column justify-content-between pt-md-5 pt-3 pb-3 pb-md-5 pr-0 pr-md-4">
                <div class="header-group">
                    <h2 class="title-desc-content">
                        For Educators
                    </h2>
                    <div class="content-desc-content">
                        <p>
                            We offer resources and tools to answer your questions and help you show students, families, and other educators what Core Plus Aerospace is about and how it prepares students for success.
                        </p>
                    </div>
                </div>
                <a href="#"><div class="button">Learn More</div></a>
            </div>
            <div class="wrapper-desc-content d-flex flex-column justify-content-between border-audiece pt-md-5 pt-3 pb-3 pb-md-5 pr-0 pl-0 pr-md-4 pl-md-4">
                <div class="header-group">
                    <h2 class="title-desc-content">
                        For Parents
                    </h2>
                    <div class="content-desc-content">
                        <p>
                            Learn how Core Plus Aerospace can give your student an advantage when applying for a job in manufacturing, pursuing an apprenticeship, or preparing for college programs in applied sciences, engineering, or other related fields.
                        </p>
                    </div>
                </div>
                <a href="#"><div class="button">Learn More</div></a>
            </div>
            <div class="wrapper-desc-content d-flex flex-column justify-content-between pt-md-5 pt-3 pb-3 pb-md-5 pl-0 pl-md-4">
                <div class="header-group">
                    <h2 class="title-desc-content">
                        For Students
                    </h2>

                    <div class="content-desc-content">
                        <p>
                            Do you enjoy learning by doing? Are you looking to get started on the pathway to an exciting career and learn skills that will help you succeed in an apprenticeship or college? Learn more about the curriculum and find a course near you.
                        </p>
                    </div>
                </div>

                <a href="#"><div class="button">Learn More</div></a>
            </div>
        </div>
    </div>

    <div class="container container-content container-footer-top">
        <div class="wrapper-form">
            <h3 class="title-top-footer">
                Subscribe
            </h3>
            <?php echo gravity_form( 2, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = true, $echo = true );
            ?>
        </div>
    </div>
@endsection

