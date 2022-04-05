@extends('front.master')
@section('title')
 Home page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1 class="text-center">All course</h1>
                </div>
                <div class="row mt-4">
                    @foreach($subjects as $subject)
                    <div class="col-md-4">
                        <a href="{{route('subject_details',['id'=>$subject->id])}}" class="nav-link">
                            <div class="card">
                                <img src="{{asset($subject->image)}}" class="card-img-top" style="height: 250px" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-dark" style="font-size: 20px"> {{$subject->title}}</h4>
                                    <p style="text-align:justify;font-size: 16px " class="text-dark">{{substr_replace($subject->short_description,'...',100)}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
