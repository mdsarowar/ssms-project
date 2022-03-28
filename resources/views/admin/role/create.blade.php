@extends('admin.master')
@section('title')

@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Role</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('new_role')}}" method="post">
                            @csrf

                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Role Display Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="display_name">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Role Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name">
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
