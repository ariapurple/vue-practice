@extends('layouts.app')

@section('body')
<div class="header sticky-top bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="px-3" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>
<div class="content">
    <div class="banners">
        <div><img src="/images/banner01.jpg" alt=""></div>
        <div><img src="/images/banner02.jpg" alt=""></div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-center">
                    <h4 class="my-5">We meet clients specific needs</h4>
                    <div>
                        <p>Total and straight through IT solutions from medium to large-scale corporations.</p>
                        <p>Offering products or services on the Internet can considerably develop markets.</p>
                        <p>Improve customer services and lower operational costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-3" id="services">
            <div class="col-md-12">
                <h4 class="text-center my-5">
                    Services
                </h4>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-globe-europe pr-2 text-center"></i>
                        <span>Websites</span>
                    </div>
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-shopping-cart pr-2 text-center"></i>
                        <span>Online Shop</span>
                    </div>
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-cogs pr-2 text-center"></i>
                        <span>Web System</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-pencil-alt pr-2 text-center"></i>
                        <span>Designs</span>
                    </div>
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-mobile-alt pr-2 text-center"></i>
                        <span>Mobile Apps</span>
                    </div>
                    <div class="col-md-8 py-3 m-auto">
                        <i class="fas fa-cloud pr-2 text-center"></i>
                        <span>Digital Marketing</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3 justify-content-center" id="projects">
            <div class="col-md-12 text-center">
                <h4 class="my-5">Projects</h4>
            </div>
            <div class="col-md-4">
                <a href="http://www.radarcan.hk/">
                    <p class="text-center main-bg text-white py-2">
                        Radarcan HK
                    </p>
                    <img src="/images/radarcan.png" alt="">
                </a>
            </div>
        </div>
        <div class="row py-3" id="contact">
            <div class="col-xl-4 col-lg-3 m-auto">
                <h4 class="my-5 text-center">Contact Us</h4>
                <div class="pt-3">
                    <i class="fas fa-phone"></i>
                    <span>Bryant: (852) 6596 2899</span>
                </div>
                <div class="pt-3">
                    <i class="fas fa-phone"></i>
                    <span>Chris: (852) 5194 7007</span>
                </div>
                <div class="pt-3">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:cs@innovationowl.com">cs@innovationowl.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer py-2 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center text-white">
                    Copyright © {{ date('Y') }} InnovationOWL Ltd. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
