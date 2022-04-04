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
                        <form action="{{route('new_teacher')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_name">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="teacher_email">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_phone">
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
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_address">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" cols="30" rows="4"></textarea>
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
