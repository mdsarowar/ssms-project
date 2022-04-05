@extends('front.master')
@section('title')
    {{$subject->title}}
@endsection
@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset($subject->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <h1>{{$subject->title}}</h1>
                <p style="text-align:justify ">{{$subject->short_description}}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                {!! $subject->long_description !!}

            </div>
            <div class="col-md-4">
                <div class="d-grid">
                    <a href="" class="btn btn-success">Enroll</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
