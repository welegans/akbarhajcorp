@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/abouthaj.css')}}">
@endsection
@section('main-content')

	 <!-- Page Content -->
    <div class="container">

	  <!-- Page Heading/Breadcrumbs -->
	  <h1 class="mt-4 mb-3">About Haj
	    <small></small>
	  </h1>

	<!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
        	<br>
          <img class="img-fluid rounded mb-4" src="{{asset('imgs/im7.jpg')}}" alt="">
        </div>
        <div class="col-lg-6">
          <h2>HAJJ</h2>
          <p>Hajj is one of most important pillars of Islam and it is one of greatest religious duties.<br>
            Holy Qur’an says in a short and meaningful sentence:
            <br>
          </p>
          <p class="ara">
            وَ لِلّه عَلَى النّاسِ حِجُّ الْبَیْتِ مَنِ اسْتَطاعَ اِلَیْهِ سَبیلاً.
          </p>
          <p>
            It is on people for the sake of Allah to perform Hajj of his house, anyone who is
            able to undertake the journey to him. (2:196)
            <br>
            A Person who performs Hajj purifies himself from sins like the day that he was born”.
            And this is the greatest gift, and the best honor and the highest reward.
            Persons who perform Hajj and Umrah are guests of Allah. He will grant them their wishes and
            any prayer that they recite will be accepted. And if they pray for intercession about a person it
            will be accepted … and if they die in this way Allah will forgive all of their sins
          </p>
        </div>
      </div>
      <!-- /.row -->

	</div>


@endsection
