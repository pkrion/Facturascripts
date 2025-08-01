$(document).on('shown.bs.modal', '.modal', function () {
    var $modal = $(this);

    $modal.find('select.select2').each(function () {
        var $select = $(this);

        if ($select.data('select2')) {
            $select.select2('destroy');
        }

        $select.select2({
            width: 'style',
            theme: 'bootstrap4',
            dropdownParent: $modal
        });
    });
});
