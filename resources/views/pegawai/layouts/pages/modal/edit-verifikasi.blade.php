<!-- Modal -->
<div class="modal fade" id="editVerifikasi{{ $item->id_transaksi }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verifikasi Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('pegawai/verifikasi-transaksi') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id_transaksi" value="{{ $item->id_transaksi }}">
                    <div class="modal-footer">
                        <button type="submit" class="text-white bg-purple-600 hover:opacity-80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Verifikasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>