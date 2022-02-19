@include('frontend.layout.topbar')

<section class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
                <p>We look forward to making the world a reality for students, youths, and adults, Anyone can join in this great opportunity. <br>
                    The world can only be better through you and I.
                    
                    This program is a great mission of impacting the lives of many students or graduates out there in a very positive way, observing the economic situation and scarcity of jobs out there, it is obvious that there are a lot of people facing a lot of challenges whereby most parents even find it difficult to pay their children fee and other things.
                    </p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{asset('frontend/assets/images/misin.jpg')}}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mt-2 mv-img">
                 <img src="{{asset('frontend/assets/images/vision.jpg')}}" alt="">
            </div>
            <div style="margin-top: -.2rem" class="col-md-6 mv-det">
                 <h3 >Our Vision</h3>
                 <b>Our promise is that this journey would make you </b> <br> <br>
                <ul style="margin-left: 1rem"><li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> * Financially free </b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *Have time for family</b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *Have time for rest and</b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *The kind of freedom you want which would lead to achieving your purpose in life.
                </b></li></ul>
            </div>
        </div>
     
        <div class="row mt-1 mb-1">
            We believe that there is nobody on earth that is not created for a purpose, there is always a reason of existence for every human being on earth, A lot of people are created with potentials that are capable enough to transform the world and make the world a better place to live Lack of capital to develop their great idea is a great concern which leads to loss of Dream/purpose. <br> <br>
            <p> <b> This is the reason why this platform is established to impact the lives of people that lack the capital to execute their plans for the future.</b> <br> <br>
               <b> You have a king in you, <br> <br>
                Remember only you can bring it out.</b> <br> <br>
                </p>
        </div>
      
    </div>
</section>  
@include('frontend.layout.footer')