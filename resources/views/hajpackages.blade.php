@extends('layout.app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('css/hajpackages.css')}}">
@endsection
@section('main-content')

  <div class="container">
    <h1 class="mt-4 mb-3">Haj Packages
      <small></small>
    </h1>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">HAJJ TOUR ITINERARY & PROGRAM</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            <p><strong class="colrp">13th August 2018 2nd ZilHajj :</strong><br>
              Departure Mum / Jed
            </p>
            <p><strong class="colrp">13th August 2018 2nd ZilHajj :</strong><br>
              Check In Aziziyah Accommodation and Perform Umarah under Tour guidance
            </p>
            <p><strong class="colrp">18th August 2018
              7th ZilHajj :</strong><br>
              Hajj Begins, proceed to Mina Camp (Hajj Journey)
            </p>
            <p><strong class="colrp">19th August 2018 (Day 1)
              8th ZilHajj	 :</strong><br>
              Yawme Tarwiyah Proceed To Arfat After Isha Prayers
            </p>
            <p><strong class="colrp">20st August 2018 (Day 2)
              9th ZilHajj :</strong><br>
              Yawme Arafat And Proceed To Muzdalfah After Azan E Magrib (No Tents Are Available In Muzdalfah)
            </p>
            <p><strong class="colrp">21st August 2018 (Day 3)
              10th ZilHajj :</strong><br>
              Hajj -1st Ramee- Arkan / Qurbani / Tawafe Ziyaraaat
            </p>
            <p><strong class="colrp">22nd August 2018 (Day 4)
              11th ZilHajj :</strong><br>
              Stay At Mina (2nd Ramee)
            </p>
            <p><strong class="colrp">23rd August 2018 (Day 5)
              12th ZilHajj :</strong><br>
              Stay At Mina (3rd Ramee) Proceed To Aziziyah Accommodation Hajj Ends
            </p>
            <p><strong class="colrp">24th August 2018 - 26th August 2018
              13th ZilHajj - 15th ZilHajj :</strong><br>
              Stay at Aziziyah Accomodation
            </p>
            <p><strong class="colrp">27th August 2018 - 11th September 2018
              16th ZilHajj - 1stMoharram :</strong><br>
              Pilgrims transfer / stay at Hotel in Ajyad Assood, near Haram
            </p>
            <p><strong class="colrp">11th September 2018
              1st Moharram :</strong><br>
              Pilgrims to trasferred Madinah
            </p>
            <p><strong class="colrp">11th September 2018 to 20th September 2018
              1st Moharram - 10th Moharram :</strong><br>
              Stay at Madinah Hotel 250mtrs from Masjid AlNabvi, Markaziya
            </p>
            <p><strong class="colrp">20th September 2018
              10th Moharram :</strong><br>
              Hajis proceed to Airport, departure to India
            </p>

          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Hotels
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            <img src="{{asset('imgs/h2.jpg')}}" alt="hajj" width="300px" height="200px">

            <h3>Hotel in Makkah</h3>
            <p> <strong>Hotel Name: </strong>
              Hotel will be provided 4-5 minutes walk from Haram, in Ajyad Al Sud.
            </p>
            <p><strong>Overview:</strong>
              Located at Ajyad Al Sud, next to Le Meridian Makkah, near Haram.
            </p>
            <p><strong>Accommodation: </strong>
              Hotel offers elegantly furnished room as per standard laid by Ministry Of Haj, Saudi Arabia.
            </p>
            <p><strong>Restaurants:</strong>
              Main restaurants located at M / S floor, providing wide range of Indian Food.
            </p>
            <p><strong>Services & facilities:</strong>
              Mini fridge and hair dryers, Wi–Fi High Speed Internet,
              Safe Box available in the room.
            </p>
            <img src="{{asset('imgs/h2.jpg')}}" alt="hajj" width="300px" height="200px">

            <h3>Hotel in Madinah</h3>
            <p> <strong>Hotel Name: </strong>
              Hotel will be provided 250 Meters away from Masjid Al Nabawi in Central Area.
            </p>
            <p><strong>Accommodation: </strong>
              Hotel offers elegantly furnished room as per standard laid by Ministry Of Haj, Saudi Arabia.
            </p>
            <p><strong>Restaurants:</strong>
              Main restaurants located at M / S floor, providing wide range of Indian Food.
            </p>
            <p><strong>Services & facilities:</strong>
              Mini fridge and hair dryers, Wi–Fi High Speed Internet,
              Safe Box available in the room.
            </p>


          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Notes</a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
            <h2>Package Includes</h2>
            <p><span><i class="fas fa-caret-right"></i></span>
              Visa

            </p>

            <p><span><i class="fas fa-caret-right"></i></span>
              Economy Class Air Tickets
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Hotel stay in Makkah Sharif & Madinah Sharif
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Buffet Meals while in Hotel stay
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Orientation / Training of Haj Arkaans, Pre Haj in Mumbai
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Haji & Umrah assistance as and when required
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Medical support provision
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Inter Alia Medical Insurance
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Laundry Facility
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Ziyarat of both the Holy Cities.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Transportations by A/C. Coaches in Group
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Haj Kit (Includes Bags, I-Cards, ect.)
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Zam Zam water bottle of 5 Liters will be provided to each Haji as complementary by us.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Personal attention.
            </p>
            <hr>
            <h2>Package does not Include</h2>
            <p><span><i class="fas fa-caret-right"></i></span>Tour operator is not responsible for loss of valuable items or Money
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>No refund of unused services or lesser duration of stay for any reasons
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>Extra luggage charges other than mentioned on ticket will be paid by the pilgrim
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>Person/s traveling individually other than group date, will bear the additional transportation charges as per their itinerary
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>If Pilgrim decides to change in travel dates for any reasons, other than the group dates, the Air tickets / cancellation charges will paid by Hajis.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>Wheel-Chair Purchase & Handling.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>Qurbani cost is not included in the Haj Package, Haji has to pay the cost by himself, however we will arrange the Qurbani on behalf of the group on individual requests on receipt of money.
            </p>

            <h2>Notes  </h2>
            <p><span><i class="fas fa-caret-right"></i></span>  Services start from Airport ex India, Hajis to arrange
              for eatables required on Airports.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   Tour dates and programs are provisional and subject to change without notice.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   The tour costs have been based on ex Mumbai Saudi Riyal at the rate of Rs. 18.25/-. Any increase in the above rates at the time of delivery of passport
              before departures of the tour shall be collected from the passengers as per the prevailing exchange rate of that day.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   Flight schedule and Itinerary are subject to change without prior notice. Subject to BTQ passengers only.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   Subject to Mumbai Jurisdiction only
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   Any charges levied on Hajis by Ministry Of Haj, Govt. of Saudi Arabia for Visas on repeat of Haj, will be charged to Hajis.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>   Any taxes (Service Tax or any other taxes) increased or added by the government, or introduction of any new taxes such as GST, the same will be added to the Haj package price and has to be paid by Haji.
            </p>


          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingFour">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Policy</a>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="card-body">
            <h2><span class="thr">Booking Policy :</span>
            </h2>
            <p><span><i class="fas fa-caret-right"></i></span>
              International Passport with 6 month validity from the date of departure.
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              4 Photo Passport size (4cm x 6cm) with White Background
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>
              Pay a minimum of Rs. 1,00,000 /- per person to Book your tour, Balance amount to be paid by the the end of month of Shabaan. Hajj booking may stand cancelled if payments are not made on time. Book with Cheque, D.D. or RTGS favoring “IKRAM HAJ CORPORATION”.
            </p>
            <h2><span class="thr">Cancellation Policy :</span>
            </h2>
            <p><span><i class="fas fa-caret-right"></i></span>
              After Visa endorsement, Cancellation of Hajis will not be accepted for any reasons. No refund will be possible.
            </p>
            <h2><span class="thr">Terms and Condition :</span></h2>
            <p><span><i class="fas fa-caret-right"></i></span>All packages are subject to change without prior notice
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>  Menu of the meals will be as per our arrangements
            </p>
            <p><span><i class="fas fa-caret-right"></i></span>  Room allotment as per our arrangement
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
