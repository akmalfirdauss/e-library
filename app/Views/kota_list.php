<a href="<?= site_url('kota/insert') ?>">Insert</a>
<br />

<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Nama Provinsi</th>
            <th>ID Kota</th>
            <th>Action</th>
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
                <td nowrap>
                    <a href="<?= site_url('kota/' . $row['id']) ?>">Update</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>
<br>
<a></a>

<br />
<a href="<?= site_url('kota_export_xls') ?>">Export Excel</a>
<a href="<?= site_url('kota_export_pdf') ?>">Export PDF</a>