@extends('admin.master')
@section('title')
Add Teacher
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Teacher</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new_teacher',['id'=>isset($teacher)? $teacher->id:Auth::user()->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_name" value="{{isset($teacher)? $teacher->teacher_name:Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="teacher_email" value="{{isset($teacher)? $teacher->teacher_email:Auth::user()->email}}">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_phone" value="{{isset($teacher) ? $teacher->phone:''}}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Code</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="teacher_code">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="teacher_image">
                                    @if(isset($teacher))
                                        <img src="{{isset($teacher)? asset($teacher->teacher_image): ''}}"></img>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_address" value="{{isset($teacher) ? $teacher->teacher_address:''}}">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" cols="30" rows="4">{{isset($teacher)? $teacher->description:''}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="0">Unpublished</label>
                                    <label for=""><input type="radio" name="status" value="1">Publishde</label>
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
