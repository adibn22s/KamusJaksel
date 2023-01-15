<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Contoh 1</th>
        <th>Contoh 2</th>
    </tr>
    <tbody>
        <td>{{ isset($materi->judul) ? $materi->judul : 'N/A' }}</td>
        <td>{{ isset($materi->contoh1) ? $materi->contoh1 : 'N/A' }}</td>
        <td>{{ isset($materi->contoh2) ? $materi->contoh2 : 'N/A' }}</td>
    </tbody>
</table>
