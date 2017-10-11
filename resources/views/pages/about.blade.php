@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../img/about-1.jpeg">
            </div>

            <div class="item">
                <img src="../img/about-2.jpeg">
            </div>

            <div class="item">
                <img src="../img/about-3.jpeg">
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
    <p class="col-sm-4">
        Welcome to Restauratours, your one trip destination to the finest food in the City of Melbourne. Restauratours is a delivery hire system that helps to transfer the finest food found across a multitude of restaurants that sponsor us as well as our customers whom will be taking advantage of our services to see the beautiful sights that the City of Melbourne has to offer. What started out as just a single restaurant food chain soon grew into what it is today. Our drivers have been handpicked and hired based on their knowledge of the City of Melbourne and you can think of them as your own personal tour guide. Our main form of contact Clare Wentworth has been involved with Restauratours since the humble beginnings and seen the progress that has been made throughout the years. Here at Restauratours, we allow for a fast delivery service of food straight to your home or a grand tour around the City of Melbourne. Through a variety of vehicles, take your friends around the many landmarks of the City of Melbourne and enjoy the bright lights in the big city with Restauratours today.
    </p>
    <p class="col-sm-4">
        At Restauratours, we provide a number of services that both customers and restaurants can take advantage of. These services include being able to have food delivered straight to your door as well as being able to be taken around the City of Melbourne in a variety of different types of vehicles. The main service that Restauratours offers is its food delivery service that will allow for the customer to be able to have their favourites foods delivered straight to them from a selected selection of restaurants. These transactions are the most simple and basic function of the website and is what has made Restauratours so renowned with a variety of restaurants and customers alike.
    </p>
    <p class="col-sm-4">
        In addition to our food delivery service, you can also request for the delivery driver to not only deliver your food from your chosen restaurant straight to you but also to take you around the City of Melbourne. This requires the customer to book ahead of time as a designated delivery driver will need to be selected and along with all of the other services for other customers that are being conducted, it will be difficult to be able to properly accommodate the service. Utilising this service along with the food delivery offers the best experience for whomever you wish to take with you and our vehicles can accommodate this as well. Select from our variety of vehicles that are available and take your friends while enjoying a nice meal from some of your favourite selected restaurants. You can even select from a variety of scenic routes that you may wish to try upon each new visit. Restaurants will not feel left out either as through a sponsorship with Restauratours, you can have your restaurant advertised exclusively on our website and also be along our path of scenic routes for more attention from customers as well as receive benefits and potentially new customers.
    </p>
@endsection
