$(document).keypress(function (e) {
var code = e.keyCode;
        var hh = "<ul class=list-group>\n\
<li class=list-group-item>الاصناف<span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+1</span></li>\n\
<li class=list-group-item> الاقسام الرئسية<span class='label label-primary' id='lab'>&nbsp;&nbsp;Press+2</span></li>\n\
<li class=list-group-item>الأقسام الفرعية<span class='label label-success' id='lab'>&nbsp;&nbsp;Press+3</span></li>\n\
<li class=list-group-item> طلبات عرض السعر<span class='label label-info' id='lab'>&nbsp;&nbsp;Press+4</span></li>\n\
<li class=list-group-item>المشاريع <span class='label label-warning' id='lab'>&nbsp;&nbsp;Press+5</span></li>\n\
<li class=list-group-item> مكونات صفحات عربية <span class='label label-danger' id='lab'>&nbsp;&nbsp;Press+6</span></li>\n\
<li class=list-group-item>  مكونات صفحات انجليزية<span class='label label-default' id='lab'>Press+7</span></li>\n\
<li class=list-group-item> طلبات المنتجات<span class='label label-danger' id='lab'>Press+8</span></li>\n\
<li class=list-group-item>   السلايدر<span class='label label-success' id='lab'>Press+9</span></li>\n\
\n\
\n\
\n\
\n\
\n\
\n\
\n\
\n\
</li>\n\
</ul>";
        if (code == 49) {
var url = "../../pages/products/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 50) {
var url = "../../pages/services/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 51) {
var url = "../../pages/sub_catagories/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 52) {
var url = "../../pages/quote/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 53) {
var url = "../../pages/projects/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 54) {
var url = "../../pages/page_components/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 55) {
var url = "../../pages/page_components_ar/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 56) {
var url = "../../pages/quote_order_box/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 57) {
var url = "../../pages/slider/spreadsheet.php";
        window.open(url, '_blank');
} else if (code == 104) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
} else if (code == 1575) {

Swal.fire({
title: "<i>Shortcut Assistant</i>",
        html: hh,
        confirmButtonText: " <u>Confirmation</u>",
});
}

});
