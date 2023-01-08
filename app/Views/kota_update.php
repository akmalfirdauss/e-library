<form method="post" action="<?= site_url('kota/' . $data['id']) ?>">
    <?= csrf_field() ?>
    <table>
        <tr>
            <td>Provinsi</td>
            <td>
                <radio name="provinsi_id">
                    <?php foreach ($data_provinsi as $provinsi) : ?>
                        <?php if ($provinsi['id'] == $data['provinsi_id']) : ?>
                            <input type="radio" name="provinsi_id" value="<?= $provinsi['id'] ?>" checked><?= $provinsi['nama'] ?><br></input>
                            <!--<option value="<?= $provinsi['id'] ?>" selected><?= $provinsi['nama'] ?></option>-->
                        <?php else : ?>
                            <input type="radio" name="provinsi_id" option value="<?= $provinsi['id'] ?>"><?= $provinsi['nama'] ?><br></input>
                            <!--<option value="<?= $provinsi['id'] ?>"><?= $provinsi['nama'] ?></option>-->
                        <?php endif ?>
                    <?php endforeach ?>
                </radio>
            </td>
        </tr>
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
                <a href="<?= site_url('kota/delete/' . $data['id']) ?>">Delete</a>
            </td>
        </tr>
    </table>
</form>