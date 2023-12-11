<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/css/bootstrap.css')}}"rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/css/font-awesome.css')}}"rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{url('admin/css/basic.css')}}"rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('admin/css/custom.css')}}"rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
@extends('admin.layout.structure')

@section('main_content')


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th>email</th>

                                            <th>password</th>
                                            <th>gender</th>
                                            <th>languages</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        @if(!empty($data_customer))
                                            @foreach ($data_customer as $d) 
                                                 <tr>
                                            <td><img src="{{url('/upload/customer/'.$d->file)}}" width="50px"></td>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>

                                            <td>{{$d->password}}</td>
                                            <td> {{$d->gender}}</td>
                                            <td>{{$d->languages}}</td>

											<td><a href=""class="btn btn-danger me-1"></a>

												<a href="{{url('/manage_cust/'.$d->id)}}"class="btn btn-danger me-1">Delete</a>
												<a href="" class="btn btn-primary me-1">Edit</a>
											</td>
                                        </tr>
                                       @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
          
            </div>
      
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection

</body>
</html>
