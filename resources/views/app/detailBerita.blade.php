@extends('template.app')

@section('content')
    @if (isset($news))
        <div class="site-blocks-cover overlay"
            style="background: rgb(92,135,165);
background: linear-gradient(90deg, rgba(92,135,165,1) 0%, rgba(92,153,196,1) 60%, rgba(0,148,255,1) 100%);"
            data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
            <div class="container" >
                <div class="row align-items-center justify-content-center" >
                    <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400" style="margin-bottom:100px">
                        <p>{{ date('d F Y', strtotime($news->date)) }}</p>
                        <h1 class="mb-4 ">{{ $news->title }}</h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="featured-property-half-detail d-flex" style="margin-top: -250px">
                <div class="image" style="background-image: url('{{ asset($news->picture) }}'); object-fit:cover;" ></div>

            </div>
        </div>
        </div>

        <div class="site-section">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="site-section-heading m-3 w-border col-md-10 mx-auto">
                        <h2 class="mb-5 align-self-center">DETAIL BERITA</h2>
                        <p>
                            {!! $news->detail !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <center><h2>BERITA TIDAK ADA</h2></center>
    @endif
@endsection
