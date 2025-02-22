@extends('frontend.master.master')

@section('title')
    Rajanya Travel
@endsection


@section('content')

  <!-- Header -->
  <header class="text-center">
    <h1>Explore The Beautiful World <br>
        As Easy One Click </h1>
    <p class="mt-3">You will see beautiful <br>
        moment you never see before</p>

        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Anggota</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Negara</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3k</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>80</h2>
                <p>Partner</p>
            </div>
        </section>
    </div>

    <section class="section-populer" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-populer-heading">
                    <h2>Wisata Populer</h2>
                    <p>Something that you never try <br>
                        before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-populer-content" id="content-populer">
        <div class="container">
            <div class="section-populer-travel row justify-content-center">

                @foreach ($travel as $row)
                    
                
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $row->galleries->count() ? 'storage/'.$row->galleries->first()->image : '' }}');">
                        <div class="travel-country">
                            {{ $row->location }}
                            
                        </div>
                        <div class="travel-location">
                            {{ $row->title }}
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $row->slug) }}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>

    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>Companies are trusted us <br>
                        more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/logos_partner.png" class="img-partner" alt="logo-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonial-heading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them <br>
                        the best experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonial-content">
        <div class="container">
            <div class="section-populer-travel">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                               <img src="frontend/images/user_pic.jpg" alt="User" class="mb-4 rounded-circle">

                               <h3 class="mb-4">Hadiid Fajar</h3>
                               <p class="testimonial">“ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “</p>

                            </div>

                            <hr>

                            <p class="trip-to mt-2">Trip To Malino</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                               <img src="{{ asset('frontend/images/user_pic.jpg') }}" alt="User" class="mb-4 rounded-circle">

                               <h3 class="mb-4">Hadiid Fajar</h3>
                               <p class="testimonial">“ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “</p>

                            </div>

                            <hr>

                            <p class="trip-to mt-2">Trip To Malino</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                               <img src="{{ asset('frontend/images/user_pic.jpg') }}" alt="User" class="mb-4 rounded-circle">

                               <h3 class="mb-4">Hadiid Fajar</h3>
                               <p class="testimonial">“ It was glorious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee “</p>

                            </div>

                            <hr>

                            <p class="trip-to mt-2">Trip To Malino</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>

                    <a href="{{ route('register') }}" class="btn btn-started px-4 mt-4 mx-1">I Get Started</a>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection