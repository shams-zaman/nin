@include('frontend.layout.topbar')
<section class="events">
    <div class="container">
        <div class="session-title row">
            <h2>Popular Causes</h2>
            <p>We are a non-profital & Charity raising money for child education</p> 
        </div>
        <div class="event-ro row">
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('frontend/assets/images/events/image_08.jpg')}}" alt="">
                    <h4>Start From 1000# Only</h4>
          
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('frontend/assets/images/events/image_06.jpg')}}" alt="">
                    <h4>Income from the first month!</h4>
              
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('frontend/assets/images/events/image_04.jpg')}}" alt="">
                    <h4>Attractive Bonus on cumulative</h4>
               
                </div>
            </div>
        </div>
    </div>
</section>   




<!-- ################# Charity Number Starts Here#######################--->


<div class="doctor-message">
    <div class="inner-lay">
        <div class="container">
           <div class="row session-title">
               <h2>Our Bonuses in Numbers</h2>
               <p>we provide Attractive Bonus in every month :</p>
           </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>50%</h3>
                    <span>*Diamond</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>45%</h3>
                    <span>10* Director</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>45%</h3>
                    <span>5* Director</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>40%</h3>
                    <span>Director</span>
                </div>
            </div>
        </div>

    </div>

</div> 

@include('frontend.layout.footer')