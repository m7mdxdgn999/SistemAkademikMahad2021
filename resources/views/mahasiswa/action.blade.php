<form action="{{ route('mahasiswa.krs.store', $model) }}" method="post" class="float-left">
    @csrf
    <button type="submit" class="btn btn-icon btn-primary " ><i
            class="far fa-edit"></i> ambil </button>
</form>
