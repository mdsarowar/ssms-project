@extends('admin.master')
@section('title')
Edit Enroll
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>edit Enroll</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update_enroll',['id'=>$enroll->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Payment Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio"  name="payment_status" {{$enroll->payment_status== 1 ? 'checked':''}} value="1">Completed</label>
                                    <label for=""><input type="radio"  name="payment_status" {{$enroll->payment_status== 0 ? 'checked':''}} value="0">Pending</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Enroll Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio"  name="enroll_status" {{$enroll->enroll_status== 1 ? 'checked':''}} value="1">selected</label>
                                    <label for=""><input type="radio"  name="enroll_status"{{$enroll->enroll_status== 0 ? 'checked':''}} value="0">Waiting</label>

                                </div>
                            </div>


                            <div class="form-group row mt-3">
                                <div class="d-grid">
                                    <input type="submit" class="btn col-12 btn-success " value="Update Enroll Info" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

