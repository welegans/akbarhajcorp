@extends('layout.app')

@section('main-content')
<style type="text/css">
  .carousel-caption{
    color: #ffffff;
    text-align: left;
    font-size: 2em;
    margin-bottom: 20vh;
  }
  .overlay{
    background-color: rgba(0,0,0,0.6); /* Black background with opacity */
    z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
    cursor: pointer; /* Add a pointer on hover */
    padding: 0.2em;
  }
</style>
  <div class="home">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
        <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="{{asset('imgs/im16.jpg')}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <span class="overlay">
              A journey of a lifetime.
              <br>
              We know future is in the hand of all-knowing Allah.
            </span>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="{{asset('imgs/im14.jpg')}}" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
              <span class="overlay">
                Sound haj has no reward except paradise.
                <br>
                Surely what comes after you is better for you than that has gone before.</span>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="{{asset('imgs/im13.jpg')}}" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
              <span class="overlay">
                You go when Allah calls you.
                <br>
                A reward for an accepted haj is nothing less than paradise.</span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div id="section1">
    <div class="container about-us">
      {{-- <h4>Your journey of SELF PURIFICATION begins here.</h4>
      <p>  At Multazim Haj Corporation, we pride ourselves in providing most excellent services to all the Pilgrims and focusing only their comfort. We are recognized by the Government of India and the Government of Saudi Arabia for our commitment of delivering an exceptional experience to all pilgrims performing Hajj or Umrah with us.</p> --}}
      <h4>About Us</h4>
      <h5>"Customer Satisfaction and Happiness is our success"</h5>
      <p>The field of Haj & Umrah Services has become extremely competitive and the Indian
        market is flooded with travel agents – qualified and unqualified. Therefore it becomes
        necessary for a person to identify the right travel agent who offers a totally
        hassle-free booking procedure and the right product. <strong>Akbar Haj Corporation</strong> has been established with the primary objective treat of every customer in professionalism with quality in services and commitments.
      </p>
    </div>
  </div>
  <div class="container-fluid main">
    <div class="row">
      <div class="col-lg-4">
      <a href="#"><div class="content im1">
          <div class="text_wrapper">
            <h4>Umrah Tours 2018</h4>
          </div>
        </div></a>
      </div>
      <div class="col-lg-4">
        <a href="#"><div class="content im2">
          <div class="text_wrapper">
            <h4>Hajj Tours 2018</h4>
          </div>
        </div></a>
      </div>
      <div class="col-lg-4">
        <a href="#"><div class="content im3">
          <div class="text_wrapper">
            <h4>Ramadan Tours 2018</h4>
          </div>
        </div></a>
      </div>
    </div>
  </div>
  <div class="outquote">
    <div class="quote">
      <h4>Don't save haj for the old age! You don't know the date of appointment
        with the angel of death.</h4>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row hotel">
        <div class="col-lg-3">
          <div class="content im1">
            <div class="text_wrapper">
              <h4>Hotel Name</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content im2">
            <div class="text_wrapper">
              <h4>Hotel Name</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content im3">
            <div class="text_wrapper">
              <h4>Hotel Name</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="content im3">
            <div class="text_wrapper">
              <h4>Hotel Name</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
