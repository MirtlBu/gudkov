<script>

gdMap = {
  init: function(){
    gdMap.initMap();
  },
  
  initMap: function(){
    
    gdMap.map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 55.76, lng: 37.64}
    });


  },

};

</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QFnZAC1l-koq08KZi8tQilnvf_FbLGo&signed_in=true&callback=gdMap.init"></script>






  
<center>
  <div id="map"></div>
</center>