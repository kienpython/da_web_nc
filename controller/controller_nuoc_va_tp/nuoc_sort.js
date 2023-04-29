{
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
var nuoc_sort = $("#nuoc__select");
var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
        console.log("Dữ liệu đã được gửi thành công!");
    }
};
var url = "./controller_nuoc_va_tp/nuoc_hien_thi.php";
var method = "POST";


nuoc_sort.onchange=function(e){
    var nuoc_orderBy = "nuoc_orderBy=";
    if (e.target.value == 0) {
        nuoc_orderBy += "id_nuoc_va_tp";
    } else if (e.target.value == 1) {
        nuoc_orderBy += "name";
    } else if (e.target.value == 2) {
    nuoc_orderBy += "gia_ban";
}
    xhttp.open(method, url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(nuoc_orderBy);
    location.reload(true);
}
}