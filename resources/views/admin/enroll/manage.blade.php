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
                                    <th> Subject title</th>
                                    <th> Student Name</th>
                                    <th> Enroll Date</th>
                                    <th> Payment Status</th>
                                    <th> Enroll Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrolls as $enroll)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$enroll->subject->title}}</td>
                                        <td>{{$enroll->user->name}}</td>
                                        <td>{{$enroll->enroll_date}}</td>
                                        <td>{{$enroll->payment_status ==1 ? 'selected':'Waiting'}}</td>
                                        <td>{{$enroll->enroll_status==1 ? 'selected':'Waiting'}}</td>

                                        <td>
                                            {{--                                            <a href="{{route('edit_student_info',['id'=>$student->id])}}" class="btn btn-info btn-sm">--}}
                                            {{--                                                <i class="fa-solid fa-pen-to-square"></i>--}}
                                            {{--                                            </a>--}}
                                            <a href="{{route('edit_enroll_status',['id'=>$enroll->id])}} " class="btn btn-{{$enroll->status ==0 ? 'primary':'secondary'}}">
                                                <i class="fa-solid fa-arrow-{{$enroll->status==0?'down':'up'}}"></i>
                                            </a>
                                            <a href="{{route('delete_enroll',['id'=>$enroll->id])}}" onclick="return confirm('are you sure to delet the course?')" class="btn btn-danger">
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
