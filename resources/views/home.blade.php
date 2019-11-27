@extends('master')

@section('title','homepage')

@section('content')
      <div class="navbar-fixed">
      <nav class=" light-blue"> 
        <div class="container">
          <div class="nav-wrapper">
            <a class="brand-logo"><h2>Perfect Tutoring</h2></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
              <li>
                <a class="waves-effect waves-light btn" href="#top" >Home</a>
              </li>
              <li>
                <a class="waves-effect waves-light btn" href="#contact">Locations</a>
              </li>
               <li>
                <a class="waves-effect waves-light btn" href="#popular">Subjects</a>
              </li>
              <li>
                <a class="waves-effect waves-light btn" href="#contact">Forums</a>
              </li>
              <li>
               <a class="waves-effect waves-light btn " href="#contact">Contact</a>
              </li>
          </ul>
          </div>
        </div>
      </nav>
   </div>

  <section class="slider">
     <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://brocku.ca/learning-services/wp-content/uploads/sites/74/PS_3974web.jpg?x67218"> <!-- random image -->
        <div class="caption left-align">
          <h1 class="white-text text-lighten-1">We Offer Affordable services!</h1>
        </div>
      </li>
      <li>
        <img src="https://cpb-ca-c1.wpmucdn.com/www.rrc.ca/dist/3/66/files/2018/08/RRC-Supports-Tutoring-001-banner-Q8-102kbmr.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h1 class="white-text text-lighten-1">We help students succeed</h1>
        </div>
      </li>
      <li>
        <img src="https://cdn.uwec.edu/athena/images/6426/20150401_cob_tutors_0060-homepage.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h1 class="white-text text-lighten-1">Students from Grade 1 to Grade 12</h1>
        </div>
      </li>
    </ul>
  </div>
  </section>
  <section class="section section-icons grey lighten-4 center " >
    <div class="container">
      <div class="row">

        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large light-blue-text">room</i>
            <h4>Pick a center</h4>
            <p>Choose a location closest to you!  </p>
          </div> 

        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large light-blue-text">work</i>
            <h4>Book an appointment</h4>
            <p>Choose a location closest to you!  </p>
          </div> 
          
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large light-blue-text">assignment</i>
            <h4>Start learning</h4>
            <p>Choose a location closest to you!  </p>
          </div> 
          
        </div>
      </div>
    </div>
  </section>

  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
         <h1 class="center"><span class="light-blue-text">Subjects</span></h1>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://news.uaf.edu/wp-content/uploads/vfb/2019/11/math-chalkboard-500x333.jpg" alt="math">

            </div>
            <div class="card-content">
             Enrolling in the Perfect Tutoring Math Program will help build and advance your child's math skills, for an advantage in school and beyond.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="http://ichef.bbci.co.uk/images/ic/640x360/p03zh5tk.jpg" alt="math" height="250px">

            </div>
            <div class="card-content">
             Enrolling in the  Perfect Tutoring English Program will help build and advance your child's English skills, for an advantage in school and beyond.
            </div>
          </div>
        </div>
          <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://www.laarchaeology.org/wp-content/uploads/2017/11/science.jpg" height="250px" alt="math">

            </div>
            <div class="card-content">
             Enrolling in the  Perfect Tutoring Science Program will help build and advance your child's science skills, for an advantage in school and beyond.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <section class="section section-follow light-blue white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Perfect Tutoring</h4>
          <a href="#" class="fa fa-facebook">
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-google fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-instagram fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

<section id="contact" class="section section-contact scrollspy">
  <div class="container contact" >
    <div class="row">
      <div class="col s12 m6">
        <div class="card-panel light-blue white-text center">
          <i class="material-icons">email</i>
          <h4><b>Contact Us For An Appointment</b></h4>
        </div>
        <ul class="collection with-header">
          <li class="collection-header"> <h2>Head Quarters</h2> </li>
          <li class="collection-item"> <h4>Perfect Tutoring</h4> </li>
           <li class="collection-item"> <h4>99 Ryerson Court</h4> </li>
           <li class="collection-item"> <h4>647-666-(6666)</h4> </li>
        </ul>
      </div>
      <form method="post" action="/create">
      <div class="row">
        <div class="col s12 m6">
         <div class="card-panel light-blue white-text center">
         <i class="material-icons">question_answer</i>
           <h4><b>Ask Or Answer A Question </b></h4>
        </div>
        <div class="card-panel grey lighten-3">
         
            <div class="input-field">
              <input type="text" name="title"  placeholder="Name">
            </div>
              <div class="input-field">
                <input type="text" name="content"  placeholder="Question or Answer">
              </div>
                {{ csrf_field() }}
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
                </button>
        </div>
      </div>
      </div>
      </form>
    </div>
    
  </div>
</section>


   <div class="container">
        <div class="fixed-action-btn" >
          <a href="#" class="btn-floating red btn-large"><i class="large material-icons">home</i></a>
          <ul>
            <li><a href="#" class="btn-floating blue btn-large"><i class="large material-icons">file_download</i></a></li>
    
            <li> <a href="#" class="btn-floating red btn-large"><i class="large material-icons">thumbs_up_down</i></a></li>
            <li><a href="#" class="btn-floating yellow btn-large"><i class="large material-icons">library_books</i></a></li>
            <li><a href="#" class="btn-floating green btn-large"><i class="large material-icons">group_work</i></a></li>
            <li><a href="#" class="btn-floating blue btn-large"><i class="large material-icons">bookmark</i></a></li>
          </ul>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script >
  const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

</script>




      

<h1 class="center"><span class="light-blue-text">Recent Messages</span></h1>
<div>
<ul>
        @foreach($messages as $message)
            <li>
                <h6 class="center">{{ $message->created_at->diffForHumans() }}<h6>
                <strong><h4 class="center">{{ $message->title}}</h4></strong>
                <h4 class="center">{{ $message->content }}</h4>
                
                
                <hr>
            </li>

        @endforeach

</ul>
<div>

@endsection

