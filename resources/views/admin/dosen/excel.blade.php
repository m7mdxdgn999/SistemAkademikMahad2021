<table >   
        <tr>
            <th >Kode Dosen</th>
            <th >NIP</th>
            <th >Nama Dosen</th>
            <th >Email</th>
            <th >No Hp</th>
            <th >Aksi</th>
        </tr>     
        @foreach ($dosen as $dsn)
            <tr>
                <td>{{ $dsn->kode_dosen }}</td>
                <td>{{ $dsn->nip }}</td>
                <td>{{ $dsn->nama_dosen }}</td>
                <td>{{ $dsn->email }}</td>
                <td>{{ $dsn->no_hp_dosen }}</td>

            </tr>
        @endforeach
    
</table>