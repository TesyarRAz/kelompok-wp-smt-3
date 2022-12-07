$(function() {
    console.log('asdsd')
    $('input[name="kategori"]').on('change', function() {
        $('#form-filter').submit();
    })
})