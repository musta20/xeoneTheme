<x-layout>



    <section dir="rtl" class="page-section-pb">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>   <br>   <br>
        <br>
   
        <div class="container w-75">
             <h3>
        {{$blog->title}}
        </h3>
                <hr>

        <br>
        <img width="65%" src="{{url('storage/'.$blog->img)}}"  />
                
                <br>


        <p class="text-justify lh-lg"> 
        {{$blog->des}}
</p>
            </div>









    <style>

        .topqute{
            top:100px !important;
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












    </section>




</x-layout>
