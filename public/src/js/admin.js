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
$(document).ready(function () {
    var names = $('.table_name');
    var nameAaray = [];
    var appendDiv;
    var appendDivSize;
    var form = $('#formBody');
    appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" placeholder="XX x XX mm" required></div></div>';
    form.append(appendDivSize);
    for (var i = 0; i < names.length; i++) {
        nameAaray[i] = names[i];
        var name;
        if (i == 0) {
            name = 'name';
        }
        else {
            name = 'count_' + i;
        }
        appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><label for="' + nameAaray[i].innerText + '"><input class="ui input"  type="text" name="' + name + '" title="formats" placeholder="' + nameAaray[i].innerText + '" required></label></div></div>';
        form.append(appendDiv);
    }
    $('.edit_row').on('click', function (event) {
        var rowId = event.target.parentNode.childNodes[1].value;
        var modalBody = $('.modal_body');
        var tableValue = $('#tableValue').val();
        var names = $('.table_name');

        if(tableValue == 1) {
            $.ajax({
                method: 'post',
                url: urlsendIdFluyers135,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 2) {
            $.ajax({
                method: 'post',
                url: urlsendIdFluyers170,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                   appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 3) {
            $.ajax({
                method: 'post',
                url: urlsendIdFluyers250,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);

                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                   appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 4) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers300Plastic,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 5) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers300,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
 else if(tableValue == 6) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers300Greenline,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 7) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers350,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
        else if(tableValue == 8) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers300Plastic,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }

            });
        }
        else if(tableValue == 9) {
            $.ajax({
                method: 'post',
                url: urlsendIdFlyers300Greenline,
                data: {rowId: rowId, _token: token}
            }).done(function (data) {
                $('.ui.modal').modal('show');
                $('#rowId').val(rowId);
                modalBody.children().remove();
                var appendDivSize;
                appendDivSize = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="size" title="formats" value="'+data.productSize[0]+'" required></div></div>';
                modalBody.append(appendDivSize);
                var nameArray = [];
                var array = $.map(data.firstTable[0], function (value) {
                    return [value];
                });
                for (var i = 0; i < names.length; i++) {
                    nameArray[i] = names[i];
                    var name;
                    if (i == 0) {
                        name = 'name';
                    }
                    else {
                        name = 'count_' + i;
                    }
                    appendDiv = ' <div class="fields" style="float:left;margin: 3px;"><div class="ui input focus"><input class="ui input" type="text" name="' + name + '" title="formats" value= "' + array[i + 1] + '" required></div></div>';
                    modalBody.append(appendDiv)
                }
            });
        }
    });
});

