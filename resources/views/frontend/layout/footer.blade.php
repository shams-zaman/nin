    
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <form action="{{route('message_us')}}" method="POST">
                        @csrf
                        <li style="padding: 0">
                            <input style="background-color: #1e2436; color:white" class="form-control pt-1" type="text" name="name">
                        </li>
                        <li  style="padding: 0">
                            <input style="background-color: #1e2436; color:white" class="form-control pt-1" type="email" required name="contact_email">
                        </li>
                        <li  style="padding: 0">
                            <textarea style="background-color: #1e2436; color:white" class="form-control pt-4" name="text"> </textarea>
                        </li>
                        <button  style="background-color: #1e2436; color:white"  type="submit" class="btn">Submit</button>
                        </form>
                       
                       
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Marthandam (K.K District) <br>
                        Tamil Nadu, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div>
            
            
      
            
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
                
             <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
             </span>
            </div>

     </div>
     <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
     <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
     <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
     <script src="{{asset('frontend/assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('frontend/assets/js/script.js')}}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{!! Toastr::message() !!}
<script>


    @if($errors->any())
        @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','Error',{
                  closeButton:true,
                  progressBar:true,
               });
        @endforeach
    @endif

</script>
    
</body>



</html>