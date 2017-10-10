    <?php require 'includes/headone.php'; ?>
	
	<?php require 'includes/head.php'; ?>
</head>
<body>

<!-- **Wrapper** -->
<div class="wrapper"> 
	<div class="inner-wrapper">
    	
	
                    
       <?php require 'includes/header.php'; ?>
        
		<!-- **Main - Starts** --> 
		<div id="main">
            <?php require 'includes/parallax.php'; ?>
        	
           
            <!-- **Full-width-section - Starts** -->
            <div class="full-width-section grey">
            <div id="map"></div>
                <div class="dt-sc-margin65"></div>

                <div class="container">
                              
                    

                    <div class="column dt-sc-one-fourth">
                        <h3>Contactanos</h3>
                        <div class="dt-sc-margin15"></div>
                        <p class="dt-sc-contact-detail"> Ciudad de México </p>
                            <!-- **dt-sc-contact-info - Starts** -->
                            <div class="dt-sc-contact-info">
                                <p> <i class="fa fa-location-arrow"></i> <span>Calzada de Guadalupe #572 <br>Col Industrial Del. Gustavo A. <br>Madero México, D.F. CP 07800</span> </p>
                                <p> <i class="fa fa-phone"></i> (55) 8589 7373 </p>
                                <p> <i class="fa fa-globe"></i> <a href="https://airontools.com"> airontools.com </a> </p>
                                <p> <i class="fa fa-envelope"></i><a href="mailto:airon@airontools.com"> airon@airontools.com </a>  </p>
                            </div> <!-- **dt-sc-contact-info - Ends** -->
                    </div>
                    <div class="column dt-sc-three-fourth first">
                        <div class="hr-title dt-sc-margin35">
                            <h3>Envianos un mensaje</h3>
                            <div class="title-sep">
                            </div>
                        </div>
                        <form method="post"  action="https://herramientas-industriales.com/contactoairon" name="frmcontact">
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
<i class="fa fa-times cerrarmodal" aria-hidden="true" style="visibility: hidden;"></i>
                    </div>

                </div>
                <div class="dt-sc-margin65"></div>
            </div> <!-- **Full-width-section - Ends** -->
            
            <?php require 'includes/ayuda.php'; ?>
        	
        	
			   

			

			
            
           
            
          

			       
        </div> <!-- **Main - Ends** --> 
       
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <!-- **Footer** -->
       

       <?php require 'includes/footer.php'; ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2rZ9fSrYxrKL_FAo1KUVl5iZYm9CGdD0&callback=initMap"
    async defer></script>
    <script>

      function initMap() {
        var myLatLng = {lat: 19.478092, lng:  -99.120328};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
        
	</div><!-- **inner-wrapper - End** -->
    
</div><!-- **Wrapper - End** -->

	<?php require 'includes/js.php'; ?>
    
          

</body>
</html>