@extends('AdminMain')
@section('notice')


<!-- Button trigger modal -->
<div class=" text-start">
    <a class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add notice
    </a>
    </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-warning" id="exampleModalLabel">Add new member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{route('notice.add')}}"class="container">
            @csrf

            <div class="modal-body bg-info">

                    <div class=" from-group">
                      <label for="exampleInputEmail1">Enter notice here</label>
                      <input type="text" class="form-control"name="news" placeholder="Enter notice">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">submit</button>
                      </div>
                  </form>
                    </div>
                  </div>
                </div>


@endsection

