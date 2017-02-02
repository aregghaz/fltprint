$('.catalog').on('click', function (event) {
    var menu = event.target.parentNode.childNodes[3];
    if (menu) {
        var menuDisplay = event.target.parentNode.childNodes[3].style.display;
        if (menuDisplay == "none") {
            menu.setAttribute("style", "display: block")
        }
        else {
            menu.setAttribute("style", "display: none")
        }
    }
});
$('.selectArticle').change(function () {
    var selectArticle = $('.selectArticle').val();
    var selectFormat = $('.format');
    $('.selectOption').remove();
    console.log(selectArticle);
    if (selectArticle == 1) {
        $.ajax({
            method: 'post',
            url: urlForFormat,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }

        });
    }
    else if (selectArticle == 2) {
        $.ajax({
            method: 'post',
            url: urlForFormat170,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 3) {
        $.ajax({
            method: 'post',
            url: urlForFormat250,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 4) {
        $.ajax({
            method: 'post',
            url: urlForFormat300,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 5) {
        $.ajax({
            method: 'post',
            url: urlForFormat300Plastic,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 6) {
        $.ajax({
            method: 'post',
            url: urlFlyers350Select,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 7) {
        $.ajax({
            method: 'post',
            url: urlFlyers350Select,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 8) {
        $.ajax({
            method: 'post',
            url: urlFlyers350Brilante,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 9) {
        $.ajax({
            method: 'post',
            url: urlFlyers350Platic,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 10) {
        $.ajax({
            method: 'post',
            url: urlAffiches135FormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 11) {
        $.ajax({
            method: 'post',
            url: urlAffiches1FormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        });
    }
    else if (selectArticle == 12) {
        $.ajax({
            method: 'post',
            url: urlAffichesGrandFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 13) {
        $.ajax({
            method: 'post',
            url: urlAffichesDigitaleFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 14) {
        $.ajax({
            method: 'post',
            url: urlShopAffichesGreenFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 15) {
        $.ajax({
            method: 'post',
            url: urlAffichesRectoFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 16) {
        $.ajax({
            method: 'post',
            url: urlDepliants135FormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 17) {
        $.ajax({
            method: 'post',
            url: urlCarteVisiteBrillante,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 18) {
        $.ajax({
            method: 'post',
            url: urlCarteVisiteMatte,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 19) {
        $.ajax({
            method: 'post',
            url: urlCarteVisiteGreenFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 20) {
        $.ajax({
            method: 'post',
            url: urlCarte300FormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
    else if (selectArticle == 21) {
        $.ajax({
            method: 'post',
            url: urlCarteDeluxeFormatSelect,
            data: {_token: token}
        }).done(function (data) {
            for (var i = 0; i < data.length; i++) {
                selectFormat.append(' <option class="selectOption" value="' + data[i].value + '">' + data[i].name + ' (' + data[i].size + ')' + "</option>")
            }
        })
    }
});
var price = $('#priceCount');
$('#verification').on('click', function () {
    if ($('#verification').prop('checked')) {

        var newPrice = Number(price.text()) + 4;
        price.text(newPrice.toFixed(2));
    } else {
        price.text((Number(price.text()) - 4).toFixed(2));
    }
});
$('#pliage').on('click', function () {
    if ($('#pliage').prop('checked')) {
        var newPrice = Number(price.text()) + 50;
        price.text(newPrice.toFixed(2));
    } else {
        price.text((Number(price.text()) - 50).toFixed(2));
    }
});
$('#perforation').on('click', function () {
    if ($('#perforation').prop('checked')) {
        var newPrice = Number(price.text()) + 50;
        price.text(newPrice.toFixed(2));
    } else {
        price.text((Number(price.text()) - 50).toFixed(2));
    }
});
$('#liassésA').on('click', function () {
    if ($('#liassésA').prop('checked')) {
        var newPrice = Number(price.text()) + 10;
        price.text(newPrice.toFixed(2));
    } else {
        price.text((Number(price.text()) - 10).toFixed(2));
    }
});
$('#LiassésB').on('click', function () {
    if ($('#LiassésB').prop('checked')) {
        var newPrice = Number(price.text()) + 10;
        price.text(newPrice.toFixed(2));
    } else {
        price.text((Number(price.text()) - 10).toFixed(2));
    }
});
$('.count1').on('click', function (event) {
    event.preventDefault();
    var selectValue = $('#selectValue').val();
    var rootName = $('#rootName').val();
    var countProduct = parseFloat(event.target.parentNode.childNodes[1].innerText);
    var productId = event.target.childNodes[1].value;
    var priceProduct = event.target.innerText;
    window.location.href = rootName + '?countProduct=' + countProduct + '&productId=' + productId + '&selectValue=' + selectValue + '&priceProduct=' + priceProduct;
});
var selectedPrice = 0;
var productPrices;
var currentPrices;
var selectedCount;
var productCount;
var currentCount;
$(document).ready(function () {


    $('.plus').on('click', function (event) {
        event.preventDefault();
        currentCount = $('#count');
        productPrices = $('.productPrice');
        productCount = $('.productCount');
        currentPrices = $('#price');
        for (var i = 0; i < productPrices.length; i++) {
            if (productPrices[i].value == currentPrices.val()) {
                selectedPrice = i;
                selectedCount = i;
            }
        }
        selectedPrice += 1;
        selectedCount += 1;
        var newPrice = Number(currentPrices.val());
        var newCount = Number(currentCount.val());
        if (selectedPrice >= productPrices.length - 1) {
            newPrice += Number(productPrices[productPrices.length - 1].value);
            newCount += parseInt(productCount[productCount.length - 1].value);
            currentPrices.val(newPrice);
            currentCount.val(newCount);
        }
        else {
            currentPrices.val(productPrices[selectedPrice].value);
            currentCount.val(parseInt(productCount[selectedCount].value));
        }
    });
    $('.minus').on('click', function () {
        event.preventDefault();
        selectedPrice -= 1;
        selectedCount -= 1;
        console.log(selectedPrice);
        var newPrice = Number(currentPrices.val());
        var newCount = Number(currentCount.val());
        if (selectedPrice >= productPrices.length - 1) {
            newPrice -= Number(productPrices[productPrices.length - 1].value);
            newCount -= parseInt(productCount[productCount.length - 1].value);
            currentPrices.val(newPrice);
            currentCount.val(newCount);
        }
        else if (selectedPrice < productPrices.length - 1 && selectedPrice >= 0) {
            currentPrices.val(productPrices[selectedPrice].value);
            currentCount.val(parseInt(productCount[selectedCount].value));
        }
        else if (selectedPrice <= 0) {
            selectedPrice = 1
        }
    });

    $('.format').change(function () {
        var tableName = $('.selectArticle option:selected').attr("title");
        var formatValue = $('.format').val();
        var selectidProduct = $('.selectic_product_inputs');
        var selectidFormat = $('.selectic_format_inputs');
        $.ajax({
            method: 'post',
            url: urlSelect,
            data: {tableName: tableName, formatValue: formatValue, _token: token}
        }).done(function (data) {
            var productName = $.map(data.productName[0], function (value) {
                return [value];
            });
             var productCount = $.map(data.productCount[0], function (value) {
                return [value];
            });

            selectidProduct.children().remove();
            selectidFormat.children().remove();
            for (var i = 2; i < productName.length; i++) {
                selectidProduct.append('<input class="productPrice" type="text" value="' + productName[i]+ '">');
                selectidFormat.append('<input class="productCount" type="text" value="' + productCount[i]+ '">');
            }
            $('#price').val($('.productPrice')[0].value);
            $('#count').val(parseInt($('.productCount')[0].value))
        });
    });

});
