@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="container-fluid">
                    <br>
                <h1 class="title">Add Course</h1>
                <p>Add New courses</p>

                <hr>
                {!! Form::open(['action' => 'CourseController@store', 'method'=>'POST']) !!}
                <div>
                        {{ Form::label('Department Name','Department Name')}}
                        <br>
                        {{ Form::select('dep_name', ['CS' => 'Computer Science', 'IS' => 'information System', 'NET' => 'Computer Engeeniring & Networks '],'',['class'=>'custom-select']) }}
                        

                </div>    
                
                <div>
                        {{ Form::label('course name','Course Name')}}
                        {{ Form::text('course_name','',['class'=>'form-control'])}}

                    </div>

                    <div>
                            {{ Form::label('course level','Course Level')}}
                            {{ Form::select('course_level',['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'],'',['class'=>'custom-select'])}}

                    </div>
                    <div>
                            {{ Form::label('course code','Course code')}}
                            {{ Form::text('course_code','',['class'=>'form-control form-control-lg'])}}

                    </div>
                    
                    <hr>
                    {{Form::submit('Add',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
                <br>
                <br>
            </div>
            </div>
        </div>
       
    </div>



        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Courses List</h4>
                            <p class="category">Here is a list of courses</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    
                                    <th>Name</th>
                                    
                                    <th>LEVEL</th>
                                    <th>CODE</th>
                                    <th>DEPARTMENT</th>
                                    <th>Edit</th>
                                </thead>
                                <tbody>
                                    @if (count($courses) >= 1)
                                        @foreach ($courses as $course)
                                        
                                        <tr>
                                                
                                                <td>{{$course->course_name}}</td>
                                                
                                                <td>{{$course->course_level}}</td>
                                                <td>{{$course->course_code}}</td>
                                                <td>{{$course->dep_name}}</td>
                                                <td > {!!Form::open(['action' => ['CourseController@destroy',$course->id],'method'=>'POST'])!!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    
                                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            
                                                    {!!Form::close()!!} </td>
                                        </tr>
                                        
                                        @endforeach
                                    @else 
                                        <p> Courses not Found  ! </p>
                                    @endif
                                    
                                    
                                    
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                


@endsection
