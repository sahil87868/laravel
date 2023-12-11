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
  <link rel="shortcut icon" href="{{url('website/images/fevicon.png')}}" type="">

  <title> Carint </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('website/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{url('website/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />

  <!-- font awesome style -->
  <link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{url('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{url('website/css/responsive.css')}}" rel="stylesheet" />

</head>
@extends('website.layout.structure')

@section('main_content')
<body>
	 
 
  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                 <span>
                  NAME:{{$data->name}}
                  </br>
                  EMAIL:{{$data->email}}

                 </span>
              </h2>
            </div>
            <p>GENDER:{{$data->gender}}</p>
            <p>LANGUAGES:{{$data->languages}}</p>
            <p>CONTACT:{{$data->contact}}</p>
            <a href="{{url('profile/'.$data->id)}}">
              View profile
            </a>
          </div>
        </div>
        
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{url('upload/customer'.$data->file)}}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  
@endsection
  <!-- end info section -->

  <!-- footer section -->
  
</body>
 

</html>