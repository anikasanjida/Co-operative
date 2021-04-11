@extends('main')
@section('notice')

{{-- <!-- Button trigger modal -->
<div class=" text-start">
    <a class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
        View notice
    </a>
    </div> --}}

       {{-- Table title --}}

<div class="title text-center mb-3 bg-info text-dark">
    <h3 class="font-weight-bolder p-1 m-5">Notice List</h3>

 </div>


     {{-- table --}}

        @foreach ($new as $key=>$item )

         <div>

             <p><span>{{ $key+1 }}) </span>{{ $item->news_description }}</p>
         </div>
         @endforeach


@endsection

