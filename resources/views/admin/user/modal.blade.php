
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered
modal-dialog-scrollable">
    <div class="modal-content ">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Hapus {{ $title }} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                Nama
            </div>
            <div class="col-6">
                : {{ $item->nama}}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                : {{ $item->email}}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Jabatan
            </div>
            <div class="col-6">
                : {{ $item->jabatan }}
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
            <i class="fas fa-times"></i>
            Tutup</button>
        <button type="button" class="btn btn-danger btn-sm">
        <i class="fas fa-trash"></i>
        Hapus</button>
      </div>
    </div>
  </div>
</div>