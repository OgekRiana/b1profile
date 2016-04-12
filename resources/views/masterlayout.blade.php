<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Balian One | Accomodation in Balian Beach</title>

        {!! Html::style('css/app.css') !!}
        {!! Html::style('css/balianone.css') !!}
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}

        <style>
            body { padding-top: 65px; }
            @media (max-width: 979px) {
                body { padding-top: 0px; }
                .img-title{
                    font-size: 40px;
                }
            }
            @media (max-width: 375px) {
                body { padding-top: 0px; }
                .img-title{
                    font-size: 30px;
                }
            }
            p{
                text-align: justify;
            }

          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
              width: 100%;
              height: 300px;
              margin: auto;
          }
        </style>
    </head>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">
                    {!! Html::image('images/logo.png','balian one logo', array( 'width' => 60, 'height' => 30 )) !!}   
                </a>-->
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#home">Home</a></li>
                    <!--<li>{!! HTML::link('/', null, array('id' => 'rate')) !!}</li>
                    <li><a href="{{ URL::route('home') }}">Home</a></li>-->
                    <li><a href="#rate">Rates</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <body> 
        <div class="container">
        <div class="row">      
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8 home" id="home" style="height: 300px;background-image:url('{{ asset('images/logo-color.png') }}');position:relative;background-position: center center; background-size:cover; background-repeat:no-repeat;">   
            </div>
            <div class="col-md-2"></div>
        </div> 
        </div>
        <hr>
        <div class="container"> 
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-xs-12 col-md-8">
                    @yield('content')                    
                </div>
                <div class="col-md-2"></div>
            </div>  
        </div>    
        <div>
            @yield('separator')            
        </div>
        <div class="container">            
            @yield('content2')                
            <hr>                                             
        </div><!-- /.container --> 
        
        <div class="container">
            @yield('balianbeach')            
        </div>


        <div class="rate" id="rate">THE COST</div>
        <div class="rate-block">            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                    <div class="special">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="special-offer">
                                <p>Balian One holding a maximum of 6 people.</p>
                                <p> <h3>Book for 2 person only 700,000 IDR and you have exclusive use of the villa with all the amenities.</h3></p>
                                <p>Get special offer if you stay more than 3 days.</p>
                            
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
                </div>

                <!-- CAROUSEL -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active" style="height:300px; background-image:url('{{ asset('images/terrace.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
                      </div>

                      <div class="item" style="height:300px; background-image:url('{{ asset('images/garden.jpeg') }}'); background-position: center; background-size:cover; background-repeat:no-repeat;">
                      </div>
                    
                      <div class="item" style="height:300px; background-image:url('{{ asset('images/bed.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
                      </div>

                      <div class="item" style="height:300px; background-image:url('{{ asset('images/coridor.jpeg') }}'); background-position: center center; background-size:cover; background-repeat:no-repeat;">
                      </div>

                      <div class="item" style="height:300px; background-image:url('{{ asset('images/front.jpeg') }}'); background-position: top; background-size:cover; background-repeat:no-repeat;">
                      </div>
                    </div>

                </div>
                 <!-- CAROUSEL -->

                 <div class="contact" id="contact">CONTACT US</div>
                 <!-- CONTACT -->
                 <div class="row">
                    <div class="col-md-6">
                        <div class="address">
                            Jalan Pantai Balian, Br. Pengasahan, <br>Desa Suraberata, Kecamatan Selemadeg Barat<br>Tabanan, Bali<br>Indonesia<br>82162<br><br>
                            <span class="glyphicon glyphicon glyphicon-phone"></span> +62-81 338 568 036<br>
                            <span class="glyphicon glyphicon glyphicon-envelope"></span> <a href="mailto:&#098;&#097;&#108;&#105;&#097;&#110;&#111;&#110;&#101;&#046;&#098;&#097;&#108;&#105;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">&#098;&#097;&#108;&#105;&#097;&#110;&#111;&#110;&#101;&#046;&#098;&#097;&#108;&#105;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="balian-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.99861610672!2d114.9626189499636!3d-8.499513688350607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMjknNTguMyJTIDExNMKwNTcnNTMuMyJF!5e0!3m2!1sen!2sid!4v1459153997224" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        
                    </div>
                 </div>

            </div>
        </div>      

        <div class="footer">
            <div class="container footer-text">&copy; 2016 BalianOne.com | Made with &hearts; in Bali, Indonesia</div>            
        </div>
    </body>
</html>
    