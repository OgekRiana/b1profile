@extends('masterlayout')

@section('content')
  <p>
    BALIAN ONE was inaugurated in March 2016. It is a privately owned and was designed with 3 bedroms to acomodate up to 6 people comfortably. With the private terrace, rooftop, and beautiful garden, Balian One becomes a perfect place to getaway from the city bustle.
  </p>
@stop

@section('separator')
	<div style="height: 120px; margin-top:15px; margin-bottom:30px; background-color:#5ce78d">
  </div>
@stop

@section('content2')
  <div class="row">
    <div class="col-md-6">
        <h2>MORE ABOUT BALIAN ONE . . .</h2>
        <p>
            Balian One can be reached around 2 hours from Ngurah Rai International Airport. We can organize a pick up/drop off transport for you upon request. We have reliable English speaking driver who know the location of the villa. If you have another plan for a trip, we would more than happy to help you arrange it. Staying at Balian One you can easily rent a car, scooter, or organize a private driver, just tell us what you need.
        </p> 
        <p>
             All the rooms are facilitated with a fan, private toilet, and a terrace with a stunning view. Outdoor kitchen is also available for you. Balian One is a great location being only 200 meters from the surf beach, Balian Beach. No need to worry about the access, everything is in walking distance. There are also some cafes with yummy food along the way to the beach. You can see the beautiful sunset while enjoying a glass of beer.
        </p> 
    </div>
    <div class="col-md-6">
        <!-- CAROUSEL -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active" style="height:300px; background-image:url('{{ asset('images/outside.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">                
              </div>

              <div class="item" style="height:300px; background-image:url('{{ asset('images/rooftop.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
              </div>
            
              <div class="item" style="height:300px; background-image:url('{{ asset('images/bathroom.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
              </div>

              <div class="item" style="height:300px; background-image:url('{{ asset('images/bed.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
              </div>

              <div class="item" style="height:300px; background-image:url('{{ asset('images/living.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
              </div>

              <div class="item" style="height:300px; background-image:url('{{ asset('images/moon.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
              </div>

              <!--<div class="item">
                {!! Html::image('images/coridor.jpeg','balian one coridoor', array( 'width' => 300, 'height' => 200 )) !!}
              </div>-->
            </div>

            <!-- Left and right controls -->
            
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

        </div>
         <!-- CAROUSEL -->
    </div>

    <hr>
</div>   
@stop

@section('balianbeach')
    <div class="col-xs-12" style="height: 220px; background-image:url('{{ asset('images/wave.jpeg') }}');position:relative;background-position: center; background-size:cover; background-repeat:no-repeat; margin-bottom:50px; margin-top:30px"> 
        <div class="background-overlay"></div>
        <div class="img-title">BALIAN BEACH</div>
    </div>   
    <div class="balian-review">
        <h2>FAVORITE THINGS AT BALIAN</h2>
        <p>
            Do you want a holiday away from the bustle of the city? Balian is the right place for you. Balian beach known by its waves which is very good for surfing, especially for novice surfers. For those of you who like to surf Belian Beach must be already on your list. But for those who have never tried surfing in balian beach, it does not hurt to give it a try because it will make you addicted. If you have difficulty to bring their own surfboard, here also provided rental surfboard with a reasonable price.
        </p>
        <p>    
            In addition to surfing, another activity you can do in Balian is yoga. Yoga becames one of the favorite of visitors here for a very soothing atmosphere Balian. Far from the city, perfectly suited to help you concentrate and relaxation. And the activity which become favorite for most people is MASSAGE !! very pleasant but sad ending. Balian ONE can arrange a massage for you upon request. 
        </p>                
    </div>
    <div class="row balian-img">
        <div class="col-sm-12 col-md-4 col-lg-4">                    
            <div class="balian-surf">                                            
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="balian-yoga">                       
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="balian-sunset">
            </div>
        </div>
    </div>
@stop