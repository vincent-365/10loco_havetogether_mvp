var ps = new kakao.maps.services.Places();  

// 키워드로 장소를 검색합니다
searchPlaces();

// 키워드 검색을 요청하는 함수입니다
function searchPlaces() {

    var keyword = document.getElementById('mapserss').value;

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
    for (var i = 0; i < data.length; i++) {
        $("<div>").attr("class", "search_name").text(data[i]["place_name"]).appendTo("#search_maps")
        $("<div>").attr("class", "search_address").text(data[i]["road_address_name"]).appendTo("#search_maps")
    }
    
}