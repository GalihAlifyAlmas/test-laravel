@extends('home-front')
@section('content-produk')
 <!-- Main container -->
 <div class="container">
        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

              
                <!-- Products Grid -->
                <section class="section pt-4">

                    <h4 class="font-weight-bold mt-4 title-1">
                        <strong>OUR PRODUCT</strong>
                    </h4>
                    <hr class="red mb-5">
                    <!-- Grid row -->
                    <div class="row">

                    @foreach($products as $produk)
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{ asset('img/' . $produk->gambar) }}" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">{{  $produk->judul }}</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong><td>Rp.{{ number_format($produk->price, 2) }}</td></strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="fas fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->
                    @endforeach
                    </div>
                    <!--Grid row-->

              

                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

        </div>
    </div>
    <!-- /.Main Container -->
@endsection