@extends('UserMain')
@section('content')

<body>
    {{-- <form style="margin-left: 100px" class="add_customer_form" action="atm_simulation_req.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Cooperative Society</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Enter Amount:</label><br>
                <input name="amt" size="24" type="number" min="0" step=".5" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Type :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="type" value="debit" id="debit-radio" checked>
                    <label id="radio-label" for="debit-radio"><span class="radio">Withdraw</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="type" value="credit" id="credit-radio">
                    <label id="radio-label" for="credit-radio"><span class="radio">Deposit</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div  class=container>
                <label>PIN(4 digit) :</b></label><br>
                <input name="pin" size="12" type="password" required />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form> --}}


    <form class="container w-25 my-5">


        <div class="modal-body bg-info" style="height: 450px;">

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Request Type</label>
                    <select class="form-control" name="gender" id="" aria-label="Default select example">
                        <option value="Null" >select from here</option>
                        <option value="Male">Loan</option>
                        <option value="Female">Withdraw</option>

                      </select>

                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Member id</label>
                    <input type="id" class="form-control"name="member_id" placeholder="Enter Your ID">

                  </div>
                  <div class=" from-group">
                    <label for="exampleInputEmail1">Account No.</label>
                    <input type="id" class="form-control"name="account-No" placeholder="Enter Your Account No.">

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">phn_no</label>
                    <input type="tel" class="form-control" name="phon_no" placeholder="Enter phn_no">
                </div>
                <div class=" from-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control"name="email" placeholder="name@example.com">

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">Requested Amount</label>
                    <input type="text" class="form-control"name="R_Amount" placeholder="10000000">

                  </div>



                <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-warning">submit</button>
        </div>
    </div>
    </form>

    <script>
        function confirmReset() {
            return confirm('Do you really want to reset?')
        }
    </script>

    </body>
    @endsection
