var loca = $('#location').val();
var latlng = loca.split(",");
var pinss = new kakao.maps.LatLng(latlng[0],latlng[1]);
var mapContainer = document.getElementById('staticMap'), // 지도를 표시할 div
mapOption = {
    center: pinss, // 지도의 중심좌표
    level: 4 // 지도의 확대 레벨
};

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

var imageSrc = '/bin/img/meet_pin.png', // 마커이미지의 주소입니다    
imageSize = new kakao.maps.Size(60, 60), // 마커이미지의 크기입니다
imageOption = {
    offset: new kakao.maps.Point(30, 30)
}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
markerPosition = pinss; // 마커가 표시될 위치입니다

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
position: markerPosition,
image: markerImage // 마커이미지 설정 
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);
map.setDraggable(false);
map.setZoomable(false);

