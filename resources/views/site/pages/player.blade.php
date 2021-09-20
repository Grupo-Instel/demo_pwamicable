@extends('site.layouts.template')

@section('content')
@include('site.layouts.partials.navplayer');

    <br>
    <br>
    <br>
    
    <!-- Guarda valor de stream enviado por URL desde portfolio -->
    <form action="">
        @if (is_null($lista))
            <input id="stream" type="hidden" value="{{ $_GET['channel'] }}">
        @else
            <input id="stream" type="hidden" value="{{ $lastStream }}">
        @endif
    </form>
    
    <div class="container">
        <!-- div id="myDiv"></div -->
        <!-- Theoplayer -->
	    <div class="row">
            <div class="col-md-12">
                <center>
                <div style="width:87%;">
                    <div class="theoplayer-container video-js theoplayer-skin vjs-16-9"></div>
                </div>
                </center>
            </div>
        </div>
        <!-- Formualrio con SELECT de Categorias --> 
        <div class="row" style="margin-top:7px">
	        <div class="col-md-4"> </div>
            <div class="col-md-4">
                <form action="{{route('filter')}}" method="post" name="formCategoria">
                    @csrf
                    <div class="form-group">
			            <center>
                            <select data-style="btn-secondary" class="selectpicker show-tick" name="select-category" id="select-category" onchange="enviarCategoria()">
                                <option value="0">Todos</option>
                                @if ($idCategoria=='0')
                                    @foreach (session('categories') as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                    @endforeach   
                                @else
                                    @foreach (session('categories') as $category)
                                        @if ($category->id == $idCategoria)
                                            <option selected value="{{ $category->id }}">{{ $category->name }}</option> 
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option> 
                                        @endif 
                                    @endforeach  
                                @endif
                            </select>
     			        </center>
                    </div>
                    <input type="hidden" id="lastStream" name="lastStream">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <!-- Slide Dinamico de Canales -->
        <div class="row" style="margin-top:5px">
            <div class="col-md-12">
                <div class="slidePlayer">
                    @foreach (session('channels') as $channel)
                        @if (is_null($lista) || $idCategoria == '0')
                            <div class="cat-{{$channel->genre_id}}">
                                <center>
                                    <img ondblclick="setStream('{{ $channel->stream_url }}')" src="{{ $channel->icon_url }}" class="img-fluid" alt="Imagen No Disponible"  width="75" height="75">
                                </center>
                            </div>
                        @else
                            @if ($channel->genre_id == $idCategoria)
                                <div class="cat-{{$channel->genre_id}}">
                                    <center>
                                        <img ondblclick="setStream('{{ $channel->stream_url }}')" src="{{ $channel->icon_url }}" class="img-fluid" alt="Imagen No Disponible"  width="75" height="75">
                                    </center>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>   
    </div>
    
@endsection

@section('js_barprogressive')
    <!-- 
    <script>
        function animar(){
            document.getElementById("barProgresive").classList.toggle("final");
        }

        if(FWDUVPlayer.PLAY){
            //player1.addListener(FWDUVPlayer.PLAY);
            console.log("********* API -- play************ ");
        }
    </script>
    -->
@endsection

@section('js_theoplayer')
   <!-- Script Theoplayer -->
    <script>
        var element = document.querySelector(".theoplayer-container");
        var player = new THEOplayer.Player(element, {
            libraryLocation: "https://cdn.myth.theoplayer.com/93c9b561-6745-4e44-bc7a-6bb0df67608d",
            license: "sZP7IYe6T6P13oh_IS3K0mklID0tFSat0u0-CSAe3Zz_ClAK3SC_ISBt0Da6FOPlUY3zWokgbgjNIOf9flekCSezCSeZFDhcIuh-3Q0_06k60LBoFDCcIlfz3Lei3L5k0OfVfK4_bQgZCYxNWoryIQXzImf90SCc3L5c0l5i0u5i0Oi6Io4pIYP1UQgqWgjeCYxgflEc3lBcTuat0LB_3lR_FOPeWok1dDrLYtA1Ioh6TgV6UQ1gWtAVCYggb6rlWoz6FOPVWo31WQ1qbta6FOfJfgzVfKxqWDXNWG3ybojkbK3gflNWfGxEIDjiWQXrIYfpCoj-f6i6WQjlCDcEWt3zf6i6v6PUFOPLIQ-LflNWfK1zWDikfgzVfG3gWKxydDkibK4LbogqW6f9UwPkIYz",
        ui: {
                width: "900px",
                height: "300px"
            }

        });

        //Recuperando stream Seleccionado en portfolio
        let stream = document.getElementById('stream').value;
        //Guarda Stream en campo oculto formulario
        var str = document.getElementById('lastStream');
        str.setAttribute('value',stream);

    	//Obtener Resolucion de Dispositivo
    	/*
            if(window.screen.width<1024){
    		alert("Pantalla Pequena");
    	} 
    
    	if(window.screen.width>1024){
    		alert("Pantalla Mediana o Grande");
    	}*/
    	

        // OPTIONAL CONFIGURATION
        // Customized video player parameters
        // Aqui carga el stream la primera vez
        player.source = {
            sources: [{
                "src": stream,
                "type": "application/x-mpegurl",
                "lowLatency": false
            }],
            // Advertisement configuration
            //https://beenet.com.sv/app/recursos_cmsbee/adv/VAST.xml
            /*
            ads: [{
                "sources": "//cdn.theoplayer.com/demos/preroll.xml",
                "timeOffset": "start",
                "skipOffset": "2"
            }]
            */
        };

        player.autoplay = true;
        player.preload = 'auto';   

        //Funcion que se llama al cambiar de canal - setea el stream nuevo en el player
        function setStream(stream){
            player.source =  {
                sources: [{
                    "src": stream,
                    "type": "application/x-mpegurl",
                    "lowLatency": false
                }]
            };

            var str = document.getElementById('lastStream');
            str.setAttribute('value',stream);
            
        }

        function enviarCategoria(){
            var categoria = document.getElementById('select-category').value;
            //Envia el formulario
            document.formCategoria.submit();
        }
        
    </script>
@endsection

@section('slidePlayer')
    <script type="text/javascript">
        /* Slide de Canales debajo del reproductor */
        $('.slidePlayer').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

        });
        
    </script>
@endsection

