{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const hang = $$(".dct__table_td--hienthi-td-xoa");
    const tieuDe = $(".dct__table_row--tieuDe_Xoa");
    const buttonXoa = $(".js-xoa");
    function showXoa(){
        for(var i = 0 ; i<hang.length;i++)
        {
            hang[i].style.display="table-cell";
        }
        tieuDe.style.display="table-cell";
        
    }
    buttonXoa.addEventListener("click",showXoa);
}