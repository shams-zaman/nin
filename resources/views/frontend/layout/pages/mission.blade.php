@include('frontend.layout.topbar')

<section class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.</p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{asset('frontend/assets/images/misin.jpg')}}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mv-img">
                 <img src="{{asset('frontend/assets/images/vision.jpg')}}" alt="">
            </div>
            <div class="col-md-6 mv-det">
                 <h1>Our Vision</h1>
                 <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui.</p>
            </div>
        </div>
    </div>
</section>  
@include('frontend.layout.footer')