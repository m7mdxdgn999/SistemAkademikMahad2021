<form action="{{ route('admin.tahun_akademik.edit', $model) }}" method="get" class="float-left">
    <button type="submit" class="btn btn-icon btn-primary " ><i
            class="far fa-edit"></i></button>
</form>
{{-- button ini ada katinan dengen index untuk keperluan sweet alert --}}
<button href="{{ route('admin.tahun_akademik.destroy', $model) }}"  class="btn btn-icon btn-danger" id="delete" style="margin-left: 10px"><i class="fas fa-trash"></i></button>


{{-- sweet alert2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#delete').on('click',function(e){
        e.preventDefault();

        var href=$(this).attr('href');
        

        Swal.fire({
        title: 'Apakah anda yakin akan menghapus data ini?',
        text: "Data yang telah dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').action= href;
            document.getElementById('deleteForm').submit();

            Swal.fire(
            'Terhapus!',
            'Data Berhasil dihapus.',
            'success'
            )
        }
        })
    })
</script>
