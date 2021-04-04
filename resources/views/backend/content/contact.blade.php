@extends('main')
@section('contact')



<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact_style.css">
</head>

<body>
    <div class="container text-center">
        <div class="text-center">
            <h1 id="contact">Contact Us</h1>
        </div>

        <div class="container" style="border-bottom: 0;float-center
                                           border-top-left-radius: 20px;
                                           border-top-right-radius: 20px;width: 800px;">
            <div class="flex-item">
                <h2 id="sub-contact">Corporate Headquarters</h2>
                <p id="sub-contact">
                    Corporate HQ<br>KODEEO GROUP<br>
                    uttara sector:6,road:8,house:14
                </p>
            </div>
            <div class="flex-item">
                <h1 id="sub-contact">General Contact</h1>
                <p id="sub-contact">

                    Phone: 01738269141<br>
                    Email: sanjida123@gmail.com
                </p>
            </div>
        </div>

        {{-- <div class="flex-container" style="border-top: 0;
                                           border-bottom-left-radius: 20px;
                                           border-bottom-right-radius: 20px;"> --}}
<!--            <div class="flex-item">-->
<!--                <h1 id="sub-contact">Customer Care (24x7)</h1>-->
<!--                <p id="sub-contact">-->
<!--                    Toll-Free: 888-966-6992<br>-->
<!--                    Phone: 732-666-5555<br>-->
<!--                    Email: care@&#8203dolphinbank.com-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="flex-item">-->
<!--                <h1 id="sub-contact">Live Chat</h1>-->
<!--                <p id="sub-contact">-->
<!--                    Download our app and live chat<br>-->
<!--                    with our customer care !<br>-->
<!--                    App available on Google Play<br>-->
<!--                    and iPhone-AppStore.-->
<!--                </p>-->
<!--            </div>-->
        </div>
    </div>

</body>
</html>




@endsection
