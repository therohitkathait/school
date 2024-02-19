$(document).ready(function () {
  $('#feesTable tbody')
    .sortable({
      helper: fixHelperModified,
      update: function (event, ui) {
        // Get the updated order
        var order = [];
        $('#feesTable tbody tr').each(function () {
          order.push($(this).data('id'));
        });

        // Send the updated order to the server
        $.ajax({
          url: 'update-order.php',
          type: 'POST',
          data: { order: order },
          success: function (response) {
            console.log(response); // Log success message
          },
          error: function (xhr, status, error) {
            console.log(error); // Log error message
          },
        });
      },
    })
    .disableSelection();

  function fixHelperModified(e, tr) {
    var $originals = tr.children();
    var $helper = tr.clone();
    $helper.children().each(function (index) {
      $(this).width($originals.eq(index).width());
    });
    return $helper;
  }
});
