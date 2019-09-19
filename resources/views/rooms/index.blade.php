@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="container-fluid">
                    <br>
                <h1 class="title">Add Room</h1>
                <p>Add New Room</p>

                <hr>
                {!! Form::open(['action' => 'RoomsController@store', 'method'=>'POST']) !!}
                    

                    <div>
                            {{ Form::label('Rooms Number','Rooms Number')}}
                            {{ Form::Number('room_no','',['class'=>'form-control'])}}

                    </div>
                    
                    <hr>
                    {{Form::submit('Add',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
                <br>
                <br>
            </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Room List</h4>
                    <p class="category">Here is a list of Rooms</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th> ROOM Number</th>
                            
                            <th>Edit</th>
                            
                            
                        </thead>
                        <tbody>
                            
                                @if (count($rooms) >= 1)
                                @foreach ($rooms as $room)
                                <tr>
                                        <td>{{$room->room_no}}</td>
                                        <td > 
                                                {!!Form::open(['action' => ['RoomsController@destroy',$room->id],'method'=>'POST'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        
                                                {!!Form::close()!!}
                                             </td>
                                        
                                </tr>
                                @endforeach
                            @else 
                                <p> Rooms not Found  ! </p>
                            @endif
                            
                           
                        </tbody>
                    </table>

                </div>
        
    </div>



        
            
                


@endsection
