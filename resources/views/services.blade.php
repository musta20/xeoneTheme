<x-layout>



    <section dir="rtl" class="page-section-pb">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container ">




            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($services as $item)
                    <div class="col-md-4 xs-mb-40 ">
                        <div class="feature-box h-100 parents">
                            <div class="feature-box-content">
                                <i class="{{ $item->icon }} blue"></i>
                                <h4>{{ $item->name }} </h4>

                           

                            </div>
                            <div class="feature-box-img" style="background-image: url('{{ url('storage/' . $item->img) }}')">
                            </div>
                            <span class="feature-border"></span>
                                                                                <a class="childS" href="{{ url('order/' . $item->id) }}"> طلب </a>

                        </div>

                    </div>
                @endforeach


            </div>


            










<style>



 .parents {
            display: flex;
            flex-direction: column;
        }

        .childS {
            margin-top: auto !important;
        }


</style>






    </section>





    <br>
    <br>
    <br>
    <br>






</x-layout>
