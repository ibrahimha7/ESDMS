@extends('layouts.admin-bo')

@section('content')
    


<div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="container-fluid">
                        <br>
                    <h1 class="title">Manage Courses</h1>
                    <p>Add Courses And Set Timing</p>

                    <hr>
                    <a href="/course">
                    <button type="submit" class="btn btn-primary btn-lg">Manage</button>
                    </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card">
                    <div class="container-fluid">
                            <br>
                        <h1 class="title">Manage Group</h1>
                        <p>Add new Group of Student And Edit</p>
    
                        <hr>
                        <a href="/studentt">
                        <button type="submit" class="btn btn-primary btn-lg">Manage</button>
                        </a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
</div>

<div class="row">
        


</div>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container-fluid">
                        <br>
                    <h1 class="title">Manage Staff</h1>
                    <p>Add new Staff members And Edit thier information</p>
                    
                                <hr>
                    <a href="/staff">
                    <button type="submit" class="btn btn-primary btn-lg">Manage</button>
                    </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
</div>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container-fluid">
                        <br>
                    <h1 class="title">Manage Classrooms</h1>
                    <p>Add new room And Set Timing and group</p>

                    <hr>
                    <a href="/rooms">
                    <button type="submit" class="btn btn-primary btn-lg">Manage</button>
                    </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
</div>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="container-fluid">
                        <br>
                    <h1 class="title">Exams Schedule</h1>
                    <p>create exam time and set up the rooms and Student group</p>

                    <hr>
                    <a href="/exams">
                    <button type="submit" class="btn btn-primary btn-lg">Manage</button>
                    </a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
</div>
        

@endsection
