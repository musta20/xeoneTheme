
      <header id="header" class="{{ Request::is('/') ? ' header default' : 'header  transparent'  }}" >
        <!--=================================
 mega menu -->
 <style>
  .revsliderColor{
    color: #842f25 !important;
  }

  .menu-links a:hover{
    color: #842f25 !important;

  }

    .menu-bar{
    float: none !important;
    margin-right: 30%;
  }
</style>
        <div class="topbar" dir="rtl">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 xs-mb-10">
                <div class="topbar-call text-center text-md-end">
                  <ul>
                    <li>
                      <i class="fa fa-envelope-o theme-color"></i>
                      {{$setting->email}}
                      
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>
                      <a href="tel:+{{$setting->phone}}">
                        <span>{{$setting->phone}} </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="topbar-social text-center  text-md-start">
                  <ul>

                  @foreach ($social as $item)
                  <li>
                    <a href="{{$item->url}}"><span class="{{$item->img}}"></span></a>
                  </li>
                  @endforeach


                 
{{--                     <li>
                      <a href="#"><span class="ti-instagram"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="fa fa-google"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-twitter"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-linkedin"></span></a>
                    </li>
                    <li>
                      <a href="#"><span class="ti-dribbble"></span></a>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu">
          <!-- menu start -->
          <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12 position-relative">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                      <li>
                        <a href="/"
                          ><img
                            id="logo_img"
                            src="{{asset('assets/img/wlogo.png')}}"
                            alt="logo"
                          />
                        </a>
                      </li>
                    </ul>
                    <!-- menu links -->
                    <div class="menu-bar">
                      <ul class="menu-links" dir="rtl">
                        <li>
                          <a href="/"
                            >الرئيسية </a>
                          <!-- drop down full width -->
                         
                        </li>
                        <li>
                          <a href="{{url('/category')}}">
                            الخدمات
                          </a>
                          <!-- drop down multilevel  -->
                       
                        </li>

                        
                    
                        <li>
                          <a href="{{url('/CheckStatus')}}"
                            >الاستعلام </a>
                          <!-- drop down multilevel  -->
              
                        </li>

                
                        
                        <li>
                          <a href="{{url('/contact')}}"
                            >تواصل معنا
                             </a>
                          <!-- drop down multilevel  -->
                    
                        </li>
                        <li>
                          <a  href="{{url('/jobs')}}"
                            >التوظيف 
                            </a>
                      
                        </li>
                       
                      </ul>
                      <div class="search-cart d-none">
                        <div class="search">
                          <a
                            class="search-btn not_click"
                            href="javascript:void(0);"
                          ></a>
                          <div class="search-box not-click">
                            <form action="search.html" method="get">
                              <input
                                type="text"
                                class="not-click form-control"
                                name="search"
                                placeholder="بحث.."
                                value=""
                              />
                              <button class="search-button" type="submit">
                                <i class="fa fa-search not-click"></i>
                              </button>
                            </form>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </nav>
          <!-- menu end -->
        </div>
      </header>
  
  