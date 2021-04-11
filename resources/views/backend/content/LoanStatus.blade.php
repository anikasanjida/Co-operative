@extends('AdminMain')
@section('content')

<body>
    <form style="margin-left: 100px" class="add_customer_form" action="" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the following details . . .</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>name :</label><br>
                <input name="name" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Gender :</label>
            </div>

            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="gender" value="male" id="male-radio" checked>
                    <label id="radio-label" for="male-radio"><span class="radio">Male</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
                    <label id="radio-label" for="female-radio"><span class="radio">Female</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
                    <label id="radio-label" for="other-radio"><span class="radio">Others</span></label>
                </div>
            </div>
        </div>
        <div class="flex-container">
            <div  class=container>
                <label>Phone No. :</b></label><br>
                <input name="p" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="add" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Loan Balance :</label><br>
                <input name="amt" size="20" type="number" min="0" step=".5"required />
            </div>
        </div>
        <div class="flex-container">
            <div class="container">
                <input type="submit" name="submit"></input>
            </div>


        </div>
        </div>
    </form>

    </body>
    @endsection
