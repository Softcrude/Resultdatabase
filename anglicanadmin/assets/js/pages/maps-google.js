$(document).ready(function(){var e=new GMaps({el:"#geolocation",lat:-12.043333,lng:-77.028333});GMaps.geolocate({success:function(o){e.setCenter(o.coords.latitude,o.coords.longitude)},error:function(e){alert("Geolocation failed: "+e.message)},not_supported:function(){alert("Your browser does not support geolocation")}});var o=new GMaps({el:"#route",lat:-12.043333,lng:-77.028333});$("#start_travel").click(function(e){e.preventDefault(),o.travelRoute({origin:[-12.044012922866312,-77.02470665341184],destination:[-12.090814532191756,-77.02271108990476],travelMode:"driving",step:function(e){$("#instructions").append("<li>"+e.instructions+"</li>"),$("#instructions li:eq("+e.step_number+")").delay(450*e.step_number).fadeIn(200,function(){o.setCenter(e.end_location.lat(),e.end_location.lng()),o.drawPolyline({path:e.path,strokeColor:"#131540",strokeOpacity:.6,strokeWeight:6})})}})});var t,n;GMaps.createPanorama({el:"#panorama",lat:42.3455,lng:-71.0983});n=new google.maps.InfoWindow({}),t=new GMaps({el:"#fusion",zoom:11,lat:41.850033,lng:-87.6500523}),t.loadFromFusionTables({query:{select:"'Geocodable address'",from:"1mZ53Z70NsChnBMm-qEYmSDOvLXgrreLTkQUvvg"},suppressInfoWindows:!0,events:{click:function(e){n.setContent("You clicked here!"),n.setPosition(e.latLng),n.open(t.map)}}}),s=[[-12.044012922866312,-77.02470665341184],[-12.05449279282314,-77.03024273281858],[-12.055122327623378,-77.03039293652341],[-12.075917129727586,-77.02764635449216],[-12.07635776902266,-77.02792530422971],[-12.076819390363665,-77.02893381481931],[-12.088527520066453,-77.0241058385925],[-12.090814532191756,-77.02271108990476]];var a=new GMaps({el:"#polylines",lat:-12.043333,lng:-77.028333,click:function(e){console.log(e)}});a.drawPolyline({path:s,strokeColor:"#131540",strokeOpacity:.6,strokeWeight:6});var l=new GMaps({el:"#geocoding",lat:-12.043333,lng:-77.028333});$("#geocoding_form").submit(function(e){e.preventDefault(),GMaps.geocode({address:$("#address").val().trim(),callback:function(e,o){if("OK"==o){var t=e[0].geometry.location;l.setCenter(t.lat(),t.lng()),l.addMarker({lat:t.lat(),lng:t.lng()})}}})});var r=new GMaps({el:"#polygons",lat:-12.043333,lng:-77.028333}),s=[[-12.040397656836609,-77.03373871559225],[-12.040248585302038,-77.03993927003302],[-12.050047116528843,-77.02448169303511],[-12.044804866577001,-77.02154422636042]];polygon=r.drawPolygon({paths:s,strokeColor:"#BBD8E9",strokeOpacity:1,strokeWeight:3,fillColor:"#BBD8E9",fillOpacity:.6})});