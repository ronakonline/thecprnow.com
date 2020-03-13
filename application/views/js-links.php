
<!-- Javascript -->

<script src="<?php echo base_url(); ?>assests/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-waypoints.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery-validate.js"></script>
<script src="<?php echo base_url(); ?>assests/js/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>assests/js/numinate.min.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.event.move.js"></script>
<script src="<?php echo base_url(); ?>assests/js/jquery.twentytwenty.js"></script>
<script src="<?php echo base_url(); ?>assests/js/booked-calendar.js"></script>
<script src="<?php echo base_url(); ?>assests/js/main.js"></script>

<!-- Revolution Slider -->
<script src="<?php echo base_url(); ?>assests/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/slider.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url(); ?>assests/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

<!-- Javascript end-->
<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>