<!-- **jQuery** -->  
	<script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery-migrate.min.js"></script> 
    <?php  if (isset($contacto)) { ?>
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
    <?php  }  ?>
  	
    <script src="/js/pace.min.js" type="text/javascript"></script>
    
	<script src="/js/jquery.tabs.min.js"></script>
    <script src="/js/jquery.tipTip.minified.js"></script>
	
	<script src="/js/jquery-easing-1.3.js" type="text/javascript"></script>
    
    <script src="/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    
    <script src="/js/jquery.inview.js" type="text/javascript"></script>
    <script src="/js/jquery.viewport.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="/js/jquery.nav.js"></script>
    
    <script src="/js/layerslider.transitions.js"></script> 
    <script src="/js/layerslider.kreaturamedia.jquery.js"></script> 
    <script src="/js/greensock.js"></script> 
    
    <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script><script data-cfasync="false" type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_9','jquery'); } else { lsjQuery("#layerslider_9").layerSlider({responsiveUnder: 1240, layersContainer: 1170, startInViewport: false, pauseOnHover: false, forceLoopNum: false, autoPlayVideos: false, skinsPath: 'js/layerslider/skins/'}) } }); </script>
	
	<script src="/js/jquery.jcarousel.min.js" type="text/javascript"></script>
    <script src="/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
	
    <script src="/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	
	<script src="/js/masonry.pkgd.min.js" type="text/javascript"></script>
	
	<script src="/js/responsive-nav.js" type="text/javascript"></script>
	<script src="/js/jquery.meanmenu.min.js" type="text/javascript"></script>
	
	<!-- **Sticky Nav** -->
	<script src="/js/jquery.sticky.js" type="text/javascript"></script>
    
	<!-- **To Top** -->
	<script src="/js/jquery.ui.totop.min.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="/js/twitter/jquery.tweet.min.js"></script>
	
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	
	<script src="/js/jquery.nicescroll.min.js" type="text/javascript"></script>
    
	<script src="/js/custom.js" type="text/javascript"></script>