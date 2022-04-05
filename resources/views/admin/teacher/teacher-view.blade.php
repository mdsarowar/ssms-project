@extends('admin.master')
@section('title')
 teacher view
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage teacher</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teacher Name</th>
                                    <th>Teacher Email</th>
                                    <th>Teacher Phone</th>
                                    <th>Teacher Code</th>
                                    <th>Teacher image</th>
                                    <th>Teacher Address</th>
                                    <th>Teacher Description</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$teacher->teacher_name}}</td>
                                        <td>{{$teacher->teacher_email}}</td>
                                        <td>{{$teacher->teacher_phone}}</td>
                                        <td>{{$teacher->code}}</td>
                                        <td>
                                            <img src="{{asset($teacher->teacher_image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$teacher->teacher_address}}</td>
                                        <td>{!! $teacher->description !!}</td>
                                        <td>{{$teacher->status}}</td>

                                        <td>
                                            <a href="{{route('teacher_edit',['id'=>$teacher->id])}}" class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{route('change_teacher_status',['id'=>$teacher->id])}} " class="btn btn-{{$teacher->status ==0 ? 'primary':'secondary'}}">
                                                <i class="fa-solid fa-arrow-{{$teacher->status==0?'down':'up'}}"></i>
                                            </a>
                                            <a href="{{route('teacher_delete',['id'=>$teacher->id])}}" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
