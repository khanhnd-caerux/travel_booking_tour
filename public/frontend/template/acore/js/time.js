
function generate_year_range(start, end) {
    var years = "";
    for (var year = start; year <= end; year++) {
        years += "<option value='" + year + "'>" + year + "</option>";
    }
    return years;
}

today = new Date();
currentMonth = today.getMonth();
currentYear = today.getFullYear();
selectYear = today.getFullYear();
selectMonth = today.getMonth();


createYear = generate_year_range(1970, 2050);
/** or
 * createYear = generate_year_range( 1970, currentYear );
 */

createYear.innerHTML = createYear;

var calendar = document.getElementById("calendar");
var lang = calendar.getAttribute('data-lang');

var months = "";
var days = "";

var monthDefault = ["Month 1", "Month 2", "Month 3", "Month 4", "Month 5", "Month 6", "Month 7", "Month 8", "Month 9", "Month 10", "Month 11", "Month 12"];

var dayDefault = [" Sunday", "Th 2", "Th 3", "Th 4", "Th 5", "Th 6", "Th 7"];

if (lang == "en") {
    months = monthDefault;
    days = dayDefault;
} else if (lang == "id") {
    months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    days = ["Ming", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];
} else if (lang == "fr") {
    months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    days = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
} else {
    months = monthDefault;
    days = dayDefault;
}


var $dataHead = "<tr>";
for (dhead in days) {
    $dataHead += "<th data-days='" + days[dhead] + "'>" + days[dhead] + "</th>";
}
$dataHead += "</tr>";

//alert($dataHead);
document.getElementById("thead-month").innerHTML = $dataHead;


monthAndYear = document.getElementById("monthAndYear");
showCalendar(currentMonth, currentYear);


function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '')
        ;
}

function showCalendar(month, year) {

    var firstDay = (new Date(year, month)).getDay();

    tbl = document.getElementById("calendar-body");


    tbl.innerHTML = "";


    monthAndYear.innerHTML = months[month] + " " + year;
    selectYear.value = year;
    selectMonth.value = month;

    // creating all cells
    var date = 1;
    for (var i = 0; i < 6; i++) {

        var row = document.createElement("tr");


        for (var j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                cell = document.createElement("td");
                cellText = document.createTextNode("");
                cell.appendChild(cellText);
                row.appendChild(cell);
            } else if (date > daysInMonth(month, year)) {
                break;
            } else {
                var id = date + (month + 1) + year + convertToSlug(months[month]);
                cell = document.createElement("td");
                cell.setAttribute("data-date", date);
                cell.setAttribute("data-month", month + 1);
                cell.setAttribute("data-year", year);
                cell.setAttribute("data-month_name", months[month]);
                cell.setAttribute("id", id);
                cell.setAttribute("onclick", 'clickChecked("' + id + '")');
                cell.className = "date-picker";
                cell.innerHTML = "<span>" + date + "</span>";
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.className = "date-picker selected";
                }
                row.appendChild(cell);
                date++;
            }
        }
        tbl.appendChild(row);
    }
}

function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}

function clickChecked(id) {
    $('.date-picker').removeClass('selected');
    $('#' + id).addClass('selected');
    var date = $('#' + id).attr('data-date');
    var month = $('#' + id).attr('data-month');
    var year = $('#' + id).attr('data-year');
    var value = date + '-' + month + '-' + year;
    $('#valueDATE').val(value);
    $('#valueDATE2').html(value);


}


// $(document).ready(function () {
//     $('#mailsubricrexe .error').hide();
//     var uri = $('#mailsubricrexe').attr('action');
//     $('#mailsubricrexe').on('submit', function () {
//         var postData = $(this).serializeArray();
//         $.post(uri, {
//             id: 119,
//             ngaykhoihanh: $('#mailsubricrexe .ngaykhoihanh').val(),
//             fullname: $('#mailsubricrexe .fullname').val(),
//             email: $('#mailsubricrexe .email').val(),
//             phone: $('#mailsubricrexe .phone').val(),
//             message: $('#mailsubricrexe .message').val(),
//             namnguoilon: $('#mailsubricrexe .namnguoilon').val(),
//             namnguoilon811: $('#mailsubricrexe .namnguoilon811').val(),
//             nametreem: $('#mailsubricrexe .nametreem').val(),
//             pronoun: $('#mailsubricrexe .custom-control-input:checked').val(),
//             options: $('#mailsubricrexe select[name="optionTour"]').val(),
//             price: $('#mailsubricrexe select[name="optionTour"]').find(':selected').attr('data-price'),
//             totalPrice: $('#valueNUMINPUT').val(),
//         }, function (data) {
//             var json = JSON.parse(data);
//             $('#mailsubricrexe .error').show();
//             if (json.error.length) {
//                 $('#mailsubricrexe .error').removeClass('alert alert-success').addClass('alert alert-danger');
//                 $('#mailsubricrexe .error').html('').html(json.error);
//             } else {
//                 $('#mailsubricrexe .error').removeClass('alert alert-danger');
//                 /* $('#mailsubricrexe .error').html('').html('Đăng ký thành công.');
//                  $('#mailsubricrexe').trigger("reset");
//                  setTimeout(function () {
//                      location.reload();
//                  }, 5000);*/
//                 window.location.href = 'index.html';

//             }
//         });
//         return false;
//     });
// });

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

/*function eachPrice() {
    var sum = 0;
    $('.totalPriceQ').each(function () {
        var price = parseFloat($(this).val());
        sum += price;
    });
    $('.valueNUM').html(number_format(sum, 0, '.', '.'));
    $('#valueNUMINPUT').val(sum);
}

function changePlus(id, price) {
    var number = parseFloat($('.changeNum' + id).val());
    if (isNaN(number)) {
        number = 0;
    }
    number += 1;
    var totalpriceFinal = (number * price);
    $('.changeNum' + id).val(number);
    $('#totalPrice' + id).val(totalpriceFinal);
    eachPrice();

}

function changeMinus(id, price) {
    var number = parseInt($('.changeNum' + id).val());
    if (isNaN(number)) {
        number = 0;
    }
    if (number == 0) {
        number == 0;
    } else {
        number -= 1;
    }
    var totalpriceFinal = (number * price);
    $('.changeNum' + id).val(number);
    $('#totalPrice' + id).val(totalpriceFinal);
    eachPrice();


}

$(document).on('change', '.changeNum1', function (e) {
    var number = parseFloat($(this).val());
    var price = parseFloat($(this).attr('data-price'));
    if (isNaN(number)) {
        number = 0;
    }
    var totalpriceFinal = (number * price);
    $('.changeNum1').val(number);
    $('#totalPrice1').val(totalpriceFinal);
    eachPrice();

});
$(document).on('change', '.changeNum2', function (e) {
    var number = parseFloat($(this).val());
    var price = parseFloat($(this).attr('data-price'));
    if (isNaN(number)) {
        number = 0;
    }
    var totalpriceFinal = (number * price);
    $('.changeNum2').val(number);
    $('#totalPrice2').val(totalpriceFinal);
    eachPrice();

});
$(document).on('change', '.changeNum3', function (e) {
    var number = parseFloat($(this).val());
    var price = parseFloat($(this).attr('data-price'));
    if (isNaN(number)) {
        number = 0;
    }
    var totalpriceFinal = (number * price);
    $('.changeNum3').val(number);
    $('#totalPrice3').val(totalpriceFinal);
    eachPrice();

});*/
var percentChildren = Number(75);
var percentInfants = Number(0);
$(document).on('change', 'select[name="optionTour"]', function (e) {
    var price = $(this).find(':selected').attr('data-price');
    var priceChildren = ((price / 100) * percentChildren)
    var priceInfants = ((price / 100) * percentInfants)
    $('#price_adult_true').html(number_format(price, 0, '.', '.') + ' VND');
    $('#price_children_true').html(number_format(priceChildren, 0, '.', '.') + ' VND');
    $('#price_infant_true').html(number_format(priceInfants, 0, '.', '.') + ' VND');
    loadPriceTotal()
})
$(document).on('keyup', 'input[name="namnguoilon"]', function (e) {
    loadPriceTotal()
})
$(document).on('keyup', 'input[name="namnguoilon811"]', function (e) {
    loadPriceTotal()
})
$(document).on('keyup', 'input[name="nametreem"]', function (e) {
    loadPriceTotal()
})
$(document).on('click', '.plus', function (e) {
    e.preventDefault()
    var _quantity = $(this).parent().parent().find('input');
    _quantity.val(Number(_quantity.val()) + 1)
    loadPriceTotal()
})
$(document).on('click', '.minus', function (e) {
    e.preventDefault()
    var _quantity = $(this).parent().parent().find('input');
    var quantity = Number(_quantity.val());
    if (quantity <= 0) {
        quantity = 0
    } else {
        _quantity.val(quantity - 1)

    }
    loadPriceTotal()
})
function loadPriceTotal() {

    var price = $('input[name="namnguoilon"]').attr('data-price');
    var total = 0;
    var quantityAdults = Number($('input[name="namnguoilon"]').val())
    var quantityChildren = Number($('input[name="namnguoilon811"]').val())
    var quantityInfants = Number($('input[name="nametreem"]').val())

    var priceAdults = price * quantityAdults
    var priceChildren = ((price / 100) * 50) * quantityChildren
    var priceInfants = 0
    total = priceAdults + priceChildren + priceInfants

    $('.valueNUM').html(number_format(total, 0, '.', '.'));
    $('#valueNUMINPUT').val(total);
}
