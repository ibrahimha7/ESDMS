@extends('layouts.super-bo')

@section('content')
    
<div class="container-fluid">
        <div class="row">
                <div class="col-md-4">
                        <div class="card">
                            
                            <div class="card-body">
                                <div>
                                    <a href="#">
                                        <img class="avatar border-gray" src="{{asset('img/faces/face-1.jpg')}}" style="width: 124px; height: 124px;">
                                        <h5 class="title"> {{ Auth::user()->name }} </h5>
                                    </a>
                                    <p class="description">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        <thead>
                                            
                                            <th>Name</th>
                                            <th>Balance</th>   
                                             
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>{{ Auth::user()->name }}</td>
                                                        <td>{{ Auth::user()->balance }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                        <thead>
                                                <th>Leave By</th>
                                            <th>Leave number</th>
                                            <th>Stuts</th>   
                                        <tbody>
                                                @if (count($leaves) >= 1)
                                                    
                                                @foreach ($leaves as $leave)
                                                @if ($leave->leave_by== Auth::user()->name)
                                                <tr>
                                                    <td>{{$leave->leave_by}}</td>
                                                        <td>{{$leave->id}}</td>
                                                        <td>{{$leave->status}}</td>
                                                </tr>
                                                @endif
                                                
                                        
                                        
                                        
                                                
                                                @endforeach
                                                @else 
                                                <p>There Are no Leave Avilable</p>
                                                
                                                @endif
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                            <div class="card">
                                    <div class="container-fluid">
                                    <hr>
                                    @if (count($leaves) <= 5)
                                    {!! Form::open(['action' => 'LeaveController@store', 'method'=>'POST']) !!}
                                        
                                    

                                    <input type="hidden" name="leave_by" value="{{ Auth::user()->name }}"> 
                                        
                                        {{Form::submit('Submit Leave Application',['class'=>'btn btn-danger btn-lg btn-block'])}}
                                    
                                    {!! Form::close() !!}
                                    <br>
                                    <br>
                                    @else 
                                    <br>
                                    <p>you cant added leave</p>
                                    @endif
                            </div>
                    </div>
                    </div>
        </div>
</div>
        
                            
@endsection
