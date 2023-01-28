<section>
    <div class="container">
      <div class="row justify-content-center mt-30">
        <div class="col-md-10">
          <div class="section-title text-center">
            <h2>تواصل معنا</h2>
            <x-card-message></x-card-message>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="formmessage">Success/Error Message Goes Here</div>
          <form role="form" method="post" action="{{url('/SendContact')}}">
            @csrf
            <div class="contact-form clearfix">
  
  
  
         <div class="section-field w-100 d-flex justify-content-center align-items-center">
                <input
                  id="title"
                  type="title"
                  placeholder=" العنوان"
                  class="form-control w-25 "
                  name="title"
                />
                @error('title')
                <span class="helper"> {{ $message }} </span>
                @enderror
              </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
              <div class="section-field">
                <input
                  type="text"
                  placeholder="الجوال*"
                  class="form-control"
                  name="phone"
                />
                @error('phone')
                <span class="helper"> {{ $message }} </span>
                @enderror
              </div>
  
              <div class="section-field">
                <input
                  type="text"
                  placeholder="الاسم *"
                  class="form-control"
                  name="name"
                />
                @error('name')
                <span class="helper"> {{ $message }} </span>
                @enderror
              </div>
  
              <div class="section-field">
                <input
                  id="name"
                  type="email"
                  placeholder=" البريد الالكتروني*"
                  class="form-control"
                  name="email"
                />
                @error('email')
                <span class="helper"> {{ $message }} </span>
                @enderror
              </div>
  
  
  
  
  
         
  
  
  
  
  
  
       
  
  
  
  
  
  
  
          
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
              <div class="section-field textarea">
                <textarea
                  class="input-message form-control"
                  placeholder="نص الرسالة*"
                  rows="7"
                  name="message"
                ></textarea>
                @error('message')
                <span class="helper"> {{ $message }} </span>
                @enderror
              </div>
  
              <!-- Google reCaptch-->
              <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="6LfNmS0UAAAAAO_ZVFQoQmkGPMlQXmKgVbizHFoq"></div> -->
            </div>
            <div class="submit-button text-center">
              <button name="submit" type="submit" value="Send" class="button">
                <span> ارسال </span> <i class="fa fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  