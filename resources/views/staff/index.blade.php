@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container-fluid">
                        <br>
                    <h1 class="title">Manage Lecturers</h1>
                    <p>Add new Staff members And Edit thier information</p>
                    <div class="col-md-12">
                            <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                            
                            <th>Lecturer Name</th>
                            <th>Lecturer Email</th>
                            <th>Balance</th>
                            
                            <th>Delete</th>
                            <th>Change Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                                @foreach($supervisors as $supervisor)
                                <tr>
                                
                                <td>{{ $supervisor->name }} </td>
                                <td>{{ $supervisor->email }}</td>
                                <td>{{ $supervisor->balance }}</td>
                                <td><a class="btn btn-dange" href="{{ route('admin.supervisor.delete', ['id' => $supervisor->id]) }}" style="color: #dc3545">delete</a></td>
                                <td>
                                                                    
                                        {!! Form::open(['action' => ['StaffController@update',$supervisor->id], 'method'=>'POST']) !!}
                                        
                                        {{form::hidden('_method','PUT')}}
                                        {{Form::submit('-1',['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                        
                                </td>
                                
                                </tr>
                                @endforeach
                        
                        </tbody>
                    </table>
                    
                    </div>
                            
                    </div>
                    <table class="table table-hover table-striped">
                            <thead>
                                <th>Leave Application By</th> 
                                
                                <th>Stuts</th> 
                                <th>Accept</th>
                                <th>Reject</th>
                                <th>DELETE</th>
                                
                                  
                                 
                            </thead>
                            <tbody>
                                    @if (count($leaves) >= 1)
                                    @foreach ($leaves as $leave)
                                    
                                    <tr>
                                            <td>{{$leave->leave_by}}</td>
                                            
                                            <td>{{$leave->status}}</td>
                                            <td>
                                                    
                                                    
                                                    {!! Form::open(['action' => ['LeaveController@update',$leave->id], 'method'=>'POST']) !!}
                                                    <input type="hidden" name="status" value="Accepted">
                                                    
                                                    {{form::hidden('_method','PUT')}}
                                                           
                                                    {{Form::submit('Accept',['class'=>'btn btn-success'])}}

                                                    {!! Form::close() !!}
                                                    
                                                    
                                                        
                                                        
                                                    
                                                </td>
                                            <td>{!! Form::open(['action' => ['LeaveController@update',$leave->id], 'method'=>'POST']) !!}
                                                    <input type="hidden" name="status" value="Rejected">
                                                    {{form::hidden('_method','PUT')}}
                                                    {{Form::submit('Rejected',['class'=>'btn btn-danger'])}}
                                                    {!! Form::close() !!}</td>

                                                    <td > {!!Form::open(['action' => ['LeaveController@destroy',$leave->id],'method'=>'POST'])!!}
                                                        {{Form::hidden('_method','DELETE')}}
                                                        
                                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                                
                                                        {!!Form::close()!!} </td>
                                            

                                                    
                                                    
                                    </tr>
                                    
                                    @endforeach
                                    @else 
                                    <p>There Are no Leave Avilable</p>
                                    
                                    @endif
                            </tbody>
                      
                        </table>
                    <hr>
                   
            </div>
        </div>
        <div class="col-md-8">
                <div class="card">
                        <div class="content table-responsive table-full-width">
                            


                                <div class="col-md-8">
                                        <h1 class="title">Add Lecturer</h1>
                                        <p>Add new Lecturer</p>
                                        <div class="container-fluid">
                                            <form action="{{ route('admin.supervisor.add') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <input type="text" name="supervisor" class="form-control" value="{{ old('supervisor') }}" placeholder="Lecturer name..." required>
                                                        @if($errors->has('supervisor'))
                                                            <code>{{ $errors->first('supervisor') }}</code>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Lecturer email..." required>
                                                        @if($errors->has('email'))
                                                            <code>{{ $errors->first('email') }}</code>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="password" class="form-control" value="{{ old('password') }}" placeholder="Lecturer password..." required>
                                                        @if($errors->has('password'))
                                                            <code>{{ $errors->first('password') }}</code>
                                                        @endif
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Add Lecturer</button>
                                                </form>
                                            </div>
                                            </div>
                                            <hr>
                        </div>
                    </div>
        </div>
        
    </div>



        
        
                


@endsection
