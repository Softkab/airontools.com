    <?php require 'includes/headtwo.php'; ?>
	<script src="/js/angular.min.js"></script>
<script src="/js/angular-sanitize.js"></script>
  <script>
var app = angular.module('myApp', ['ngSanitize']);
app.controller('myCtrl', function($scope, $http) {
  $http({
    method : "GET",
    url : "https://admin.torquealto.com/herramientanombre/<?php echo $producto; ?>"
  }).then(function mySucces(response) {
      $scope.item = response.data;
    }, function myError(response) {
      $scope.item = response.statusText;
  });
});
</script>
	<?php require 'includes/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://www.jose-aguilar.com/scripts/javascript/shadowbox/shadowbox.css" media="screen" />
</head>
<body ng-app="myApp" ng-controller="myCtrl">
<title>{{item.nombre}} - Airon tools</title>

<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
	
                    
       <?php require 'includes/header.php'; ?>
        
		<!-- **Main - Starts** --> 
		<div id="main">
           <div class="parallax full-width-bg">
                <div class="container">
                    <div class="main-title">
                        <h1>{{item.nombre}}</h1>
                        <div class="breadcrumb">
                            <a href="/">Home</a>
                            <span class="fa fa-angle-right"></span>
                            <a href="/herramientas">Herramientas</a>
                            <span class="fa fa-angle-right"></span>
                            <span class="current"> {{item.nombre}} </span>
                        </div>
                    </div>
                </div>
            </div>
        	
           
            <div class="full-width-section grey">
                <div class="dt-sc-margin65"></div>
                <!-- Container starts-->
      <div class="container">
              
                
                <!-- **primary - Starts** --> 
        <section id="primary" class="content-full-width">
                    <!-- **Woocommerce - Starts** -->
                    <div class="woocommerce">
                        <!-- **product - Starts** --> 
                        <div class="product single-product">
                            <!-- **images - Starts** -->
                            <div class="images">
                                <div class="yith_magnifier_zoom_wrap">
                                    <a href="#" class="yith_magnifier_zoom woocommerce-main-image" > 
                                        <img src="{{item.url_image}}" alt="image"/>
                                    </a>
                                </div>
                                
                            </div> <!-- **images - Ends** -->
                            <!-- **summary - Starts** -->
                            <div class="summary entry-summary">
                              <h1 class="product_title entry-title">{{item.nombre}}</h1>
                              <?php                               
                              $urlget="https://admin.torquealto.com/herramientanombre/".$producto;
                                $json=file_get_contents($urlget);  
                               $array =(json_decode($json, true));
                            print_r($array['descripcion']);
                               ?>
                                <div class="description">
                                    <div ng-bind-html="item.descripcion"></div>
                                </div>
                                <div class="project-details">
                                    <h6>Ventajas y Beneficios</h6>
                                    <div ng-bind-html="item.ventajas"></div>
                                </div>
                                <div class="project-details">
                                    <h6>Especificaciones técnicas</h6>
                                    <div ng-bind-html="item.especificaciones"></div>
                                </div>
                             
                            </div> <!-- **summary - Ends** -->
                        </div> <!-- **product - Ends** -->
                    </div> <!-- **Woocommerce - Ends** -->
                    <!-- **dt-sc-tabs-container - Starts** -->
                    <div class="dt-sc-tabs-container type2 woocommerce-tabs">
                         <!-- **dt-sc-tabs-frame - Starts** -->
                        <ul class="dt-sc-tabs-frame">
                            <li> <a href="#">Cotizar</a> </li>
                            <li> <a href="#">Hazme una pregunta</a> </li>
                            
                        </ul>  <!-- **dt-sc-tabs-frame - Ends** -->
                        
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content">
                             <!-- **Full-width-section - Starts** -->
                                <div class="full-width-section grey">
                                   <div class="container">                                                 
                                        

                                        <div class="column dt-sc-one-column">
                                                <form method="post" class="dt-sc-contact-form" action="https://herramientas-industriales.com/cotizacionairon" name="frmcontact">
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span>  <select required name="cotizacion">
                                                    <option value="Cotización">Cotización</option>
                                                          <option value="Solicitud de distribución">Solicitud de distribución</option><option value="Visita Técnica">Visita Técnica</option><option value="Solicitar información">Solicitar información</option><option value="Otro">Otro</option>
                                                        </select>  </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Nombre de Herramienta" name="txtherramienta" value="{{item.nombre}}"  /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="number" placeholder="Cantidad" name="txtcantidad" value="1"  /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <input type="text" placeholder="Nombre*" name="txtname" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Nombre de la empresa*" name="txtempresa" value="" required /> </span> </p>
                                                </div>
                                                 <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Dirección*" name="txtdireccion" value="" required /> </span> </p>
                                                </div>
                                                                                            
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <input type="email" placeholder="Email*" name="txtemail" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Teléfono" name="txtphone" value="" /> </span> </p>
                                                </div>
                                                <p> <textarea placeholder="Mensaje*" name="txtmessage" required ></textarea> </p>
                                                <p> <input type="submit" value="Enviar Mensaje" name="submit" /> </p>
                                            </form>
                                            <div id="ajax_contact_msg"></div>
<i class="fa fa-times cerrarmodal" aria-hidden="true" style="visibility: hidden;"></i>
                                        </div>

                                    </div>
                                    <div class="dt-sc-margin65"></div>
                                </div> <!-- **Full-width-section - Ends** -->
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                        
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content">
                        <div class="full-width-section grey">
                                    
                                    <div class="container">
                                                  
                                        

                                       
                                        <div class="column column dt-sc-one-column">
                                            
                                            <form method="post" class="dt-sc-contact-form" action="/HacerPregunta" name="frmcontact">
                                                <div class="column dt-sc-one-third first">
                                                    <p> <span> <input type="text" placeholder="Nombre*" name="txtname" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="email" placeholder="Email*" name="txtemail" value="" required /> </span> </p>
                                                </div>
                                                <div class="column dt-sc-one-third">
                                                    <p> <span> <input type="text" placeholder="Teléfono" name="txtphone" value="" /> </span> </p>
                                                </div>
                                                <p> <textarea placeholder="Mensaje*" name="txtmessage" required ></textarea> </p>
                                                <p> <input type="submit" value="Enviar Mensaje" name="submit" /> </p>
                                            </form>
                                            <div id="ajax_contact_msg"></div>
                                        </div>

                                    </div>
                                    <div class="dt-sc-margin65"></div>
                                </div> <!-- **Full-width-section - Ends** -->
                            
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                        
                        <!-- **dt-sc-tabs-frame-content - Starts** -->
                        <div class="dt-sc-tabs-frame-content">
                            
                        </div> <!-- **dt-sc-tabs-frame-content - Ends** -->
                        
                    </div> <!-- **dt-sc-tabs-container - Ends** -->
                    
                    <div class="dt-sc-margin30"></div>
                    <!-- **hr-title - Starts** -->
                  
                    
                    <div class="dt-sc-margin10"></div>
                    
                </section> <!-- **primary - Ends** --> 
            </div> <!-- **container - Ends** --> 
                </div>
                
            <?php require 'includes/ayuda.php'; ?>
        	
        	
			   

			

			
            
           
            
          

			       
        </div> <!-- **Main - Ends** --> 
       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <!-- **Footer** -->
       <?php require 'includes/footer.php'; ?>
        
	</div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->

	<?php require 'includes/js.php'; ?>
    
    <script type="text/javascript" src="https://www.jose-aguilar.com/scripts/javascript/shadowbox/shadowbox.js"></script>

<script type="text/javascript">
Shadowbox.init();
</script>
</head>
<body>
<a rel="shadowbox;width=405;height=340;" title="Shakira" href="https://www.youtube.com/embed/mZ6RfQxTmnI">Ver video</a>


</body>
</html>