var lat = document.getElementById("lat").innerText;
var lon = document.getElementById("lon").innerText;

if(lat !== null && lon !== null) {  
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([lon, lat]),
            zoom: 8
        })
    });
}