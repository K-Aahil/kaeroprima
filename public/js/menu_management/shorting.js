var arraydata = [];

function getmenus() {
    arraydata = [];
    $('#spinsavemenu').show();
    var cont = 0;
    $('#menu-to-edit li').each(function(index) {
        var dept = 0;
        for (var i = 0; i < $('#menu-to-edit li').length; i++) {
            var n = $(this).attr('class').indexOf('menu-item-depth-' + i);
            if (n != -1) {
                dept = i;
            }
        }
        var textoiner = $(this).find('.item-edit').text();
        var id = this.id.split('-');
        var textoexplotado = textoiner.split('|');
        var padre = 0;
        if (!!textoexplotado[textoexplotado.length - 2] && textoexplotado[textoexplotado.length - 2] != id[2]) {
            padre = textoexplotado[textoexplotado.length - 2];
        }
        arraydata.push({
            depth: dept,
            id: id[2],
            parent: padre,
            sort: cont
        });
        cont++;

    });
    actualizarItem();
}

function addShortList() {

    var formData = new FormData($('#nav-menu-meta')[0]);

    $.ajax({
        type: "POST",
        url: add_item,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            Swal.fire('Success!', 'Item Saved', 'success');
            window.location.reload();
        },
        error: function(response) {
            console.log(response);
            Swal.fire('Error!', 'Something Wrong!', 'error');
        }
    });
}

function updateitem(id = 0) {

    if (id) {

        let dataForm = new FormData($('#form-edit-' + id)[0]);

        $.ajax({
            data: dataForm,
            url: update_item,
            type: 'POST',
            processData: false,
            contentType: false,
            beforeSend: function(xhr) {
                if (id) {
                    $('#spincustomu2').show();
                }
            },
            success: function(response) {
                Swal.fire('Success!', 'Data Updated', 'success');
            },
            complete: function() {
                if (id) {
                    $('#spincustomu2').hide();
                }
            },
            error: function(request, status, error) {
                console.log(request);
                console.log(status);
                console.log(error);
            }
        });

    } else {
        Swal.fire('Error!', 'Something Wrong!', 'error');
    }

}

function actualizarItem() {
    $.ajax({
        dataType: 'json',
        data: {
            arraydata: arraydata,
            menuname: $('#menu-name').val(),
            idmenu: $('#idmenu').val()
        },
        url: generate_sort_item,
        type: 'POST',
        beforeSend: function(xhr) {
            $('#spincustomu2').show();
        },
        success: function(response) {
            // console.log(response);
        },
        complete: function() {
            $('#spincustomu2').hide();
        }
    });
}

function deleteitem(id) {
    $.ajax({
        dataType: 'json',
        data: {
            id: id
        },
        url: deleteitemmenur,
        type: 'POST',
        success: function(response) {
            Swal.fire('Success!', 'Data Deleted', 'success');
        }
    });
}

sortingList.registerChange = function() {
    getmenus();
};