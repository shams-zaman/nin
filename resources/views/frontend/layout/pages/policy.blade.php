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
                    <h4>Child Education in Africa</h4>
                    
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('frontend/assets/images/events/image_06.jpg')}}" alt="">
                    <h4>Child Education in Africa</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                    <img src="{{asset('frontend/assets/images/events/image_04.jpg')}}" alt="">
                    <h4>Child Education in Africa</h4>
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
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
               <h2>Our Achievemtns in Numbers</h2>
               <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
           </div>
            <div class="row">
                <div class="col-sm-3 numb">
                    <h3>12+</h3>
                    <span>YEARS OF EXPEREANCE</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>1812+</h3>
                    <span>HAPPY CHILDRENS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>52+</h3>
                    <span>EVENTS</span>
                </div>
                <div class="col-sm-3 numb">
                    <h3>48+</h3>
                    <span>FUNT RAISED</span>
                </div>
            </div>
        </div>

    </div>

</div> 

@include('frontend.layout.footer')