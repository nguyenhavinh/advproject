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
                <img src="../img/mycus-a.jpg">
            </div>

            <div class="item">
                <img src="../img/mycus-b.jpg">
            </div>

            <div class="item">
                <img src="../img/mycus-c.jpg">
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
    <p>Restauratours has always put their customers first so making a delivery hire system just seemed natural for what we wanted to accomplish. Combining food delivery with scenic routes around the City of Melbourne just seemed natural considering the increase in popularity of similar services. When we talk about our customers, we don't just mean the people who utilise our services, we also mean the large variety of restaurants who have sponsored us and are included in some of our scenic routes. Feel free to browse their websites below and use our service to be able to order your favourite foods from them and be taken through the grand city of Melbourne all at once. Of course we can't forget about all of our loyal customers that support us by ordering through our sponsors as well as touring the City of Melbourne utilising our service and helping to get the word out there. Without you Restauratours is not what it is today or what it will become in the future.</p>
    <br>
    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
        <a href="http://punchlane.com.au/"> <img src="../img/mycus-1.png" class="img-responsive"> </a>
        <br>
        
    </div>

    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
        <a href="http://www.vuedemonde.com.au/"> <img src="../img/mycus-2.png" class="img-responsive"></a>
        <br>

    </div>

    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
        <a href="http://www.bergeracrestaurant.com.au/"><img src="../img/mycus-3.png" class="img-responsive"></a>
        <br>
    </div>
    
@endsection
