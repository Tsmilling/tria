<table>
    <thead>
        <tr>
            <th colspan="5" align="center">Data User</th>
        </tr>

        <tr>
            <th colspan="5" align="center">
                Tangal :{{ $tanggal }}
            </th>
        </tr>

        <tr>
            <th colspan="5" align="center">
                Pukul : {{$jam}} 
            </th>
        </tr>
    <tr>
        <th width="20" align="center">No</th>
        <th width="20" align="center">Name</th>
        <th width="20" align="center">Email</th>
        <th width="20" align="center">Jabatan</th>
        <th width="20" align="center">Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ( $user as $item)
        <tr>
            <td align="center">{{ $loop->iteration }}</td>
            <td align="center">{{ $item->nama }}</td>
            <td align="center">{{ $item->email }}</td>
            <td align="center">{{ $item->jabatan }}</td>
            <td align="center">{{ $item->is_tugas }}</td>
        
        </tr>
        @endforeach
    </tbody>
</table>