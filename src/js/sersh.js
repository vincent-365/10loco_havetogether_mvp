var ps = new kakao.maps.services.Places();  


// 키워드 검색을 요청하는 함수입니다
function searchPlaces() {
    $("#search_maps").empty();
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
    for (var i = 0; i < data.length; i++) {
        var idsbox = $("<div>").attr("class", "idsbox").attr("id",i).appendTo("#search_maps")
        var y = data[i]["y"]
        var x = data[i]["x"]
        $("<div>").attr("class", "search_name").text(data[i]["place_name"]).appendTo(idsbox)
        $("<div>").attr("class", "search_address").text(data[i]["road_address_name"]).appendTo(idsbox)
        $("<input>").attr("type", "hidden").attr("id", "y").val(y).appendTo(idsbox)
        $("<input>").attr("type", "hidden").attr("id", "x").val(x).appendTo(idsbox)
    }
    $(".idsbox").click(function(){
        var text = $(this).children(".search_name").text();
        var event_x = $(this).children("#x").val();
        var event_y = $(this).children("#y").val();
        $("#event_x").val(event_x)
        $("#event_y").val(event_y)
        $("#address").val(text)
        $("#search_maps").empty();
        $("#mapsers").css('display', 'none');
    })
}
$(function () {
    $(".box-button").click(function () {
        if(!$("#type").val() == "" && !$("#participants").val() == "" && !$("#profile").val() == "" && !$("#main_img").val() == ""){
            $("#target").find('[type="submit"]').trigger('click');
        }else{
            alert("There are a part not been entered.")
        }
    })
})