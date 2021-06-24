// JavaScript Document
 jQuery(document).ready(function($){
  // 地図表示用メソッド
  function map_initialize() {
    // 地図の座標を設定
  var latlng = new google.maps.LatLng(34.703084, 135.495966);
    // 地図の設定
    var map = new google.maps.Map(
      document.getElementById("mapcontent"),
      {
        zoom: 16,  // 地図の拡大率
        center: latlng, // 地図の中心座標
        scrollwheel: false  // マウスホイールでの拡縮を禁止
      }
    );
   // マーカー画像の設定
   var markerImg = {
      url: 'http://portfolio.main.jp/portfolio/web/legal-office01/images/mapicon.svg'
    };
   // マーカーの設定
   var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: markerImg
   });

   // 地図のスタイルにグレースケール設定を追加
   var mapStyle = [{"stylers": [{ "saturation": -100 }]}];
   var mapType = new google.maps.StyledMapType(mapStyle);
   map.mapTypes.set('GrayScaleMap', mapType);
   map.setMapTypeId('GrayScaleMap');
    
  }

  // 地図表示用メソッドの呼び出し
  map_initialize();
 });
    