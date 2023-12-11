<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medion</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('website/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{url('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('website/css/responsive.css')}}" rel="stylesheet" />
</head>


@extends('website.layout.structure')

@section('main_content')
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>
    <div class="col-md-12">
    
    <form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
@csrf
      <div class="p-3 p-lg-5 border">
        <div class="form-group row">
          <div class="col-md-6">
            <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control"  name="name">
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="contact" class="text-black">contact <span class="text-danger">*</span></label>
            <input type="number" class="form-control" name="contact">
            @error('contact')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </div>
            <div class="form-group row">
          <div class="col-md-6">
            <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control"  name="email">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control"name="password">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
        </div>
            <div class="form-group row">
          <div class="col-md-6">
            <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" >Male
                   <label class="form-check-label" for="radio1"></label>
                 </div>
                 <div class="form-check">
                   <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female">Female
                   <label class="form-check-label" for="radio1"></label>
                 </div>
          </div>
          <div class="col-md-6">
            <label for="Mobile" class="text-black">Languages<span class="text-danger">*</span></label>
            <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="radio1" name="languages[]" value="Hindi" >Hindi
                   <label class="form-check-label" for="radio1"></label>
                 </div>
                  <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="radio1" name="languages[]" value="English" >English
                   <label class="form-check-label" for="radio1"></label>
                 </div>
                  <div class="form-check">
                   <input type="checkbox" class="form-check-input" id="radio1" name="languages[]" value="Gujarati" >Gujarati
                   <label class="form-check-label" for="radio1"></label>
                 </div>
          </div>
              
              <div class="col-md-6">
                 <label for="Email" class="text-black">Select Country <span class="text-danger">*</span></label>
                 <select class="form-control" id="c_fname" name="cid">
                      <option>Select Country</option>
                      @if(!empty($country))
                    @foreach($country as $c)     
                    <option value="{{$c->id}}">{{$c->cname}}</option>
                    @error('cid')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
              @endforeach
              @endif
                 </select>
              </div>
              <div class="col-md-6">
                 <input type="file" class="form-control" id="c_lname" name="file">
                 @error('file')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
              </div>
                 
        </div>
      
        <div class="form-group row">
          <div class="col-lg-12">
            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Signup">
          </div>
               <div class="col-lg-12">
            <a href="login" name="submit" > Allreday Register then login Here</a>
          </div> 
        </div>
      </div>
    </form>
  </div>
  
  </section>
  @endsection
  <!-- end contact section -->

  
</body>


</html>
