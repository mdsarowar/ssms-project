@extends('admin.master')
@section('title')

@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Subject</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new_subject')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Teacher ID</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="teacher_id">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Code</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="code">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Fee</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="fee">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Short Description</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="short_description">
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="editor" cols="30" rows="4"></textarea>
                                </div>
                            </div>

{{--                            <div class="form-group row mt-3">--}}
{{--                                <label for="" class="col-md-4 col-form-label">Status</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <label for=""><input type="radio" name="status" value="0">Unpublished</label>--}}
{{--                                    <label for=""><input type="radio" name="status" value="1">Publishde</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
