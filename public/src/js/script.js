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
$('.count1').on('click', function () {
    event.preventDefault();
    var selectValue = $('#selectValue').val();
    var rootName = $('#rootName').val();
    var countProduct = parseFloat(event.target.parentNode.childNodes[1].innerText);
    var productId = event.target.childNodes[1].value;
    var priceProduct = event.target.innerText;
    window.location.href = '/flyprint/public/' + rootName + '?countProduct=' + countProduct + '&productId=' + productId + '&selectValue=' + selectValue + '&priceProduct=' + priceProduct;
});
