@extends('layouts.user')

@section('title')
    Detail
@endsection

@section('content')
    <main>
        <section class="section-detail-header"></section>
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-detail">
                            <h1>Nusa Peninda</h1>
                            <p>Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="user/images/details-1.jpg" alt="" class="xzoom" id="xzoom-default" xoriginal="user/images/details-1.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="user/images/details-1.jpg">
                                        <img src="user/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="user/images/details-1.jpg">
                                    </a>
                                    <a href="user/images/details-1.jpg">
                                        <img src="user/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="user/images/details-1.jpg">
                                    </a>
                                    <a href="user/images/details-1.jpg">
                                        <img src="user/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="user/images/details-1.jpg">
                                    </a>
                                    <a href="user/images/details-1.jpg">
                                        <img src="user/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="user/images/details-1.jpg">
                                    </a>
                                    <a href="user/images/details-1.jpg">
                                        <img src="user/images/details-1.jpg" alt="" class="xzoom-gallery" width="128" xpreview="user/images/details-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore harum explicabo voluptatibus sapiente, illo sunt ullam exercitationem neque reprehenderit debitis. Eligendi mollitia libero, illum molestias saepe debitis quidem sapiente soluta.</p>
                            <div class="row features">
                                <div class="col-md-4">
                                    <img src="user/images/ic_event.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 boder-left">
                                    <img src="user/images/ic_bahasa.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 boder-left">
                                    <img src="user/images/ic_foods.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-detail card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="user/images/members.png" alt="" class="member-image">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">22 Desember 2021</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">$D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80,00/person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="#" class="btn btn-join mt-3 py-2 col-12">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('before-style')
    <link rel="stylesheet" href="user/libraries/xZoom/xzoom.css">
@endpush

@push('after-script')
    <script src="user/libraries/xZoom/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15,

            });
        });
    </script>
@endpush
