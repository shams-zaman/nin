@include('frontend.layout.topbar')
<section class="our-team team-11">
    <div class="container">
        <div class="session-title row">
              <h2>Meet our Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
        </div>
        <div class="row team-row">
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('frontend/assets/images/team/team-memb1.jpg')}}" alt="">
                    <div class="det-o">
                        <h4>David Kanuel</h4>
                        <i>CEO </i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('frontend/assets/images/team/team-memb2.jpg')}}" alt="">
                    <div class="det-o">
                        <h4>David Kanuel</h4>
                        <i>CFO</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('frontend/assets/images/team/team-memb3.jpg')}}" alt="">
                    <div class="det-o">
                        <h4>David Kanuel</h4>
                        <i>Team Leader</i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-usr">
                    <img src="{{asset('frontend/assets/images/team/team-memb4.jpg')}}" alt="">
                    <div class="det-o">
                        <h4>David Kanuel</h4>
                        <i>Project Manager</i>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>  
@include('frontend.layout.footer')