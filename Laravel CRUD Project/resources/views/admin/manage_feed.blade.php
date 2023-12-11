<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/css/font-awesome.css')}}" " rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{url('admin/css/basic.css')}}" " rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{url('admin/css/custom.css')}}" " rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
@extends('admin.layout.structure')

@section('main_content')


                <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Feedback</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
             
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                            Feedback
                            </div>
                        <div class="panel-body">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Feedback id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($data_feedback))
									{
										foreach($data_feedback as $d)
										{
									?>
                                        <tr >
                                            <td><?php echo $d->feed_id?></td>
											<td><?php echo $d->name?></td>
											<td><?php echo $d->email?></td>
											<td><?php echo $d->message?></td>
											<td>
                                                <a href="delete?delfeed_id=<?php echo $d->feed_id;?>" class="btn btn-danger me-1">Delete</a>
                                                <a href="" class="btn btn-primary me-1">edit</a>
                                            </td>
                                        </tr>
                                    <?php
										}
									}
									?>    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
							
                            </div>
                        </div>
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
