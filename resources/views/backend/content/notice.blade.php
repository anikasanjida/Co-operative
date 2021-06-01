@extends('main')
@section('notice')

{{-- <!-- Button trigger modal -->
<div class=" text-start">
    <a class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
        View notice
    </a>
    </div> --}}

       {{-- Table title --}}
{{-- <body style="background-image:url(/img/nn.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed"> --}}
<div class="title text-center mb-3 bg-light text-dark">
    <h3 class="font-weight-bolder p-1 m-5">Notice List</h3>

 </div>


     {{-- table --}}

        @foreach ($new as $key=>$item )

         <div class="container">
            <div class="alert alert-dark" role="alert">
                <p><span>{{ $key+1 }}) </span>{{ $item->news_description }}  <span class="text-primary">{{$item->created_at}}</span> <span >
            </div>


         </div>
         @endforeach

        </body>
@endsection

