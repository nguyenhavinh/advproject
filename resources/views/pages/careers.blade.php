@extends('layouts.app')

@section('content')    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000"s>
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../img/careers-1.jpeg">
            </div>

            <div class="item">
                <img src="../img/careers-2.png">
            </div>

            <div class="item">
                <img src="../img/careers-3.png">
            </div>
        </div>

  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div>Restauratours offers a variety of different jobs for the drivers of our vehicles. Primarily you will be required to pick up food from our sponsored restaurants and then deliver that to the customers at their selected destination. This is considered the most simple and basic transaction between you and the customer. Our drivers also assist in navigating through the City of Melbourne as a sort of tour guide either to a destination that a customer requests or along a scenic route that passes by many sponsored restaurants.</div>
    <br>
    <div>To become a driver for Restauratours you will need to ensure that you have a vast knowledge of the City of Melbourne and are able to properly communicate as a tour guide for the customer who will be utilising the service. In addition to this, you will need to provide some form of resume or qualifications detailing why you would be best for this job and how you can best represent Restauratours. These criteria will be used to assess your skills amongst other people to determine whether you are suitable for the job.</div>
    <br>
    <div>Once these details have been completed, then they can be sent to our company email address found at restauratours.careers@bigpond.com. </div>
    <br>
    <div>Sign up for your evaluation and become one of our drivers today.</div>
@endsection
