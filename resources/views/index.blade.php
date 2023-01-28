<x-layout>
    <x-slide :slides="$slides"></x-slide>
    <section class="page-section-pb pt-50" dir="rtl">
        <div class="container">
            <div class="row text-center ">
                <div class="section-title">
                    <h6></h6>
                    <h2 class="mt-10 title-effect">{{ $text->ourMissionTitle }}</h2>
                </div>
                <p>{{ $text->companyName }}</p>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-text left-icon mt-50 sm-mt-20">
                            <div class="feature-icon">
                                <span class="{{ $text->ourMissionIcon }} theme-color" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info">
                                <h5 class="text-back"> رؤيتنا </h5>
                                <p>
                                    {{ $text->ourMission }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-text left-icon mt-50 sm-mt-20">
                            <div class="feature-icon">
                                <span class="{{ $text->ourMessageIcon }} theme-color" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info">
                                <h5 class="text-back">رسالتنا</h5>
                                <p>
                                    {{ $text->ourMessage }}

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-text left-icon mt-50 sm-mt-20">
                            <div class="feature-icon">
                                <span class="{{ $text->ourPhilosophyIcon }} theme-color" aria-hidden="true"></span>
                            </div>
                            <div class="feature-info">
                                <h5 class="text-back">فلسفتنا</h5>
                                <p>
                                    {{ $text->ourPhilosophy }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider pt-20"></div>
            </div>
    </section>


    <section dir="rtl" class="page-section-pb position-relative">
        <div class="container ">
            <div class="row text-center">
                <div class="section-title text-center">
                    <h6> </h6>
                    <h2 class="title-effect"> {{ $text->ourServicesTitle }}</h2>
                    <p>
                        {{ $text->ourServicesText }}
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">





                @foreach ($category as $item)
                    @if ($item->id == 3)
                        <div class="col-md-4 xs-mb-40">
                            <div class="feature-box h-100 parents">
                                <div class="feature-box-content">
                                    <i class=" {{ $item->icon }} blue"></i>
                                    <h4>{{ $item->title }} </h4>
                                    <p>
                                        {{ $item->des }}
                                    </p>
                                </div>
                                <div class="feature-box-img"
                                    style="background-image: url({{ url('storage/' . $item->img) }})">

                                </div>


                                <span class="feature-border">

                                </span>
                                <a class='childS' href="{{ url('services/' . $item->id) }}"> عرض المزيد</a>

                            </div>
                        </div>
                    @endif
                @endforeach

                @foreach ($services as $item)
                    <div class="col-md-4 xs-mb-40">
                        <div class="feature-box h-100 parents">
                            <div class="feature-box-content">
                                <i class=" {{ $item->icon }} blue"></i>
                                <h4>{{ $item->name }} </h4>
                                <p class='overflowhidden'>
                                    {{ $item->des }}
                                </p>
                            </div>
                            <div class="feature-box-img"
                                style="background-image: url({{ url('storage/' . $item->img) }})">

                            </div>


                            <span class="feature-border">

                            </span>
                            <a class='childS' href="{{ url('order/' . $item->id) }}"> عرض المزيد</a>

                        </div>
                    </div>
                @endforeach





            </div>







            {{--        <div class="row">
                <div class="col-md-4 xs-mb-40">
                    <div class="feature-box h-100">
                        <div class="feature-box-content">
                            <i class="fa fa-paint-brush blue"></i>
                            <h4>المرافعة </h4>
                            <p>
                                للافراد تقدم سدنه خدمة المرافعة للمحاكم.
                            </p>
                        </div>
                        <a href="#"> عرض المزيد</a>
                        <div class="feature-box-img" style="background-image: url('web/images/about/01.jpg')"></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
                <div class="col-md-4 xs-mb-40">
                    <div class="feature-box h-100 active">
                        <div class="feature-box-content">
                            <i class="fa fa-arrows"></i>
                            <h4>المرافعة </h4>
                            <p>
                                للافراد تقدم سدنه خدمة المرافعة للمحاكم.
                            </p>
                        </div>
                        <a href="#"> عرض المزيد</a>
                        <div class="feature-box-img" style="background-image: url('web/images/about/02.jpg')"></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box h-100">
                        <div class="feature-box-content">
                            <i class="fa fa-heart"></i>
                            <h4>المرافعة </h4>
                            <p>
                                للافراد تقدم سدنه خدمة المرافعة للمحاكم.
                            </p>
                        </div>
                        <a href="#"> المزيد</a>
                        <div class="feature-box-img" style="background-image: url('web/images/about/03.jpg')"></div>
                        <span class="feature-border"></span>
                    </div>
                </div>
            </div>

 --}}

        </div>
    </section>





    <section class="awesome-features gray-bg page-section-ptb pos-r">
        <div class="side-background">
            <div class="col-lg-5 img-side img-left d-xs-block d-lg-block d-none">
                <div class="row page-section-pt mt-30">
                    <img src="{{ asset('storage/' . $text->HighlightImg) }}" alt="" />
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row justify-content-end">
                <div class="col-lg-7" dir="rtl">
                    <div class="section-title text-center">
                        <h6> {{ $text->HighlightTitle }}</h6>
                        <h2 class="title-effect"> {{ $text->HighlightTitle2 }} </h2>
                        <p>
                            {{ $text->Highlight }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" dir="rtl">
                            <div class="feature-text text-end mb-30">
                                <div class="feature-icon">
                                    <span class=" {{ $text->HIcon1 }} theme-color"></span>
                                </div>
                                <div class="feature-info">
                                    <h5> {{ $text->Htitle1 }}</h5>
                                    <p>
                                        {{ $text->Htext1 }}

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="feature-text text-end mb-30">
                                <div class="feature-icon">
                                    <span class="{{ $text->HIcon2 }} theme-color"></span>
                                </div>
                                <div class="feature-info">
                                    <h5> {{ $text->Htitle2 }}</h5>
                                    <p>
                                        {{ $text->Htext2 }}

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" dir="rtl">
                        <div class="col-md-6 col-sm-6">
                            <div class="feature-text text-end mt-30">
                                <div class="feature-icon">
                                    <span class="{{ $text->HIcon3 }} theme-color"></span>
                                </div>
                                <div class="feature-info">
                                    <h5> {{ $text->Htitle3 }}</h5>
                                    <p>
                                        {{ $text->Htext3 }}

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="feature-text text-end mt-30">
                                <div class="feature-icon">
                                    <span class="{{ $text->HIcon4 }} theme-color"></span>
                                </div>
                                <div class="feature-info">
                                    <h5> {{ $text->Htitle4 }}</h5>
                                    <p>
                                        {{ $text->Htext4 }}

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="our-service-home page-section-ptb bg-overlay-black-80 jarallax" data-speed="0.6"
        data-img-src="{{ asset('storage/' . $text->NumberImg) }}">
        <div class="container" dir="rtl">
            <div class="row mb-60">
                <div class="col-md-8">
                    <div class="section-title">
                        <h2 class="text-white title-effect"> {{ $text->ourNumberTitle }} </h2>
                        <p class="text-white">

                            {{ $text->ourNumberText }}
                        </p>
                    </div>
                </div>
            </div>



            <div class="row" dir="rtl">


                @foreach ($allNumberObjects as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                        <div class="counter text-white">
                            <i class="{{ $item->img }}"></i>
                            <span class="timer" data-to="{{ $item->number }}"
                                data-speed="10000">{{ $item->number }}</span>
                            <label> {{ $item->title }} </label>
                        </div>
                    </div>
                @endforeach





            </div>








        </div>
    </section>



    <section class="white-bg page-section-ptb" dir="rtl">
        <div class="container">
            <div class="custom-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h6 class="text-white">ماذا نقدم</h6>
                            <h2 class="text-white title-effect dark">


                                {{ $text->PTitle }}

                            </h2>
                            <p class="text-white">
                                {{ $text->PDes }}

                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="popup-video">
                            <img class="img-fluid full-width" src="{{ asset('web/images/about/01.jpg') }}"
                                alt="" />
                            <div class="play-video text-center">
                                <a class="view-video popup-youtube"
                                    href="https://www.youtube.com/watch?v=LgvseYYhqU0">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h5 class="text-white">


                        </h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="feature-text left-icon mt-30">
                                    <div class="feature-icon">
                                        <span class="{{ $text->pImg1 }} text-white"></span>
                                    </div>
                                    <div class="feature-info">
                                        <h5 class="text-white"> {{ $text->pText1 }}</h5>
                                        <p class="text-white">



                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="feature-text left-icon mt-30">
                                    <div class="feature-icon">
                                        <span class="{{ $text->pImg2 }} text-white"></span>
                                    </div>
                                    <div class="feature-info">
                                        <h5 class="text-white"> {{ $text->pText2 }} </h5>
                                        <p class="text-white">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-home gray-bg o-hidden d-none">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="portfolio-title section-title mt-md-5">
                        <h6>Super creative</h6>
                        <h2 class="title-effect">Our Latest Works</h2>
                        <p class="mb-20">
                            Work on the best projects for the best clients. Our clients
                            are some of the most forward-looking companies in the world.
                        </p>
                        <span>Webster has powerful options & tools, unlimited designs,
                            responsive framework and amazing support. We are dedicated to
                            providing you with the best experience possible. Purchase
                            webster to find out why the sky's the limit when using
                            Webster.</span>
                        <a class="button mt-30" href="portfolio-classic-3-columns-fullwidth.html">
                            See all projects
                        </a>
                    </div>
                    <div></div>
                </div>
                <div class="col-lg-8">
                    <div class="isotope popup-gallery columns-3 no-padding">
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/01.jpg') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html">Post item image</a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Photography </a>|
                                        <a href="#">Ecommerce </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="images/portfolio/small/01.jpg')}}"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/02.jpg') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html"> Post item image</a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Creative </a>| <a href="#">Graphics </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="images/portfolio/small/02.jpg')}}"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/03.jpg') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html"> Post item image</a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Design </a>| <a href="#">Illustration </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="images/portfolio/small/03.jpg')}}"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/04.gif') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html"> Post GIF image</a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Animation </a>| <a href="#">GIF </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="images/portfolio/small/04.gif"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/05.jpg') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html">
                                            Post item Youtube</a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Video </a>| <a href="#">Youtube </a>
                                    </span>
                                </div>
                                <a class="popup popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <img src="{{ asset('web/images/portfolio/small/06.jpg') }}" alt="" />
                                <div class="portfolio-overlay">
                                    <h4 class="text-white">
                                        <a href="portfolio-single-01.html"> Post item image </a>
                                    </h4>
                                    <span class="text-white">
                                        <a href="#"> Photography </a>|
                                        <a href="#">Illustration </a>
                                    </span>
                                </div>
                                <a class="popup portfolio-img" href="images/portfolio/small/06.jpg')}}"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="our-awesome-core page-section-ptb pos-r gray-bg o-hidden">
        <div class="side-background">
            <div class="row">
                <div class="col-md-5 img-side img-left d-xs-block d-lg-block d-none">
                    <img src="{{ asset('storage/' . $text->BImg) }}" class="img-fluid mx-auto" alt="" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7 mt-30">
                    <div class="section-title mb-0">
                        <h6>{{ $text->BTitle }}</h6>
                        <h2 class="title-effect title-effect">{{ $text->BTextM }}</h2>
                        <p>
                            {{ $text->Btext }}
                        </p>
                    </div>
                    <div class="row mt-50">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature-text text-start mb-40">
                                <div class="feature-icon">
                                    <span class="{{ $text->BIcon1 }} theme-color" aria-hidden="true"></span>
                                </div>
                                <h5>{{ $text->BTitle1 }}</h5>
                                <p>
                                    {{ $text->BText1 }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature-text text-start mb-40">
                                <div class="feature-icon">
                                    <span class="{{ $text->BIcon2 }} theme-color" aria-hidden="true"></span>
                                </div>
                                <h5>{{ $text->BTitle2 }}</h5>
                                <p>
                                    {{ $text->BText2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature-text text-start mb-40">
                                <div class="feature-icon">
                                    <span class="{{ $text->BIcon3 }} theme-color" aria-hidden="true"></span>
                                </div>
                                <h5>{{ $text->BTitle3 }}</h5>
                                <p>
                                    {{ $text->BText3 }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="feature-text text-start mb-40">
                                <div class="feature-icon">
                                    <span class="{{ $text->BIcon4 }} theme-color" aria-hidden="true"></span>
                                </div>
                                <h5>{{ $text->BTitle4 }}</h5>
                                <p>
                                    {{ $text->BText4 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="page-section-ptb white-bg ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-80">
                        <h6>باقات سدنه</h6>
                        <h2 class="title-effect"> اسعار في متناول الجميع</h2>


                        <div class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <button 
                            class='button' 
                            id="year-tab" 
                            data-bs-toggle="pill" 
                            data-bs-target="#year"
                            type="button" 
                            role="tab" 
                            aria-controls="year" 
                            aria-selected="false">شهرية
                            </button>


                            <button 
                            class='button' 
                            id="month-tab" 
                            data-bs-toggle="pill" 
                            data-bs-target="#month"
                            type="button" 
                            role="tab" 
                            aria-controls="month" 
                            aria-selected="false">سنوية
                            </button>

                        </div>

                    </div>
                </div>
            </div>

            <div class='tab-content w-100' id="pills-tabContent">
                <div class='tab-pane fade show active'  aria-labelledby="month-tab" id='month'>
                    <div class="row ">

                        @foreach ($plans as $item)
                            <div class="col-md-4  ">
                                <div class="pricing-table border rounded py-5 text-center">
                                    <div class="pricingtop">
                                        <div class="pricing-title section-title ">
                                            <h3 class='mb-5 title-effect'>قريباً</h3>

                                            <h6 class="mb-15"> {{ $item->name }}</h6>
                                            <p>
                                                {{ $item->des }}
                                            </p>
                                        </div>
                                        <div dir="rtl" class="pricing-prize d-none">
                                            <h4>{{ $item->price }} ر.س /<span> شهر</span></h4>
                                        </div>
                                        <div class="pricing-button d-none">
                                            <a class="button" href="{{ $item->url }}"> اشترك</a>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="pricing-content">
                                        <div class="pricing-table-list">
                                            <ul class="list-unstyled">

                                                @php
                                                    $proptoplan = $item->prop->pluck('prop_id')->toArray();
                                                    
                                                @endphp

                                                @foreach ($props as $item)
                                                    <li>






                                                        {{ $item->name }}
                                                        <span class="tooltip-content float-end"
                                                            data-bs-placement="top" data-bs-toggle="tooltip">

                                                            @if (in_array($item->id, $proptoplan))
                                                                <i class="fa fa-check"> </i>
                                                            @else
                                                                <i class="fa fa-times"></i>
                                                            @endif

                                                        </span>
                                                    </li>
                                                @endforeach

                                                <button class='button'>اطلب الباقة</button>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
                <div class='tab-pane fade'  aria-labelledby="year-tab" id='year'>
                <div class="row " '>
                    @foreach ($plans as $item)
                        <div class="col-md-4  ">
                            <div class="pricing-table border rounded py-5 text-center">
                                <div class="pricingtop">
                                    <div class="pricing-title section-title ">
                                        <h3 class='mb-5 title-effect'>قريباً</h3>

                                        <h6 class="mb-15"> {{ $item->name }}</h6>
                                        <p>
                                            {{ $item->des }}
                                        </p>
                                    </div>
                                    <div dir="rtl" class="pricing-prize d-none">
                                        <h4>{{ $item->price }} ر.س /<span> شهر</span></h4>
                                    </div>
                                    <div class="pricing-button d-none">
                                        <a class="button" href="{{ $item->url }}"> اشترك</a>

                                    </div>
                                </div>
                                <hr>
                                <div class="pricing-content">
                                    <div class="pricing-table-list">
                                        <ul class="list-unstyled">

                                            @php
                                                $proptoplan = $item->prop->pluck('prop_id')->toArray();
                                                
                                            @endphp

                                            @foreach ($props as $item)
                                                <li>






                                                    {{ $item->name }}
                                                    <span class="tooltip-content float-end" data-bs-placement="top"
                                                        data-bs-toggle="tooltip">

                                                        @if (in_array($item->id, $proptoplan))
                                                            <i class="fa fa-check"> </i>
                                                        @else
                                                            <i class="fa fa-times"></i>
                                                        @endif

                                                    </span>
                                                </li>
                                            @endforeach

                                            <button class='button'>اطلب الباقة</button>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>

        </div>
    </section>










    <section class="gray-bg page-section-pt happy-clients">
        <div class="container">



            <div class="tab">
                <div class="tab-content" id="nav-tabContent">

                    @foreach ($ourMessage as $item)
                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }} "
                            id="testi-{{ $item->id }}">


                            <div class="row">
                                <div class="col-lg-6 align-self-end">
                                    <img style='width:25em;' class="d-xs-block d-lg-block d-none img-fluid"
                                        src="{{ url('storage/' . $item->img) }}" alt="" />
                                </div>
                                <div class="col-lg-6 mt-60">
                                    <div class="section-title text-center">
                                        <h2 class="title-effect"> {{ $item->title }} </h2>
                                    </div>


                                    <p class="text-center">
                                        <span class="quoter-icon topqute">“</span>

                                        {{ $item->des }}
                                    </p>
                                    <div class="testimonial-avatar">
                                        <h5>{{ $item->user->name }}</h5>
                                        <span>{{ $item->role }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach






                    <ul class="nav nav-tabs mt-60 " id="myTab" role="tablist">



                        @foreach ($ourMessage as $item)
                            <li>
                                <a class="nav-item  {{ $loop->first ? ' active' : '' }}"
                                    href="#testi-{{ $item->id }}" data-bs-toggle="tab">
                                    <img class="img-fluid" src="{{ url('storage/' . $item->img) }}"
                                        alt="" />
                                </a>
                            </li>
                        @endforeach



                    </ul>

                </div>
            </div>


        </div>
    </section>











































    <section class="page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title text-center">
                        <h6>{{ $text->ourclintText }}</h6>
                        <h2 class="title-effect"> {{ $text->ourclintText1 }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2"
                        data-sm-items="2" data-xs-items="1" data-xx-items="1">


                        @foreach ($clints as $item)
                            <div class="item">
                                <div class="testimonial bottom_pos">
                                    <div class="testimonial-avatar d-none">
                                        <img alt="" src="{{ asset('web/images/team/avatar-1.jpeg') }}" />
                                    </div>
                                    <div class="testimonial-info">
                                        {{ $item->des }}
                                        <br>
                                        @php
                                            $i = 1;
                                            while ($i <= 5) {
                                                if ($item->rate >= $i) {
                                                    echo "<span class='fa fa-star checkedStar'></span>";
                                                } else {
                                                    echo "<span class='fa fa-star '></span>";
                                                }
                                                $i++;
                                            }
                                        @endphp
                                    </div>
                                    <div class="author-info">
                                        <strong>{{ $item->name }} - <span> </span></strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach






                        {{-- 
                        <div class="item">
                            <div class="testimonial bottom_pos">
                                <div class="testimonial-avatar">
                                    <img alt="" src="{{ asset('web/images/team/avatar-2.jpeg') }}" />
                                </div>
                                <div class="testimonial-info">
                                    واحد ان لم يكن افضل مؤسسة قانونية تعاملت مهعم سعيد جدا
                                    بالتعامل معهم و طلب خدمات مؤسستهم
                                </div>
                                <div class="author-info">
                                    <strong>حسن - <span> مدير شركة</span></strong>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial bottom_pos">
                                <div class="testimonial-avatar">
                                    <img alt="" src="{{ asset('web/images/team/avatar-3.jpeg') }}" />
                                </div>
                                <div class="testimonial-info">
                                    كسبت القضية كله بفضل استشارة مؤسسة سدنه القانونية عظيم
                                    الشكر للفريق العامل في الموقع الذين ارشدوني للتعامل معكم.
                                </div>
                                <div class="author-info">
                                    <strong>محمد - <span> مدير موقع</span></strong>
                                </div>
                            </div>
                       
                        </div>
 --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }


        .blog-box-imgShow {
            background: rgba(0, 0, 0, 0.6);
            color: #ffffff;
            content: "";
            display: inline-block;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .blog-box-imgs {
            bottom: 0;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0;
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center center;
    </style>

    <section class="our-blog page-section-ptb ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title-effect">المدونات</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-md-4 xs-mb-30">
                        <div style='min-height:180px;' class="blog-box active blog-1 h-100">

                            <div class="blog-info  h-100">

                                {{--       <span class="post-category"><a href="#">عالم الاعمال</a></span> --}}

                                <h4 class=''><a href="{{ url('blog/' . $item->id) }}">{{ $item->title }}</a>
                                </h4>
                                <p class='truncate d-none'>
                                    {{ $item->des }}
                                </p>
                                <span><i class="fa fa-user"></i> {{ $item->user->name }}</span>
                                <span><i class="fa fa-calendar-check-o"></i>
                                    {{ $item->created_at->isoFormat('dddd D') }}
                                </span>
                            </div>
                            <div class="blog-box-img" style="background-image: url(storage/{{ $item->img }})">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="our-blog page-section-ptb d-none ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title-effect">المدونات</h2>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 xs-mb-30">
                    <div class="blog-box blog-1 h-100">
                        <div class="blog-info">
                            <span class="post-category"><a href="#">عالم الاعمال</a></span>
                            <h4><a href="#">اجعل عملك مربح</a></h4>
                            <p>
                                كيف تجعل من عملك مربحا حتى تحت الظروف الاقتصادية الصعبة
                            </p>
                            <span><i class="fa fa-user"></i> محمد</span>
                            <span><i class="fa fa-calendar-check-o"></i> 01 July 2021
                            </span>
                        </div>
                        <div class="blog-box-img" style="background-image: url(web/images/objects/05.png)"></div>
                    </div>
                </div>
                <div class="col-md-4 xs-mb-30">
                    <div class="blog-box blog-1 h-100 active">
                        <div class="blog-info">
                            <span class="post-category"><a href="#">الاعلام</a></span>
                            <h4><a href="#">كيف تختار شعار عملك </a></h4>
                            <p>كيف تتميز من بقية المعلنين.
                            </p>
                            <span><i class="fa fa-user"></i> الكاتب حسن </span>
                            <span><i class="fa fa-calendar-check-o"></i> 21 June 2021
                            </span>
                        </div>
                        <div class="blog-box-img" style="background-image: url(web/images/bg/01.jpg)"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-box blog-1 h-100">
                        <div class="blog-info">
                            <span class="post-category"><a href="#">القانون</a></span>
                            <h4><a href="#">كيف تكسب قصية </a></h4>
                            <p>
                                شرح الخطواط الفانونية لكسب اب قضية
                            </p>
                            <span><i class="fa fa-user"></i> الكاتب محمد</span>
                            <span><i class="fa fa-calendar-check-o"></i> 13 may 2021
                            </span>
                        </div>
                        <div class="blog-box-imgShow " style="background-image: url(web/images/about/02.jpg)"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <style>


.overflowhidden{
    max-height:150px !important;
    overflow:hidden;
}


        .topqute {
            top: 100px !important;
        }

          .parents {
            display: flex;
            flex-direction: column;
        }

        .childS {
            margin-top: auto !important;
        }

        .showservices {
            top: -20px;
        }

        .ourClint img {
            width: 8em !important;
            filter: brightness(500);
        }
    </style>
    <section class="our-clients theme-bg text-white page-section-ptb">
        <div class="container ourClint">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h6 class="lacks-heading d-none">Lacks Heading</h6>
                    <!-- lacks heading for w3c -->
                    <div class="owl-carousel" data-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="2">

                        @foreach ($custmerSlide as $item)
                            <div class="item">


                                <a href="{{ $item->url }}" class="swiper-slide" target="_blank">

                                    <img class="mx-auto img-fluid" src="{{ url('storage/' . $item->img) }}"
                                        alt="" />


                                </a>

                            </div>
                        @endforeach







                    </div>
                </div>
            </div>
        </div>
    </section>














</x-layout>
