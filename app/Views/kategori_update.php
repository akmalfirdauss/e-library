<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('kategori/' .$data['id']) ?>">
    <?= csrf_field() ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit">Save</button>
                <a href="<?= site_url('kategori/delete/' . $data['id']) ?>" onclick="return confirm('Anda yakin?')">Delete</a>
            </td>
        </tr>
    </table>
</form>

<?= $this->endSection('content'); ?>