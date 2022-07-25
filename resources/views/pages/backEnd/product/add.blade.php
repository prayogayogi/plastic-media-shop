@extends("layouts.app-custome")

@section("title", "Product")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            app
                        </li>
                        <li class="breadcrumb-item" aria-current="page">team</li>
                    </ol>
                </nav>

            </div>

            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-member"> Add Member
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Progress</h2>
                    </div>

                    <div class="card-body p-4 py-xl-6 px-xl-2">
                        <div class="circle circle-lg"
                             data-size="200"
                             data-value="0.83"
                             data-thickness="20"
                             data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                        >
                            <div class="circle-content">
                                <h6 class="text-uppercase text-dark font-weight-bold">83%</h6>

                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Team Activity</h2>
                    </div>

                    <div class="card-body p-0" data-simplebar style="height: 302px;">
                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                <i class="mdi mdi-cart-outline font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Emma Smith</a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>

                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 1 min ago</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                <i class="mdi mdi-email-outline font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Sophia Amanda</a>
                                <p>Donec sit amet justo dignissim</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 5 min ago</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                <i class="mdi mdi-stack-exchange font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Emily Disuja</a>
                                <p>At efficitur turpis hendrerit id</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 1 day ago</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                <i class="mdi mdi-cart-outline font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">William Camble</a>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                <i class="mdi mdi-calendar-blank font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
                                <p >Donec sit amet justo dignissim</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between border-bottom px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                <i class="mdi mdi-stack-exchange font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
                                <p >At efficitur turpis hendrerit id</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </div>

                        <div class="media media-border-bottom py-3 align-items-center justify-content-between px-5">
                            <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                <i class="mdi mdi-email-outline font-size-20"></i>
                            </div>
                            <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
                                <p >Phileine has placed an new order</p>
                            </div>
                            <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                        </div>

                    </div>
                    <div class="mt-3"></div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-3.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Emma Smith</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.95"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>95%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.65"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>65%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.35"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>25%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-1.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Sophia Amanda</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.7"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>70%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.9"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>90%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.3"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>30%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-4.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Emily Disuja</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="1"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>100%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.55"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>55%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.2"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>20%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-12.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">William Camble</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.15"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>15%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.8"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>80%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.4"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>40%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u6.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Albrecht Straub</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.8"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>80%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.4"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>40%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.15"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>15%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-7.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Roger Forstt</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="1"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>100%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.55"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>55%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.2"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>20%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-6.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Aaron Varta</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.9"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>90%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.7"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>70%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class="circle"
                                     data-size="60"
                                     data-value="0.3"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>30%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 col-xxl-3">
                <div class="card card-default mt-6">
                    <div class="card-body text-center p-4">
                        <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                            <div class="image mb-3 mt-n9">
                                <img src="assets/img/user/u-xl-10.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                            </div>

                            <h5 class="card-title text-dark">Kean Disuja</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex mb-1">
                                    <i class="mdi mdi-map mr-1"></i>
                                    <span>Nulla vel metus 15/178</span>
                                </li>
                                <li class="d-flex">
                                    <i class="mdi mdi-email mr-1"></i>
                                    <span>exmaple@email.com</span>
                                </li>
                            </ul>
                        </a>

                        <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>

                        <div class="row justify-content-center">
                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.95"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#35D00E&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">html</h6>
                                        <h6>95%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.65"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fec400&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">css</h6>
                                        <h6>65%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 px-1">
                                <div class=" circle"
                                     data-size="60"
                                     data-value="0.35"
                                     data-thickness="4"
                                     data-fill="{
														&quot;color&quot;: &quot;#fe5461&quot;
													}"
                                >
                                    <div class="circle-content">
                                        <h6 class="text-uppercase">js</h6>
                                        <h6>25%</h6>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Contact Modal -->
        <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-end border-bottom-0">
                        <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-pencil"></i>
                        </button>

                        <div class="dropdown">
                            <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>

                        <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>

                    <div class="modal-body pt-0">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="profile-content-left px-4">
                                    <div class="card text-center widget-profile px-0 border-0">
                                        <div class="card-img mx-auto rounded-circle">
                                            <img src="assets/img/user/u6.jpg" alt="user image">
                                        </div>

                                        <div class="card-body">
                                            <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                            <p>Albrecht.straub@gmail.com</p>
                                            <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">1503</h6>
                                            <p>Friends</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">2905</h6>
                                            <p>Followers</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">1200</h6>
                                            <p>Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact-info px-4">
                                    <h4 class="text-dark mb-1">Contact Details</h4>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                    <p>Albrecht.straub@gmail.com</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                    <p>+99 9539 2641 31</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                    <p>Nov 15, 1990</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                                    <p>Lorem, ipsum dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Contact Button  -->
        <div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <form class="modal-header border-bottom-0">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>

                    <div class="modal-body p-0" data-simplebar style="height:320px">
                        <ul class="list-unstyled border-top mb-0">
                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Aaren</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox" checked="checked">
                                            <div class="control-indicator"></div>
                                        </label>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message ">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                                        <span class="status active"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Leon Battista</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox" checked="checked">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u3.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Abriel</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u4.jpg" alt="Image">
                                        <span class="status active"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Emma</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Emily</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u6.jpg" alt="Image">
                                        <span class="status"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">William</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u7.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Sophia</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u8.jpg" alt="Image">
                                        <span class="status"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Sophia</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u1.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Aaren</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u2.jpg" alt="Image">
                                        <span class="status"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Abby</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u3.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>
                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Abriel</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u4.jpg" alt="Image">
                                        <span class="status active"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Emma</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u5.jpg" alt="Image">
                                        <span class="status"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Emily</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u6.jpg" alt="Image">
                                        <span class="status away"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">William</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="media media-message">
                                    <div class="position-relative mr-3">
                                        <img class="rounded-circle" src="assets/img/user/u7.jpg" alt="Image">
                                        <span class="status"></span>
                                    </div>

                                    <div class="media-body d-flex justify-content-between align-items-center">
                                        <div class="message-contents">
                                            <h4 class="title">Sophia</h4>
                                            <p class="last-msg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam itaque doloremque
                                                odio,
                                                eligendi delectus vitae.</p>
                                        </div>

                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <div class="control-indicator"></div>
                                        </label>

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary btn-pill">Add new member</button>
                    </div>
                </div>
            </div>
        </div>





    </div> <!-- End Content -->
@endsection
