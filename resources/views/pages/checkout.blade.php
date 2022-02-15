@extends('layouts.user')

@section('title', 'Checkout')

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
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-detail">
                        <h1>Who is going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>
                        <div class="attendee">
                            <div class="responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="user/images/avatar-4.png" alt="" height="60"></td>
                                            <td class="align-middle">Angga Risky</td>
                                            <td class="align-middle">IDN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle"><img src="user/images/ic_remove.png" alt=""></td>
                                        </tr><tr>
                                            <td><img src="user/images/avatar-5.png" alt="" height="60"></td>
                                            <td class="align-middle">Budi Santoso</td>
                                            <td class="align-middle">IDN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle"><img src="user/images/ic_remove.png" alt=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="username" class="sr-only"></label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="Username" placeholder="Name">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="visa" class="sr-only"></label>
                                        <select name="visa" id="visa" class="form-select mb-2 mr-sm-2">
                                            <option value="">Visa</option>
                                            <option value="">30 Days</option>
                                            <option value="">N/A</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="passport" class="sr-only"></label>
                                        <input class="datepicker" id="datepicker" placeholder="DOE Passport"/>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-now my-4 px-4">Add Now</button>
                                    </div>
                                </div>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">Your are only able to invite member that has registered in Nomads.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-detail card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">2 person</td>
                            </tr>
                            <tr>
                                <th width="50%">Aditional Visa</th>
                                <td width="50%" class="text-right">$190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$80,00/person</td>
                            </tr>
                            <tr>
                                <th width="50%">Subtotal</th>
                                <td width="50%" class="text-right">$280,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total(+unique)</th>
                                <td width="50%" class="text-right text-total"><span class="text-blue">$279,</span><span class="text-orange">33</span></td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instruction</h2>
                        <p class="payment-ins">Please complete your payment</p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img class="bank-image" src="user/images/ic_bank.png" alt="">
                                <div class="description">
                                    <h3>PT. Nomads ID</h3>
                                    <p>0881 8829 8800 <br> Bank Central Asia</p>
                                </div>
                                <div class="clearfix">

                                </div>
                            </div>
                        </div>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img class="bank-image" src="user/images/ic_bank.png" alt="">
                                <div class="description">
                                    <h3>PT. Nomads ID</h3>
                                    <p>0881 8829 8800 <br> Bank Central Asia</p>
                                </div>
                                <div class="clearfix">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="#" class="btn btn-join mt-3 py-2 col-12">I have made payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('after-style')
    <link rel="stylesheet" href="user/libraries/gijgo/css/gijgo.min.css">
@endpush

@push('after-script')
    <script src="user/libraries/gijgo/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="user/images/ic_doe.png"/>'
                }
            })
        });
    </script>
@endpush
