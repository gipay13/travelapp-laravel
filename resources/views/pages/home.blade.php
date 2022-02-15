@extends('layouts.user')

@section('title')
    Nomads
@endsection

@section('content')
<header class="text-center">
    <h1>Explore The Beautiful World <br>As Easy One Click</h1>
    <p class="mt-3">You will see beautiful <br>moment you never see before</p>
    <a href="" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20k</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3k</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>Somethings that you never try <br>before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('user/images/travel-1.jpg');">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Deratan, Bali</div>
                        <div class="travel-button mt-auto">
                            <a href="detail.html" class="btn btn-travel-detail px-4">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('user/images/travel-2.jpg');">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Bromo, Malang</div>
                        <div class="travel-button mt-auto">
                            <a href="detail.html" class="btn btn-travel-detail px-4">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('user/images/travel-3.jpg');">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Nusa Pedina</div>
                        <div class="travel-button mt-auto">
                            <a href="detail.html" class="btn btn-travel-detail px-4">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('user/images/travel-4.jpg');">
                        <div class="travel-country">Middle East</div>
                        <div class="travel-location">Dubai</div>
                        <div class="travel-button mt-auto">
                            <a href="detail.html" class="btn btn-travel-detail px-4">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-network">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h2>Our Network</h2>
                    <p>Companies are trusted us <br>more than just a trip</p>
                </div>
                <div class="col-md-7">
                    <img src="user/images/partner.png" alt="Logo Partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="text-center">They are loving us</h2>
                    <p>Moment were giving them <br>the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-testimonial-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="user/images/avatar-1.png" alt="" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">" It was glorious and i could not stop to stay wohoooo for every single moment "</p>
                            <hr>
                            <p class="trip-to mt-2">Trip to ubud</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="user/images/avatar-2.png" alt="" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">" It was glorious and i could not stop to stay wohoooo for every single moment "</p>
                            <hr>
                            <p class="trip-to mt-2">Trip to ubud</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="user/images/avatar-3.png" alt="" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonial">" It was glorious and i could not stop to stay wohoooo for every single moment "</p>
                            <hr>
                            <p class="trip-to mt-2">Trip to ubud</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="#" class="btn btn-started px-4 mt-4 mx-1">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
