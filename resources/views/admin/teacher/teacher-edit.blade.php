@extends('admin.master')
@section('title')

@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Role</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update_teacher')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_name" value="{{$teacher->teacher_name}}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="teacher_email" value="{{$teacher->teacher_email}}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_phone" value="{{$teacher->teacher_phone}}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Code</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="teacher_code" value="{{$teacher->teacher_code}}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="teacher_image">
                                    <img src="{{asset($teacher->teacher_image)}}" alt="">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_address" value="{{$teacher->teacher_address}}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" cols="30" rows="4">{!! $teacher->description !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" {{$teacher->status==0 ? 'checked':''}} value="0">Unpublished</label>
                                    <label for=""><input type="radio" name="status" {{$teacher->status==1 ? 'checked':''}}  value="1">Publishde</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="d-grid">
                                    <input type="submit" class="btn col-12 btn-success " value="Create" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
