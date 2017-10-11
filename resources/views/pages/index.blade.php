@extends('layouts.app')

@section('content')
    <div id="showcase" class="home">
        <h1>Welcome to Restauratours</h1>
        <a href='/about' class='button'>Read More</a>
    </div>
    
    <div class="col-sm-4">
        <h3 class="title">Our Customers</h3>
        <p>Feel free to browse their websites below and use our service to be able to order your favourite foods from them and be taken through the grand city of Melbourne all at once. <a href="/mycustomers">Go...</a></p>        
    </div>
    <div class="col-sm-4">
        <h3 class="title">Our Charities</h3>
        <p>As a part of our business, the community event is also the main role of our service. Please feel free to discover Restauratours Charity Partners. <a href="/charities">Go...</a></p>        
    </div>
    <div class="col-sm-4">
        <h3 class="title">Careers</h3>
        <p>Restauratours offers a variety of different jobs for the drivers of our vehicles. Primarily you will be required to pick up food from our sponsored restaurants and then deliver that to the customers at their selected destination. Sign up for your evaluation and become one of our drivers today. <a href="/careers">Go...</a></p>        
    </div>
@endsection