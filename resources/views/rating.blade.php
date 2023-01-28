<x-layout>
    <br>
    <br>
 
     <br>
    <br>
 
    <br>    <br>    <br>    <br>    <br>    <br>
    <section class="mainPage">


        <form dir="rtl" method="POST" class="colorTexetFooter" action="{{ url('/SaveRating/'.$token) }}"
            enctype="multipart/form-data">

            @csrf

            <h3 class="colorTexetFooter text-center">  اضافة تقييم</h3>
            @if (session()->has('messages'))
                <div class="alert alert-success">
                    <p><strong>{{ session('messages') }} </strong></p>

                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <p><strong>حدث خطاء</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
       

         
            <div class="input-box">
                <textarea name="des" id="des" class="input-form" cols="30" rows="5"
                    placeholder="  اضافة تعليق">{{ old('des') }}</textarea>
                @error('exp_des')
                    <span class="helper">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="input-box">
                <input name="title" class="input-form" 
                value="{{ old('title') }}"
                    placeholder="   المسمى الوظيفي" />
                @error('title')
                    <span class="helper">
                        {{ $message }}
                    </span>
                @enderror
            </div>

                        <div class="input-box">
                        <span>صورة شخصية</span>
                <input name="img" type='file' class="input-form"  />
                @error('img')
                    <span class="helper">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            <div class="input-box">
                <div> التقييم </div>


                <select class="input-form w-50" name="rate">
                    <option value="5" selected>5</option>
                    <option value="4" >4</option>
                    <option value="3" >3</option>
                    <option value="2" >2</option>
                    <option value="1" >1</option>
                   
                </select>
            </div>






            <br>
       
              <div class="" style="height: auto !important; ">
      
                <button class="button " type="submit" name="submit"> تأكيد الطلب </button>
            </div>
            </div>
            </div>
        </form>
    </section>
    <style>
        .helper {
            text-shadow: none;
            color: #df1e00;
        }



        .mainPage {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mainPage form {
            width: 100%;
            max-width:1200px !important;
            font-size: medium;
            font-weight: 500;
            background-color: #fff;
            box-shadow: 0 0 5px rgb(187 187 187);
        }

        form {
            padding: 3em;
            display: flex;
            flex-direction: column;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0.5em;
            padding-bottom: 2.5em;
        }

            .input-form {
                height: 3.5em !important;
                padding: 5px 10px !important;
                border-radius: 0.3em;
                border: none  !important;
                background-color: #f5f5f5;
            }

        .TowInput {
            display: flex;
            flex-direction: row;
            gap: 0.5em;
            padding-bottom: 2.5em;
        }
    </style>
  


</x-layout>
