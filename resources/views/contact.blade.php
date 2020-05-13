@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/contact.css')}}">
  <script src="{{asset('js/map.js')}}" charset="utf-8"></script>
@endsection
@section('main-content')

  <div class="container banner">
    <div id="color-overlay">
    </div>
    <h1>"Get In Touch"</h1>
  </div>
  <div class="contact">
    <div class="container">
      <h4>Contact Us</h4>
      <h5>Akbar Haj Corporation</h5>
      <p>Flat No. 105, 1st floor, A Wing, Rupvin CHS Ltd, Papdi Vasai West, Vasai, Maharashtra 401207
      </p>
      <p>Contact person name  </p>
      <p>99230 88677</p>
      <p>emailaddress@gmail.com</p>
      <div class="row">
        <div class="col-sm-6">
          <div class="cform">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter your phone number">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Enter subject">
              </div>
              <div class="form-group">
                <label for="exampleTextarea">Message</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Enter your message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="cmap">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDureIaqViHPClx3z7hvR_jh3vbSYu_Wok&callback=initMap">
  </script>
@endsection
