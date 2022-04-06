@extends('front.master')
@section('title')
   User login
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card m-t-100">
                        <div class="card-header">
                            <h2 class="text-center">User Login</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user-login')}}" method="post">
                                @csrf

                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success " value="Login" >
                                    </div>
                                </div>
                            </form>
                            <div class="mt-3">
                                <p>Have an account? <a href="{{route('user-register')}}">register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
