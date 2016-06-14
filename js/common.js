//menu link scroll
$('#navbar li a').click(function() {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500);
  return false;
}); 

$('#home a').click(function() {
  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500);
  return false;
}); 



//video popup

var iframe = document.getElementById('vimeoVideo');
// $f == Froogaloop
var player = $f(iframe);

$('#loveXeroVideoBtn').click(function(){
    //player.api('play');
    //$('html, body').animate({scrollTop: 0}, 500);
    $('#overlay').fadeIn(200);
    $('#loveXeroVideo').delay(200).fadeIn(300);       
});      
//close all popup
$('.popup-close-btn, #overlay').click(function(){
    player.api('pause');
    $('.popup-box').fadeOut(100);   
    $('#overlay').delay(100).fadeOut(300);         
});


//custom google map        
var locations = [
  [' <b>ACCOUNTANT IN A BOX</b><br> Boynton Beach, FL, USA <br> 561-596-2724, <br> Email: Info@AccountantInABox.com', 26.531797, -80.090575, 2]
];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 18,
  scrollwheel: false,
  draggable: !("ontouchend" in document),
  center: new google.maps.LatLng(26.531797, -80.090575),
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},        {"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    icon: 'images/map-pin.png',
    map: map
  });

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
}