<?php
 $e="$maps";
?>

<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOQL8cDK_hEoMNOsAYNcQsI_HuQR1G3bM&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(<?php echo $e?>);
var marker;

function initialize1()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap1"),mapProp);

marker=new google.maps.Marker({
  position:myCenter,
//animation:google.maps.Animation.BOUNCE 
  
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:'<?php echo "<p align=\"right\"><b>$school</b></p>";?>'
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize1);







function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:10,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>



<div id="googleMap1" style="width:500px;height:300px;margin-left:25%;margin-right:25%;"></div>
<!--<div id="googleMap" style= "width:500px;height:380px;margin-left:25%;margin-right:25%;"></div>!-->






