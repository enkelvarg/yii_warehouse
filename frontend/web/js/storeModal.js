function storeModal(url, id){
    id = $.ajax({
        url: url,
        data: {id: id},
        type: 'GET',
        success: function (data) {
            $('#storeModal').modal('show').find('#modalContent').html(data);
            $('#modal-id').text(id);
        }
    });
    return false;
}

function redirectDevice(e, event) {
    event.preventDefault();
    window.open(e.getAttribute('href'));
}