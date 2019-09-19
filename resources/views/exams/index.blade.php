@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="container-fluid">
                    <br>
                <h1 class="title">Add Exams</h1>
                <p>Add New Exams</p>

                <hr>
                {!! Form::open(['action' => 'ExamsController@store', 'method'=>'POST']) !!}
                    

                    
                    
                    <div>
                            {{ Form::label('Exam Date','Exam Date')}}
                            {{ Form::Date('exam_date','',['class'=>'form-control'])}}

                    </div>
                    <div>
                            {{ Form::label('Exam Start Time At','Exam Start Time At')}}
                            {{ Form::select('exam_start_at', ['08:00:00' => '8:00 AM', '10:30:00' => '10:30 AM'],'',['class'=>'custom-select']) }}

                    </div>
                    
                    <div>
                            {{ Form::label('Exam Group','Exam Exam Group')}}
                            
                            
                                
                            <select name="exmam_group" id="" class="custom-select">
                                    @if (count($groups) >= 1)
                                    @foreach ($groups as $group)
                            <option value="{{$group->group_no}}">{{$group->group_no}}</option>
                                    @endforeach
                            @else 
                                <p> Group not Found  ! </p>
                            @endif
                            </select>
                            

                    </div>

                    <div>
                            {{ Form::label('Exam Course','Exam Course')}}
                            
                            
                                
                            <select name="exam_course" id="" class="custom-select">
                                    @if (count($courses) >= 1)
                                    @foreach ($courses as $course)
                            <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                                    @endforeach
                            @else 
                                <p> Course not Found  ! </p>
                            @endif
                            </select>
                            

                    </div>
                    <div>
                            {{ Form::label('Exam Room','Exam Room')}}
                            
                            
                                
                            <select name="exam_room" id="" class="custom-select">
                                    @if (count($rooms) >= 1)
                                    @foreach ($rooms as $room)
                            <option value="{{$room->room_no}}">{{$room->room_no}}</option>
                                    @endforeach
                            @else 
                            <option >There Are no Room Avilable</option>
                            @endif
                            </select>
                            

                    </div>
                    <div>
                            {{ Form::label('Exam Supervisor Name','Exam Supervisor Name')}}
                            
                            
                                
                            <select name="exam_super_name" id="" class="custom-select">
                                    @if (count($supervisors) >= 1)
                                    @foreach ($supervisors as $supervisor)
                            <option value="{{ $supervisor->name}}">{{ $supervisor->name}}</option>
                                    @endforeach
                            @else 
                                <p> Rooms not Found  ! </p>
                            @endif
                            </select>
                            

                    </div>
                    
                    
                   
                        
                                       
                    
                    
                        
                    
                <br>
                <br>
                {{Form::submit('Add',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
                <hr>
                
                
            </div>
            </div>
        </div>
        
    </div>



        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Exams Table</h4>
                            <p class="category">Here is a list of exams</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Course Name</th>
                                    <th>Group</th>
                                    
                                    <th>Day Name</th>
                                    <th>Day Number</th>
                                    <th>Day Date</th>
                                    <th>Starts At</th>
                                    <th>Ends At</th>

                                    <th>Room Number</th>
                                    <th>Supervisor Name</th>

                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                    
                                </thead>
                                <tbody>
                                    
                                        @if (count($exams) >= 1)
                                        @foreach ($exams as $exam)
                                        <tr>
                                                <td>{{$exam->id}}</td>
                                                <td > {{$exam->exam_course}} </td>
                                                <td > {{$exam->exmam_group}}</td>
                                                <td > {{$exam->day_name}} </td>
                                                <td > {{$exam->day_no}} </td>
                                                <td > {{$exam->exam_date}} </td>

                                                <td > {{$exam->exam_start_at}}  </td>
                                                <td > {{$exam->exam_end_at}}  </td>
                                                <td > {{$exam->exam_room}}</td>
                                                <td > {{$exam->exam_super_name}}</td>
                                                <td> <button class="btn btn-secoundry"> Edit </button> </td>
                                                        <td > 
                                                                {!!Form::open(['action' => ['ExamsController@destroy',$exam->id],'method'=>'POST'])!!}
                                                                {{Form::hidden('_method','DELETE')}}
                                                                
                                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                                        
                                                                {!!Form::close()!!}
                                                             </td>
                                                
                                                
                                                
                                        </tr>
                                        @endforeach
                                    @else 
                                        <p> No Exams are Secudle </p>
                                    @endif
                                    
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                


@endsection
