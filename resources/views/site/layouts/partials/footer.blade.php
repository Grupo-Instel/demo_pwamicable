{{--fOOTER--}}
<div style="background-color: {{ session('footerColor') }}"> 
        <div class="container">
           <!-- Footer -->
            <!-- Por Defecto -->
            <div class="row " style="padding-top: 5px;padding-bottom:10px">
                <!-- Derechos -->
                <div class="col-md-4 d-none d-md-block d-sm-none" style="color: {{ session('textFooterColor') }}; padding-top:15px;">
                    <font size=4>&copy; Derechos reservados Instel 2021</font><a href="https://beenet.com.sv"></a>
                </div>
                <!-- Logo -->
                <div class="col-md-3">
                    <div class="row" id="footerLogo">
                        <div class="col-md-5 offset-md-5 d-none d-md-block d-sm-none" style="padding-top:15px">
                            <img src="{{ asset(session('footerLogo')) }}" width="120" class="d-inline-block align-top" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <!-- Redes Sociales -->
                <div id="footerRS" class="col-md-3 offset-md-2 d-none d-md-block d-sm-none" style="color: {{ session('textFooterColor') }};">
                    <div style="padding-left: 20px;">
                        <center>
                            @foreach (session('rs') as $rs)
                                <a href="{{$rs->url}}" target="_blank" style="text-decoration: none">
                                    <img src="{{ asset($rs->logo) }}" alt="" width="30" height="30">
                                </a> 
                            @endforeach
                            <font size=4>info@instel.site</font>
                        </center>
                    </div> 
                </div>
            </div>
            <!-- mobile SM-->
            <div class="row d-none d-md-none d-sm-block" >
                <!-- Logo -->
                <div class="col-sm-12 d-none d-md-none d-sm-block">
                        <div class="col-sm-12" style="padding-right: 30px">
                            <center>
                            <img src="{{ asset(session('footerLogo')) }}" width="140" class="d-inline-block align-top" alt="" loading="lazy">
                            </center>
                        </div>
                </div>
                <!-- Derechos -->
                <div class="col-sm-12 d-none d-md-none d-sm-block" style="color: {{ session('textFooterColor') }}; margin-right:50px;">
                    <center>
                        <font size=4>&copy; Derechos reservados Instel 2020</font><a href="https://beenet.com.sv"></a>
                    </center>
                </div>
    
                <!-- ------ ----- ------ ----- -->
            </div>
            <!-- mobile XS-->
            <div class="row d-block d-sm-none" >
                <!-- Logo -->
                <div class="col-xs-12 d-block d-sm-none">
                        <div class="col-xs-12" style="padding-right: 30px">
                            <center>
                            <img src="{{ asset(session('footerLogo')) }}" width="100" class="d-inline-block align-top" alt="" loading="lazy">
                            </center>
                        </div>
                </div>
                <!-- Derechos -->
                <div class="col-xs-12 d-block d-sm-none" style="color: {{ session('textFooterColor') }}; padding-right:40px;">
                    <center>
                        <font size=3>&copy; Derechos reservados Instel 2020</font><a href="https://beenet.com.sv"></a>
                    </center>
                </div>
    
                <!-- ------ ----- ------ ----- -->
            </div>
        
        </div>
    
</div>
