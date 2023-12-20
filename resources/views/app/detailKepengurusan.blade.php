@extends('template.app')

@section('content')
    <style>
        .hover-effect:hover {
            transform: scale(1.015);
        }

        .hover-effect {
            transition: 0.3s;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>

    <div class="site-blocks-cover overlay"
        style="background: rgb(92,135,165);
        background: linear-gradient(90deg, rgba(92,135,165,1) 0%, rgba(92,153,196,1) 60%, rgba(0,148,255,1) 100%);"
        data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">

                    <h1>{{$management->divisi}} - {{$management->year}}</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section" style="padding-bottom: 0">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="site-section-heading m-3 w-border col-md-10 mx-auto">
                    <h2 class="mb-5 align-self-center">Program Kerja</h2>

                    @php
                        $count = 0;
                    @endphp

                    @foreach ($programs as $program)
                        {{-- <div class="d-flex align-items-center rounded p-3 mb-4 hover-effect">
                            <div class="pr-3">&#129066;</div>
                            <div>
                                {{ $program->title }}
                            </div>
                        </div> --}}

                        <div id="accordion">
                            <div class="card mb-3 shadow">
                                <div class="card-header" id="headingOne">
                                    <h3 class="mb-0 text-dark">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-{{ $count }}" aria-expanded="true" aria-controls="collapse-{{ $count }}">
                                            {{ $program->title }}
                                        </button>
                                    </h3>
                                </div>

                                <div id="collapse-{{ $count }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        {!! $program->detail !!}
                                    </div>
                                </div>
                            </div>
                            @php
                                $count++;
                            @endphp
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
