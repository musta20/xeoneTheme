<x-layout>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<section class="container" >
    <div class="row justify-content-center border " dir='rtl'>

    
            <div class="section-title text-center">
                <h2>الاستعلام عن حالة الطلب </h2>
            </div>
        
            <form method="POST" action="{{ url('/CheckOrderStatus') }}" >

        @csrf
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
                <div class="mb-3 text-center " >
                    <input type="text" placeholder="رقم الطلب*" class="form-control" name="code">
                    </div>
                </div>
                <div class="submit-button text-center">
                    <input type="hidden" name="action" value="sendEmail">
                    <button id="submit" name="submit" type="submit" value="Send" class="button"><span> ارسال
                        </span> <i class="fa fa-paper-plane"></i></button>
                </div>
                
            </form>
            <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block"
                    src="images/pre-loader/loader-02.svg" alt=""></div>
        </div>
    </div>
</div>







</section>


    <br>
    <br>
    <br>

<br>
<br>
<br>
<br>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
</x-layout>
