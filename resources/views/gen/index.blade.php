@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="container-fluid">
                    <br>
                <h1 class="title">Genrate Exams Table</h1>
                <p>Genrate Exams Table</p>

                <hr>
                {!! Form::open(['action' => 'GenexamsController@store', 'method'=>'POST']) !!}
                    

                   
                   
                        
                                       
                    
                    
                        
                    
                
                {{Form::submit('Genrate',['class'=>'btn btn-primary btn-lg btn-block'])}}
                {!! Form::close() !!}
                <hr>
                
                
            </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="container-fluid">
                    <h3>Notes</h3>
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

