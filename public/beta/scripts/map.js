/**
 * Copyright (c) Artis Avocat
 * @author Bruno Kerrien
 */

var geocoder;
var icon;
var zoomed;
var marker;
var map;
var route;
var directions;
var destination = "11 boulevard de la Roche du Roi, 73100 Aix-les-Bains, France";

function load(){
    if (GBrowserIsCompatible()) {
        geocoder = new GClientGeocoder();
        geocoder.getLatLng(destination, function(point){
            icon = new GIcon();
            zoomed = false;
            icon.image = "images/pushpin_red.png";
            icon.iconSize = new GSize(32, 32);
            icon.shadow = "images/pushpin_shadow.png";
            icon.shadowSize = new GSize(59, 32);
            icon.iconAnchor = new GPoint(10, 30);
            icon.infoWindowAnchor = new GPoint(19, 3);
            marker = new GMarker(point, icon);
            map = new GMap2(document.getElementById("map"));
            map.setCenter(point, 12);
            map.addControl(new GLargeMapControl());
            map.addControl(new GHierarchicalMapTypeControl());
            map.addControl(new GOverviewMapControl());
            map.addOverlay(marker);
            GEvent.addListener(marker, "click", function(){
                if (zoomed) {
                    map.closeInfoWindow();
                    map.setCenter(point, 12);
                    map.savePosition();
                }
                else {
                    map.setCenter(point, 14);
                    map.savePosition();
                    map.openInfoWindowHtml(point, "<h2>Cabinet Muriel Artis Avocat</h2><p style='margin-bottom: 0'>11, boulevard de la Roche du Roi<br/>73100 Aix-les-Bains<br/>France</p>");
                }
                zoomed = !zoomed;
            });
            route = document.getElementById("route");
            directions = new GDirections(map, route);
        });
    }
}

function loadRoute(from){
    if (from != null && from.length > 0) {
        directions.load("from: " + from + " to: " + destination);
        route.style.background = "none";
        route.style.display = "block";
    }
    else {
        directions.load("from:  to: " + destination);
        map.returnToSavedPosition();
        route.innerHTML = "";
        route.style.background = "url(images/loading.gif) 50% 50% no-repeat";
        route.style.display = "none";
    }
}

function resetRoute(){
    loadRoute("");
}
