@extends('layouts.admin-bo')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="container-fluid">
                    <br>
                <h1 class="title">Add Lecturer</h1>
                <p>Add New Lecturer</p>

                <hr>
                <a href="/course/courses/new">
                <button type="submit" class="btn btn-primary btn-lg">ADD</button>
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
                <h1 class="title">Lecturers Updates</h1>
                <p>Lecturers Leave Applaication updates</p>

                <hr>
                <table class="table table-hover table-striped">
                    <thead>
                        <th>application id</th>
                        <th>Lecturer Name</th>
                        <th>Leave Type</th>
                        <th>Reasons</th>
                        <th>Stuts</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ali</td>
                            <td>Quittiiiiiiing</td>
                            <td>Not having fun</td>
                            <td class="btn btn-success">Accept</td>
                            <td class="btn btn-danger">rejects</td>
                        </tr>
                    </tbody>
                </table>
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
                            <h4 class="title">Lecturer List</h4>
                            <p class="category">Here is a list of supervisor</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>DEPARTMENT</th>
                                    
                                    <th>Edit</th>
                                    
                                    
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                            <td>1</td>
                                            <td>Ibrahiha</td>
                                            <td>Computer Sience</td>
                                            
                                            <td class="btn btn-info" >Edit</td>
                                            <td class="btn btn-danger">Delete</td>
                                            
                                    </tr>
                                    
                                   
                                </tbody>
                            </table>

                        </div>
                    </div>
                


@endsection
