$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

function deleteItem(item, url) {

    let id = $(item).data('id');

    $.ajax({
        url: url+id,
        method: 'DELETE',
        dataType: 'json',
        success: function(data){
            $(item).closest('tr').remove();
        }
    });

}
