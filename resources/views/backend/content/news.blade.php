@extends('AdminMain')
@section('content')

<body style="background-image:url(/img/ful.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">
<!-- Button trigger modal -->
<div class=" text-start">
    <a class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add new notice
    </a>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-warning" id="exampleModalLabel">Add new notice</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{route('news.add')}}"class="container">
            @csrf

            <div class="modal-body bg-dark">

                    <div class=" from-group">
                      <label for="exampleInputEmail1">Enter notice here</label>
                      <textarea type="description" class="form-control" name="news_description" placeholder="Enter news here"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">submit</button>
                      </div>
                  </form>

                    </div>
                  </div>
                </div>
            </div>

</body>
@endsection

