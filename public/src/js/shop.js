$(document.body).click(function (event) {
    var asdd = $(event.target).attr('id');
    var asd = $("." + asdd);
    if (asd.is(":hidden")) {
        asd.slideDown("slow");
    } else {
        asd.hide();
    }
});
$('.product').on('click', function (event) {
    var header = $(event.target).text();
    var tableName = $(event.target).attr("title");
    window.location.href = 'table?tableName=' + tableName + '&header=' + header;
});
var selectArticle = $('.selectArticle');
selectArticle.change(function (event) {
    var selectFormat = event.target.parentNode.childNodes[3];
    var list = event.target.parentNode.childNodes[3].childNodes;
    var selectedOption = $('option:selected', event.target).attr("title");
    $(list).not($(list)[1]).not($(list)[3]).not($(list)[2]).not($(list)[0]).remove();
    $.ajax({
        method: 'post',
        url: urlForFormat,
        data: {selectedOption: selectedOption, _token: token}
    }).done(function (data) {
        for (var i = 0; i < data.length; i++) {
            selectFormat.innerHTML += ' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>"
        }
    });
});

$('.verification').on('click', function (event) {
    var price = $(event.target.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1]);
    if ($(event.target.parentNode.parentNode.childNodes[3].childNodes[3]).prop('checked')) {
        var newPrice = Number(price.val()) + 4;
        price.val(newPrice);
    } else {
        price.val(price.val() - 4);
    }
    changeCount();
});
$('.pliage').on('click', function (event) {
    var price = $(event.target.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1]);
    if ($(event.target.parentNode.parentNode.childNodes[3].childNodes[8]).prop('checked')) {
        var newPrice = Number(price.val()) + 50;
        price.val(newPrice);
    } else {
        price.val(price.val() - 50)
    }
    changeCount();
});
$('.perforation').on('click', function (event) {
    var price = $(event.target.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1]);
    if ($(event.target.parentNode.parentNode.childNodes[3].childNodes[13]).prop('checked')) {
        var newPrice = Number(price.val()) + 50;
        price.val(newPrice);
    } else {
        price.val(price.val() - 50);
    }
    changeCount();
});
$('.liassésA').on('click', function (event) {
    var price = $(event.target.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1]);
    if ($(event.target.parentNode.parentNode.childNodes[3].childNodes[18]).prop('checked')) {
        var newPrice = Number(price.val()) + 10;
        price.val(newPrice);
    } else {
        price.val(price.val() - 10);
    }
    changeCount();
});
$('.LiassésB').on('click', function (event) {
    var price = $(event.target.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1]);
    if ($(event.target.parentNode.parentNode.childNodes[3].childNodes[23]).prop('checked')) {
        var newPrice = Number(price.val()) + 10;
        price.val(newPrice);
    } else {
        price.val(price.val() - 10);
    }
    changeCount();
});
var totalCount;
function discount() {
    var discount5 = $('#discounted5');
    var discount25 = $('#discounted25');
    if(discount5.prop('checked')== true && discount25.prop('checked') == false){
        totalCount = totalCount - ((5 * totalCount) / 100)
    }
    else if(discount25.prop('checked')){
        totalCount = totalCount - ((25 * totalCount) / 100);
    }
}

function changeCount() {
    var price = $('.price');
    var name = $('.selectArticle option:selected');
    var format = $('.format option:selected');
    var data = [];
    var nameProduct = [];
    var size = [];
    totalCount = 0;
    for (var i = 0; i < price.length; i++) {
        if (price[i].value !== '0' && name[i].value !== null) {
            data[i] = price[i].value;
            nameProduct[i] = name[i].text;
            size[i] = format[i].text;
            totalCount += parseInt(data[i]);
        }
    }

    discount();
    $('#total').text(totalCount);
    var totalPrice = (21 * totalCount) / 100 + totalCount;
    $('#nds').text(totalPrice)
}
changeCount();
$('.count1').on('click', function (event) {
    event.preventDefault();
    var rootName = $('#rootName').val();
    var countProduct = parseFloat(event.target.parentNode.childNodes[1].innerText);
    var productId = event.target.childNodes[1].value;
    var priceProduct = event.target.innerText;
    var tableName = $('#tableName').text();
    var selectName = $('#selectName').val();
    window.location.href = rootName + '?countProduct=' + countProduct + '&productId=' + productId + '&priceProduct=' + priceProduct + '&tableName=' + tableName + '&selectName=' + selectName;
});

var price = $('.price');
$("#delayBox").on('click', function () {
    if ($("#24").is(":checked")) {
        for (var a = 0; a < price.length; a++) {
            if ($(price[a]).val() == 0) {
            }
            else {
                $(price[a]).val(Number(price.val()) + 26)
            }
        }
    }
    else if ($("#48").is(":checked")) {
        for (var i = 0; i < price.length; i++) {
            if ($(price[i]).val() == 0) {
            }
            else {
                $(price[i]).val(price[i].value - 6)
            }
        }
    }
    else if ($("#72").is(":checked")) {
        for (var j = 0; j < price.length; j++) {
            if ($(price[j]).val() == 0) {
            }
            else {
                $(price[j]).val(price[j].value - 8)
            }
        }
    }
    else if ($("#96").is(":checked")) {
        for (var q = 0; q < price.length; q++) {
            if ($(price[q]).val() == 0) {
            }
            else {
                $(price[q]).val(price[q].value - 12)
            }
        }
    }
    changeCount();
});

$('.secondSelect').change(function (event) {
    event.preventDefault();
    var select = $('#hiddenSelect');
    var divClone = select.clone(true, true);
    select.attr("style", "display: inline-block");
    $('.select').append(divClone);
    var option = event.target.parentNode.parentNode.parentNode.childNodes[3];
    if (option.style.display == 'none') {
        option.setAttribute("style", "display: block")
    }
});
var selectedPrice = 0;
var selectedCount = 0;
var productPrices;
var currentPrices;
var productCount;
var currentCount;
var newPrice;


$('#plus').on('click', function (event) {

    event.preventDefault();
    currentCount = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[3];
    productPrices = $(event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[5]).children();
    productCount = $(event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[7]).children();
    currentPrices = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1];
    for (var i = 0; i < productPrices.length; i++) {
        if (productPrices[i].value == currentPrices.value) {
            selectedPrice = i;
            selectedCount = i;
        }
    }
    selectedPrice += 1;
    selectedCount += 1;
    newPrice = Number(currentPrices.value);
    var newCount = Number(currentCount.value);
    if (selectedPrice >= productPrices.length - 1) {
        newPrice += parseInt(productPrices[productPrices.length - 1].value);
        newCount += parseInt(productCount[productCount.length - 1].value);

        $(currentPrices).val(newPrice);
        $(currentCount).val(newCount);
    }
    else if (selectedPrice < productPrices.length - 1) {
        $(currentPrices).val(productPrices[selectedPrice].value);
        $(currentCount).val(parseInt(productCount[selectedCount].value));
    }
    changeCount();
});

$('#minus').on('click', function (event) {
    event.preventDefault();
    currentCount = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[3];
    productPrices = $(event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[5]).children();
    productCount = $(event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[7]).children();
    currentPrices = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1];
    if (selectedPrice <= 0) {
        selectedPrice = 0;
    } else {
        selectedPrice -= 1;
    }
    if (selectedCount <= 0) {
        selectedCount = 0;
    } else {
        selectedCount -= 1;
    }
     newPrice = parseInt(currentPrices.value);
    var newCount = parseInt(currentCount.value);
    if (selectedPrice >= productPrices.length - 1) {
        newPrice -= Number(productPrices[productPrices.length - 1].value);
        newCount -= parseInt(productCount[productCount.length - 1].value);
        $(currentPrices).val(newPrice);
        $(currentCount).val(newCount);
    }
    else if (selectedPrice < productPrices.length - 1 && selectedPrice > 0) {
        $(currentPrices).val(productPrices[selectedPrice].value);
        $(currentCount).val(parseInt(productCount[selectedCount].value));
    }
    else if (selectedPrice == 0) {
        $(currentPrices).val(productPrices[0].value);
        $(currentCount).val(parseInt(productCount[0].value));
    }

    changeCount();
});
$('.format').change(function (event) {
    var count = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[3];
    var price = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1];
    var selectedOption = $('option:selected', event.target.parentNode.childNodes[1]).attr("title");
    var formatValue = $(event.target).val();
    var selectedProduct = event.target.parentNode.childNodes[5];
    var selectedFormat = event.target.parentNode.childNodes[7];
    $(selectedProduct).children().remove();
    $(selectedFormat).children().remove();
    $.ajax({
        method: 'post',
        url: urlSelect,
        data: {tableName: selectedOption, formatValue: formatValue, _token: token}
    }).done(function (data) {
        var productName = $.map(data.productName[0], function (value) {
            return [value];
        });
        var productCount = $.map(data.productCount[0], function (value) {
            return [value];
        });
        for (var i = 2; i < productName.length; i++) {
            selectedProduct.innerHTML += '<input type="hidden" value="' + productName[i] + '">';
            selectedFormat.innerHTML += '<input type="hidden" value="' + productCount[i] + '">';
        }
        $(price).val(event.target.parentNode.childNodes[5].childNodes[1].value);
        $(count).val(parseInt(event.target.parentNode.childNodes[7].childNodes[1].value));
        changeCount();
    });

    $(event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[1].childNodes[1]).on('click', function (event) {
        event.preventDefault();

        currentCount = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[3];
        productPrices = event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[5].childNodes;
        productCount = event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[7].childNodes;
        currentPrices = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1];
        for (var i = 0; i < productPrices.length; i++) {
            if (productPrices[i].value == currentPrices.value) {
                selectedPrice = i;
                selectedCount = i;
            }
        }
        selectedPrice += 1;
        selectedCount += 1;
        newPrice = Number(currentPrices.value);
        var newCount = Number(currentCount.value);
        if (selectedPrice >= productPrices.length - 1) {
            newPrice += parseInt(productPrices[productPrices.length - 1].value);
            newCount += parseInt(productCount[productCount.length - 1].value);
            discount();
            $(currentPrices).val(newPrice);
            $(currentCount).val(newCount);
        }
        else if (selectedPrice < productPrices.length - 1) {

            $(currentPrices).val(productPrices[selectedPrice].value);
            $(currentCount).val(parseInt(productCount[selectedCount].value));
        }
        changeCount();
    });
    $(event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[5].childNodes).on('click', function (event) {
        currentCount = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[3];
        productPrices = event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[5].childNodes;
        productCount = event.target.parentNode.parentNode.parentNode.childNodes[1].childNodes[1].childNodes[7].childNodes;
        currentPrices = event.target.parentNode.parentNode.parentNode.childNodes[5].childNodes[7].childNodes[1];
        event.preventDefault();
        if (selectedPrice <= 0) {
            selectedPrice = 0;
        } else {
            selectedPrice -= 1;
        }
        if (selectedCount <= 0) {
            selectedCount = 0;
        } else {
            selectedCount -= 1;
        }
         newPrice = parseInt(currentPrices.value);
        var newCount = parseInt(currentCount.value);
        if (selectedPrice >= productPrices.length - 1) {
            newPrice -= Number(productPrices[productPrices.length - 1].value);
            newCount -= parseInt(productCount[productCount.length - 1].value);
            $(currentPrices).val(newPrice);
            $(currentCount).val(newCount);
        }
        else if (selectedPrice < productPrices.length - 1 && selectedPrice > 0) {
            $(currentPrices).val(productPrices[selectedPrice].value);
            $(currentCount).val(parseInt(productCount[selectedCount].value));
        }
        else if (selectedPrice == 0) {
            $(currentPrices).val(productPrices[0].value);
            $(currentCount).val(parseInt(productCount[0].value));

        }
        changeCount();
    });

});

$('#divace').on('click', function () {
    event.preventDefault();
    debugger;
    var price = $('.price');
    var count = $('.count_input');
    var name = $('.selectArticle option:selected');
    var format = $('.format option:selected');
    var data = [];
    var nameProduct = [];
    var size = [];
    var countProduct = [];
    var discount5 = $('#discounted5');
    var discount25 = $('#discounted25');
    var totalCount = 0;
    for (var i = 0; i < price.length; i++) {
        if (price[i].value !== '0' && name[i].value !== null) {
            data[i] = price[i].value;
            countProduct[i] = count[i].value;
            if(discount5.prop('checked')== true && discount25.prop('checked') == false){
                data[i] = data[i] - ((5 * data[i]) / 100)
            }
            else if(discount25.prop('checked')){
                data[i] = data[i] - ((25 * data[i]) / 100);
            }
            nameProduct[i] = name[i].text;
            size[i] = format[i].text;

            totalCount += parseInt(data[i]);

        }
    }

    var totalPrice = (21 * totalCount) / 100 + totalCount;
    window.location.href = download + '&data=' + data + '&nameProduct=' + nameProduct + '&format=' + size + '&totalCount=' + totalCount + '&totalPrice=' + totalPrice+'&countProduct=' + countProduct;

});
