@extends('layouts.main')

@section('main')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('img/meat2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>HALAL MEAT IN UKRAINE <br/> <span style="font-size: large;">HALAL MADE EASIER IN ZAPOROZHYE</span></h1>
                        <p class="mb-5 font-weight-bold">
                            Quality meat with unparalleled taste at the most affordable prices. <br/>
                            Fresh, Healthy and Halal.
                        </p>
                        <p><a href="#orderSection" class="btn btn-white btn-outline-white" >ORDER NOW</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('img/meat-3.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>HALAL MEAT IN UKRAINE <br/> <span style="font-size: large;">HALAL MADE EASIER IN ZAPOROZHYE</span></h1>
                        <p class="mb-5 font-weight-bold">
                            Quality meat with unparalleled taste at the most affordable prices. <br/>
                            Fresh, Healthy and Halal.
                        </p>
                        <p><a href="#orderSection"  class="btn btn-white btn-outline-white">ORDER NOW</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END slider -->
    <section class="section bg-light element-animate" id="products">
        <div class="container">
            <div class="row">

                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/halal.png" alt="Halal icon">
                    </span>
                    <h4 class="mb-4 text-primary">100% Halal</h4>
                    <p>
                        Our meet is processed, made, produced and stored using methods that have been cleansed according to Islamic law.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/money.png" alt="Halal icon">
                    </span>
                    <h4 class="mb-4 text-primary">Affordable</h4>
                    <p>
                        All products are priced reasonably, to make Halal meat available for everyone.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/truck.png" alt="delivery icon">
                    </span>
                    <h4 class="mb-4 text-primary">Fast Delivery</h4>
                    <p>
                       Halal meat in Ukraine now is in Zaporozhye.
                        Beef, Lamb, chicken, burger, minced meat and Lola kebab. Delivery within 24 hours.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light element-animate">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Our Menu</h2>
                        <span class="back-text-dark">Menu</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('img/lamb-dish.jpg');"></div>
                        <div class="text order-1">
                            <h3>Lamb (Mutton)</h3>
                            <p> Fresh Halal <b>sheep meat</b>, perfect for Soup, Mansaf and many other dishes.</p>
                            <p class="text-primary h3">UAH 120.00 /kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('img/minced-meat.png');"></div>
                        <div class="text">
                            <h3>Minced meat</h3>
                            <p>Also known as '<b>Фарш</b>(ru)'.<br> finely minced beef, lamb or chicken.</p>
                            <p class="text-primary h3">UAH 155.00 /kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image" style="background-image: url('img/burger-dish.png');"></div>
                        <div class="text">
                            <h3>Burger</h3>
                            <p>
                                Make your own Halal Hamburger sandwiches at home with our perfect <b>beef burgers</b>
                            </p>
                            <p class="text-primary h3">UAH 170.00 /kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image" style="background-image: url('img/lola-kebab.jpg');"></div>
                        <div class="text order-1">
                            <h3>Lola kebab</h3>
                            <p>
                                Gathering for Shashlik ? Order Halal, Fresh and ready to cook <b>Lola Kebab</b>
                            </p>
                            <p class="text-primary h3">UAH 175.00 /kg</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('img/beef.webp');"></div>
                        <div class="text order-1">
                            <h3>Beef</h3>
                            <p>Fresh Halal <b>cattle meat</b>, high-quality protein and nutrients, perfect for steak and steamed meatball.</p>
                            <p class="text-primary h3">COMING SOON</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sched d-block d-lg-flex">
                        <div class="bg-image order-2" style="background-image: url('img/chicken-meat.jpg');"></div>
                        <div class="text order-1">
                            <h3>Chicken</h3>
                            <p>
                                100% Halal chicken, get whole chicken, your favorite parts or fillet.
                            </p>
                            <p class="text-primary h3">COMING SOON</p>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section> <!-- .section -->

    <section class="py-5 bg-light" id="orderSection">

        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Make order</h2>
                        <span class="back-text-dark">order</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="orderComponent">
                                <order-component></order-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
