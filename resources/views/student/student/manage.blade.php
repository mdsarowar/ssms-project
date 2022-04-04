@extends('admin.master')
@section('title')
    student view
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>Manage student</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Name</th>
                                    <th> Email</th>
                                    <th> Phone</th>
                                    <th> image</th>
                                    <th> Address</th>
                                    <th> Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>

                                        <td>
                                            <img src="{{asset($student->image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->status}}</td>

                                        <td>
{{--                                            <a href="{{route('edit_student_info',['id'=>$student->id])}}" class="btn btn-info btn-sm">--}}
{{--                                                <i class="fa-solid fa-pen-to-square"></i>--}}
{{--                                            </a>--}}
                                            <a href="{{route('change_student_status',['id'=>$student->id])}} " class="btn btn-{{$student->status ==0 ? 'primary':'secondary'}}">
                                                <i class="fa-solid fa-arrow-{{$student->status==0?'down':'up'}}"></i>
                                            </a>
                                            <a href="{{route('delete_student_info',['id'=>$student->id])}}" class="btn btn-danger">
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
