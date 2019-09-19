@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-12">

                <div class="col-md-6">
                        <div class="card">
                            <div class="container-fluid">
                                <br>
                            <h1 class="title">Create Group</h1>
                            <p>Create New Group</p>
        
                            <hr>
        
                            <hr>
                        {!! Form::open(['action' => 'StudenttController@store', 'method'=>'POST']) !!}
                            

                            <div>
                                    {{ Form::label('Group Number','Group Number')}}
                                    {{ Form::Number('group_no','',['class'=>'form-control'])}}

                            </div>
                            
                            <hr>
                            {{Form::submit('Add',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                        <br>
                        <br>

                            </div>
                        </div>
                </div>
           
            <div class="col-md-12">
                <div class="card">
                    <div class="container-fluid">
                        <br>
                    <h1 class="title">Create Group</h1>
                    <p>Create New Group</p>

                    <hr>

                    <table class="table table-hover table-striped">
                        <thead>
                                <th>Group Number</th>
                            
                                <th>Edit</th>
                            
                            
                            
                        </thead>
                        <tbody>
                            
                                @if (count($groups) >= 1)
                                @foreach ($groups as $group)
                                <tr>
                                        <td>{{$group->group_no}}</td>
                                        <td > {!!Form::open(['action' => ['StudenttController@destroy',$group->id],'method'=>'POST'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        
                                                {!!Form::close()!!} </td>
                                        
                                </tr>
                                @endforeach
                            @else 
                                <p> Groups not Found  ! </p>
                            @endif
                            
                           
                        </tbody>
                    </table>
                    <hr>

                    <a href="/course/courses/new">
                    <button type="submit" class="btn btn-primary btn-lg">Create</button>
                    </a>
                    <br>
                    <br>
                </div>
                </div>
            </div>
        
    </div>



        
        

@endsection
