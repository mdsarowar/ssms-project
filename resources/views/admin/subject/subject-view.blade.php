@extends('admin.master')
@section('title')
    Subject view
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1>subject teacher</h1>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teacher Name</th>
                                    <th>Title</th>
                                    <th>Code</th>
                                    <th>Fee</th>
                                    <th>image</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subjects as $subject)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{\App\Models\User::find($subject->teacher_id)->teacher_name}}</td>
                                        <td>{{$subject->title}}</td>
                                        <td>{{$subject->code}}</td>
                                        <td>{{$subject->fee}}</td>
                                        <td>
                                            <img src="{{asset($subject->image)}}" style="height: 100px;width: 100px" alt="">
                                        </td>
                                        <td>{{$subject->short_description}}</td>
                                        <td>{!! substr_replace($subject->long_description,'...',160)!!}</td>
                                        <td>{{$subject->status==1? 'published':'unpublished'}}</td>

                                        <td>
                                            <a href="{{route('subject_edit',['id'=>$subject->id])}}" class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{route('change_subject_status',['id'=>$subject->id])}} " class="btn btn-{{$subject->status ==0 ? 'primary':'secondary'}}">
                                                <i class="fa-solid fa-arrow-{{$subject->status==0?'down':'up'}}"></i>
                                            </a>
                                            <a href="{{route('subject_delete',['id'=>$subject->id])}}" onclick="return confirm('Are you sure to delete this');" class="btn btn-danger">
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
