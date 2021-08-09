var coffee =
    [
        {
            latlng: new kakao.maps.LatLng(37.509119007861, 127.04085293896414)
        },
        {
            latlng: new kakao.maps.LatLng(37.50888382251963, 127.04344286982202)
        },
        {
            latlng: new kakao.maps.LatLng(37.51061279632977, 127.04596612723736)
        },
        {
            latlng: new kakao.maps.LatLng(37.51010304385601, 127.03479105500482)
        }
    ]

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new kakao.maps.LatLng(37.50945650000564, 127.04195023051872), // 지도의 중심좌표
        level: 4 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
$(".cat-box #cat-menu").click(function () {
    var cat = $(this).text();
    $(".cat_name").text(cat);

    if (cat == "Coffee") {
        for (i = 0; i < coffee.length; i++) {
            var marker = new kakao.maps.Marker({
                map: map, // 마커를 표시할 지도
                position: coffee[i].latlng, // 마커를 표시할 위치
            });
            // 마커를 클릭했을 때 마커 위에 표시할 인포윈도우를 생성합니다
            var iwContent = '<div style="padding:5px;">Hello World!</div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                iwRemoveable = true; // removeable 속성을 ture 로 설정하면 인포윈도우를 닫을 수 있는 x버튼이 표시됩니다

            // 인포윈도우를 생성합니다
            var infowindow = new kakao.maps.InfoWindow({
                content: iwContent,
                removable: iwRemoveable
            });

            // 마커에 클릭이벤트를 등록합니다
            kakao.maps.event.addListener(marker, 'click', function () {
                // 마커 위에 인포윈도우를 표시합니다
                infowindow.open(map, marker);
            });
        }
    }
})

var ps = new kakao.maps.services.Places();  

// 키워드로 장소를 검색합니다
searchPlaces();

// 키워드 검색을 요청하는 함수입니다
function searchPlaces() {

    var keyword = document.getElementById('mapser').value;

    if (!keyword.replace(/^\s+|\s+$/g, '')) {
        alert('키워드를 입력해주세요!');
        return false;
    }

    // 장소검색 객체를 통해 키워드로 장소검색을 요청합니다
    ps.keywordSearch( keyword, placesSearchCB); 
}
// 장소검색이 완료됐을 때 호출되는 콜백함수 입니다
function placesSearchCB(data, status, pagination) {
    console.log(data);
}