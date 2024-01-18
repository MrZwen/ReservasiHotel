    
    {{-- <script src="{{'./assets/js/app.js'}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/9b85772638.js" crossorigin="anonymous"></script>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.modal').on('show.bs.modal', function (e) {
        });
    });
</script>
{{-- <script>
   $(document).ready(function() {
    $('.btnEdit').click(function() {
    const id = $(this).data('id');

    $.ajax({
      url: '/kamar/' + id + '/edit',
      method: 'GET',
      success: function(response) {
        $('#no_kamar-edit').val(response.no_kamar);
        $('#tipe_kamar-edit').val(response.tipe_kamar);
        $('#harga-edit').val(response.harga);
      },
      error: function(error) {
        console.error('Error fetching data:', error);
      }
    });
  });

  $('.modal-footer button[type="button"]').click(function() {
    const form = $(this).closest('form');
    const id = form.find('input[type="hidden"]').val();

    $.ajax({
      url: '/kamar/' + id,
      method: 'PUT',
      data: form.serialize(),
      success: function(response) {
        const row = $('#data-table tr[data-id="' + id + '"]');
        row.find('td:eq(1)').text(response.no_kamar);
        row.find('td:eq(2)').text(response.tipe_kamar);
        row.find('td:eq(3)').text(response.harga);

        // Close the modal
        $('#editModal' + id).modal('hide');
      },
      error: function(error) {
        console.error('Error updating data:', error);
        // Handle any errors here, e.g., display an error message to the user
      }
    });
  });
});
</script> --}}
</body>
</html>