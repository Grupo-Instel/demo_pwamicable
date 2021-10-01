@extends('site.layouts.template')

@section('content')
<div>
    @include('site.layouts.partials.navbar');
</div>
<br><br><br>

<style>


  @media(max-width: 575px) {
    
  }

  @media(min-width: 576px) and (max-width: 767px) {
   
  }

  @media(min-width: 768px) and (max-width: 991px) {
    
  }

  @media(min-width: 992px) {
   
  }

  #menu {
  position: relative;
  background-color: rgba(0, 0, 0, 0.5);
  height: 1390px;
  z-index: 10;
  width: 280px;
  color: #bbb;
  top: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  opacity: 1;
  font-family: "Source Sans Pro", sans-serif;
}

#menu ul {
  list-style: none;
  margin-top: 0;
  padding: 0;
}
#menu ul li {
  border-bottom: 2px solid rgba(255, 137, 154, 0.5);
}
#menu > ul > li > a {
  border-left: 4px solid #222;
}
#menu ul li a {
  color: inherit;
  font-size: 16px;
  display: block;
  padding: 8px 0 8px 7px;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  font-weight: 600;
}
#menu ul a i {
  margin-right: 10px;
  font-size: 18px;
  margin-top: 3px;
  width: 20px;
}
#menu ul a i[class*="fa-caret"] {
  float: right;
}
#menu ul a:hover,
#menu ul a.active {
  background-color: #111;
  border-left-color: #000000;
  color: #ffcc33;
}
#menu ul a:hover i:first-child {
  color: #ffcc33;
}

#menu ul li {
  height: 60px;
  
}

#menu ul li img {
  height: 50px;
  width: 50px;
}
/* Submenu */
#menu ul li a.active + ul {
  display: block;
}
#menu ul li ul {
  margin-top: 0;
  display: none;
}
#menu ul li ul li {
  border-bottom: none;
}
#menu ul li ul li a {
  padding-left: 30px;
  
}
#menu ul li ul li a:hover {
  background-color: #1a1a1a;
}

 
/* /Submenu */

/* Cuando este a la Izq, para esconderlo posicionarlo a la Izq a -width */
.left {
  left: -240px;
}
.show {
  left: 0;
}

#showmenu {
  margin-left: 100%;
  position: absolute;
  top: 0;
  padding: 6px 10px 7px 10px;
  font-size: 1.3em;
  color: #ffcc33;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  overflow-y: scroll;
  
  
}


.dropdown-item.active, .dropdown-item:active {
  
  background: rgba(234, 137, 154, 0.5);
 
}

.bootstrap-select .dropdown-menu {
  background: rgba(0, 0, 0, 0.5);
}
.dropdown-item {
  background: rgba(0, 0, 0, 0.5);
  color:white;
}

.dropdown-item:hover {
  background: rgba(234, 137, 154, 0.5);
  color: white;
  
}

div.ex1 {
 
  height: 405px;
  width: 270px;
  overflow-y: scroll;
  overflow-x: hidden;
}
</style>


<div class="container-fluid">
  <div class="row text-center text-white">
      
    <div class="col-sm-4 order-2 order-sm-1">
      

     
        <div class="form-group">
          
            <select class="selectpicker show-tick form-control" data-style="btn-dark"  data-width="277px" name="select-category" id="select-category">
              @foreach ($categories as $category) 
                
                  <option value="{{$category->id}}">{{$category->name}}</option>  
                
              @endforeach
            </select>
         
        </div>

        <center>
          
        <!-- menu vertical -->
        <div class="ex1">
          <nav id="menu" class="left show"  >
                  

                  <ul id= "channels-list" >

                    @foreach ($categories as $category) 
                    
                        @if($category -> name =="Favorites")
                            @continue
                        @endif

                        @foreach ($channels as $channel)
                            @if ($channel->genre_id == $category ->id)
                                
                            <li class="{{ $category-> id }}" onclick="setStream('{{ $channel->stream_url }}')"> <img src="{{ $channel -> icon_url }}" onclick="setStream('{{ $channel->stream_url }}')"  class="img-fluid float-left" alt="Imagen No Disponible" > <p style="padding-top:18px;">{{ $channel -> title  }}</p> </li>
                            @endif
                        @endforeach
        
                    @endforeach

                  </ul>
            
              
             
              </a>
          </nav>
        <!--menu vertical -->
        
        </div>
      
 
    </div>

    <div class="col-sm-8  order-1 order-sm-2">
      <center>
          <div style="width:100%;">
              <div class="theoplayer-container video-js theoplayer-skin vjs-16-9"></div>
          </div>  
      </center>  
    </div>
      
  </div>
</div>
    
@endsection


@section('js_theoplayer')
   <!-- Script Theoplayer -->
    <script>
      var element = document.querySelector('.theoplayer-container'); 
      var stream;

      var player = new THEOplayer.Player(element, { 
        libraryLocation: "https://cdn.myth.theoplayer.com/93c9b561-6745-4e44-bc7a-6bb0df67608d",
        license: "sZP7IYe6T6P13oh_IS3K0mklID0tFSat0u0-CSAe3Zz_ClAK3SC_ISBt0Da6FOPlUY3zWokgbgjNIOf9flekCSezCSeZFDhcIuh-3Q0_06k60LBoFDCcIlfz3Lei3L5k0OfVfK4_bQgZCYxNWoryIQXzImf90SCc3L5c0l5i0u5i0Oi6Io4pIYP1UQgqWgjeCYxgflEc3lBcTuat0LB_3lR_FOPeWok1dDrLYtA1Ioh6TgV6UQ1gWtAVCYggb6rlWoz6FOPVWo31WQ1qbta6FOfJfgzVfKxqWDXNWG3ybojkbK3gflNWfGxEIDjiWQXrIYfpCoj-f6i6WQjlCDcEWt3zf6i6v6PUFOPLIQ-LflNWfK1zWDikfgzVfG3gWKxydDkibK4LbogqW6f9UwPkIYz",
      });
      
      //inicializar variable
      var  status = 0;
      $( "#channels-list li") 
                .filter(function( index ) {
                return $( this ).attr( "class" ) != 26;
              }).hide();

      //Cuando el elemento cambia su valor , se guarda el Id de la categoria seleccionada 
      $("#select-category").change(function(){
          var idCategory= $(this).children("option:selected").val();
          
            //evaluar status
            if(status == 0){ 
              filterCategory(idCategory)
              status = 1;
            }
     
            if(status == 1){
              $( "#channels-list li").show();
              filterCategory(idCategory)
              status = 0;
            }
       
    
          //alert("Has seleccionado - " + idCategory);

      });

      function filterCategory(id){

        $( "#channels-list li") 
                .filter(function( index ) {
                return $( this ).attr( "class" ) != id;
              }).hide();
            

      }

      function setStream(stream){
        player.source =  {
          sources: [{
              "src": stream,
              "type": "application/x-mpegurl",
              "lowLatency": false
          }]
        }   
      }

      player.autoplay = true;
      player.preload = 'auto';  


    </script>
@endsection



