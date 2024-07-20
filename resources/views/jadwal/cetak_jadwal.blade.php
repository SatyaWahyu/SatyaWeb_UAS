<h3>Master Data Jadwal</h3>
<table border="1" width="75%">
    <tr>
        <td>NO</td>
        <td>Nomor Guru</td>
        <td>Pelajaran</td>
        <td>Jam Mulai</td>
    </tr>

    @foreach($jadwal as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_guru }}</td>
    <td>{{ $item->nama_pelajaran }}</td>
    <td>{{ $item->jam_mulai }}</td>
    <td>{{ $item->tipe }}</td>
</tr>
    @endforeach
</table>

<!-- Tombol cetak -->
<button onclick="printTable()">Cetak Jadwal</button>

<!-- Script untuk fungsi cetak -->
<script>
    function printTable() {
        window.print(); // Memanggil fungsi print bawaan dari window
    }
</script>