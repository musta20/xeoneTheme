<footer class="{{ Request::is('/') ? 'footerback3' : 'footerback2' }} footer page-section-pt">
    <div class="container">
        <div class="{{ Request::is('/') ? ' footer-contact white-bg' : 'd-none' }}">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">
                                <h5 class="mt-10 mb-10">{{ $setting->email }}</h5>
                                <span>24 X 7 دعم فني</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 bottom-m3">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">
                                <h5 class="mt-10 mb-10">
                                    {{ $setting->phone }}


                                </h5>
                                <span>
                                    {{ $setting->weekwork }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 bottom-m3">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-direction-alt"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">


                                <h5 class="mt-10 mb-10"> {{ $setting->adress }} </h5> <span>
                                    {{ $setting->ct }}</span>




                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="{{ Request::is('/') ? ' f' : 'd-none' }}">
            <x-contact />
            <br>
        </div>

        <div class="row top" dir="rtl">
            <div class="col-lg-6 col-md-6">
                <img class="img-fluid" id="logo-footer" src="{{ asset('web/images/h.png') }}" alt="" />
            </div>

            <div class="col-lg-6 col-md-6 d-none">
                <div class="social text-start sm-mt-0 text-md-end xs-mt-20">
                    <ul>
                        <li>
                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                        </li>

                        <li>
                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                        </li>

                        <li>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="divider mt-50 mb-50"></div>
            </div>
        </div>

        <div class="row" dir="rtl">
            <div class="col-lg-5 col-md-5 sm-mt-30">
                <div class="about-content">
                    <h6 class="mb-20 text-uppercase revsliderColorw">عن سدنه</h6>
                    <p class="revsliderColorw">
                        {{ $setting->footertext }}
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 sm-mt-30 sm-mb-30 ">
                <h6 class="mb-10 text-uppercase revsliderColorw">روابط مفيدة</h6>
                <div class="usefull-link">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 ">
                            <ul>
                                <li><a class="revsliderColorw" href="/">الرئيسية</a></li>
                                <li><a class="revsliderColorw" href="{{url('/category')}}"> التصنيفات </a></li>
                                <li><a class="revsliderColorw" href="{{url('/CheckStatus')}}">الاستعلام</a></li>
               
                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-2">
                            <ul>
                                <li><a class="revsliderColorw" href="{{url('/contact')}}">اتصل بنا</a></li>
                                <li><a class="revsliderColorw"href="{{url('/jobs')}}">التوظيف </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                        <div class="footer-widget">
<h4 class="revsliderColorw"> تحميل الملف التعريفي </h4>
<div style="background-color:#fff;width:50%;" class="footer-image">
<a href="{{'/storage/'.$setting->footerFile}}">
<img src="{{ asset('web/images/h.png') }}"  alt="Image"
 style="height: 3.5rem;"><i s class="fa fa-file fa-2x"></i>
</a>
</div>
</div>
                            <ul class='d-none'>
                                <li>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    
                                    <a class="revsliderColorw" href="#">{{$setting->weekwork}} </a></li>
                                <li>
                                    <i class="fa fa-phone" ></i>

                                    <a class="revsliderColorw" href="#">{{$setting->phone}} - {{$setting->email}}</a></li>
                                <li>
                                    
                                    <i class="fa fa-map" ></i>

                                    <a class="revsliderColorw" href="#">{{$setting->adress}} : {{$setting->ct}} </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright gray-bg mt-50 footerback">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <ul class="text-start">
                   
                        <li class="list-inline-item">
                            <a href="{{url('/term')}}" class="revsliderColorw"> شروط وأحكام </a> &nbsp;&nbsp;&nbsp;|
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 ">
                    <div class="text-start text-md-end xs-mt-15">
                        <p class="revsliderColorw">
                                                  {{$setting->copyright}}|
                            <a class="a-btn revsliderColorw" href="https://naqlah.co/">

                                {{ $setting->footer }}
                                </a>
                                <!--             &copy;Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                            
                            </span> <a href="#"> Webster </a> All Rights Reserved
  -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<style>
    .revsliderColorw {
        color: #fff7f7 !important;
    }

    .footerback {
        background-color: #842f25 !important;

    }

    .footerback2 {
        background: linear-gradient(180deg, #fff 30%, #842f25 00%) !important;
    }


    .footerback3 {
        background: linear-gradient(180deg, #fff 66%, #842f25 40%) !important;
    }
</style>
