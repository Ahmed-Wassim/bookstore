@extends('home.layouts.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <h6>Book is Knowledge</h6>
                        <h2>Knowledge is Power</h2>
                        <p>Library is a really cool and professional design for your websites. This HTML CSS template is
                            based on Bootstrap v5 and it is designed for related web portals. Liberty can be freely
                            downloaded from github</p>
                        <div class="buttons">
                            <div class="border-button">
                                <a href="explore.html">Explore Top Books</a>
                            </div>
                            <div class="main-button">
                                <a href="" target="_blank">Watch Our Videos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="">
                        <div class="item">
                            <img src="{{ asset('home/assets/images/banner.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('home/assets/images/banner2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="categories-collections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2>Browse Through Book <em>Categories</em> Here.</h2>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-01.png') }}" alt="">
                                    </div>
                                    <h4>Motivational</h4>

                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-02.png') }}" alt="">
                                    </div>
                                    <h4>Money</h4>

                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-03.png') }}" alt="">
                                    </div>
                                    <h4>Psychological</h4>

                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-04.png') }}" alt="">
                                    </div>
                                    <h4>Story</h4>

                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-05.png') }}" alt="">
                                    </div>
                                    <h4>Fictional</h4>

                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="item">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/images/icon-06.png') }}" alt="">
                                    </div>
                                    <h4>Romance</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="currently-market">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2><em>Items</em> Currently In The Market.</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="filters">
                        <ul>
                            <li data-filter="*" class="active">All Books</li>
                            <li data-filter=".msc">Popular</li>
                            <li data-filter=".dig">Latest</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row grid">
                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                    <img src="{{ asset('home/assets/images/book1.webp') }}" alt=""
                                        style="border-radius: 20px; min-width: 195px;">
                                </div>
                                <div class="right-content">
                                    <h4>Sarah Maas</h4>
                                    <span class="author">
                                        <img src="{{ asset('home/assets/images/author.jpg') }}" alt=""
                                            style="max-width: 50px; border-radius: 50%;">
                                        <h6>Robert T Kiyosaki</h6>
                                    </span>
                                    <div class="line-dec"></div>
                                    <span class="bid">
                                        Current Available<br><strong>10</strong><br>
                                    </span>
                                    <span class="ends">
                                        Total<br><strong>20</strong><br>
                                    </span>
                                    <div class="text-button">
                                        <a href="details.html">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                    <img src="{{ asset('home/assets/images/book2.webp') }}" alt=""
                                        style="border-radius: 20px; min-width: 195px;">
                                </div>
                                <div class="right-content">
                                    <h4>Broken Blade</h4>
                                    <span class="author">
                                        <img src="{{ asset('home/assets/images/author.jpg') }}" alt=""
                                            style="max-width: 50px; border-radius: 50%;">
                                        <h6>Robert T Kiyosaki</h6>
                                    </span>
                                    <div class="line-dec"></div>
                                    <span class="bid">
                                        Current Available<br><strong>10</strong><br>
                                    </span>
                                    <span class="ends">
                                        Total<br><strong>20</strong><br>
                                    </span>
                                    <div class="text-button">
                                        <a href="details.html">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                    <img src="{{ asset('home/assets/images/book3.webp') }}" alt=""
                                        style="border-radius: 20px; min-width: 195px;">
                                </div>
                                <div class="right-content">
                                    <h4>Dwarves</h4>
                                    <span class="author">
                                        <img src="{{ asset('home/assets/images/author.jpg') }}" alt=""
                                            style="max-width: 50px; border-radius: 50%;">
                                        <h6>Robert T Kiyosaki</h6>
                                    </span>
                                    <div class="line-dec"></div>
                                    <span class="bid">
                                        Current Available<br><strong>10</strong><br>
                                    </span>
                                    <span class="ends">
                                        Total<br><strong>20</strong><br>
                                    </span>
                                    <div class="text-button">
                                        <a href="details.html">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-6 currently-market-item all msc">
                            <div class="item">
                                <div class="left-image">
                                    <img src="{{ asset('home/assets/images/book4.webp') }}" alt=""
                                        style="border-radius: 20px; min-width: 195px;">
                                </div>
                                <div class="right-content">
                                    <h4>Steven Erikson</h4>
                                    <span class="author">
                                        <img src="{{ asset('home/assets/images/author.jpg') }}" alt=""
                                            style="max-width: 50px; border-radius: 50%;">
                                        <h6>Robert T Kiyosaki</h6>
                                    </span>
                                    <div class="line-dec"></div>
                                    <span class="bid">
                                        Current Available<br><strong>10</strong><br>
                                    </span>
                                    <span class="ends">
                                        Total<br><strong>20</strong><br>
                                    </span>
                                    <div class="text-button">
                                        <a href="details.html">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection