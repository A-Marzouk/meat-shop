@extends('layouts.main')

@section('main')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('img/meat2.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>HALAL MEAT IN UKRAINE ZAPOROZHYE</h1>
                        <p class="mb-5 font-weight-bold">
                            Quality meat with unparalleled taste at the most affordable prices. <br/>
                            Fresh, Healthy and Halal.
                        </p>
                        <p><a href="javascript:void(0)" class="btn btn-white btn-outline-white">ORDER NOW</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="slider-item" style="background-image: url('img/meat-3.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 element-animate">
                        <h1>HALAL MEAT IN UKRAINE ZAPOROZHYE</h1>
                        <p class="mb-5 font-weight-bold">
                            Quality meat with unparalleled taste at the most affordable prices. <br/>
                            Fresh, Healthy and Halal.
                        </p>
                        <p><a href="javascript:void(0)" class="btn btn-white btn-outline-white">ORDER NOW</a></p>
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
                        <img src="/img/beef-icon.png" alt="beef icon">
                    </span>
                    <h4 class="mb-4 text-primary">Beef</h4>
                    <p>
                        Fresh Halal <b>cattle meat</b>, high-quality protein and nutrients, perfect for steak and steamed meatball.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/lamb-icon.png" alt="lamb icon">
                    </span>
                    <h4 class="mb-4 text-primary">Lamb</h4>
                    <p>
                        Fresh Halal <b>sheep meat</b>, perfect for Soup, Mansaf and many other dishes.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/minced-meat-icon.png" alt="minced meat icon">
                    </span>
                    <h4 class="mb-4 text-primary">minced meat</h4>
                    <p>
                       Also known as '<b>Фарш</b>(ru)'.<br> finely minced beef, lamb or chicken.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/burger.png" alt="burger icon">
                    </span>
                    <h4 class="mb-4 text-primary">Burger</h4>
                    <p>
                       Make your own Halal Hamburger sandwiches at home with our perfect <b>beef burgers</b>.<br/>
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                    <span class="display-4 d-block mb-4">
                        <img src="/img/shashlik.png" alt="shashlik icon">
                    </span>
                    <h4 class="mb-4 text-primary">Lola kebab</h4>
                    <p>
                        Gathering for Shashlik ? Order Halal, Fresh and ready to cook <b>Lola Kebab</b>
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 col-lg-4 text-center">
                     <span class="display-4 d-block mb-4">
                        <img src="/img/chicken-icon.png" alt="chicken icon">
                    </span>
                    <h4 class="mb-4 text-primary">Chicken</h4>
                    <p>
                        100% Halal chicken, get whole chicken, your favorite parts or fillet.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Subscribe Newsletter</h3>
                            <p>Keep up to date with our monthly offers, Eid Adha and Ramadan news.</p>
                        </div>

                        <form action="" class="col-12">
                            <div class="row align-items-center">
                                <div class="col-md-8 mb-3 mb-md-0">
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
