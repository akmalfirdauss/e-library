<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Nama Provinsi</th>
            <th>ID Kota</th>
        </tr>
    </thead>
    <tbody>
        <?php $num = 1 ?>
        <?php foreach ($list as $row) : ?>
            <tr>
                <td><?= $num++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['provinsi_nama']; ?></td>
                <td><?= $row['id']; ?></td>
            <?php endforeach ?>
    </tbody>
</table>