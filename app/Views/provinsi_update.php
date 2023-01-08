<form method="post" action="<?= site_url('provinsi/' . $data['id']) ?>">
    <?= csrf_field() ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?= $data['nama'] ?>" />
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <!--
            <td>Wilayah</td>
            <td>
                <input type="radio" name="wilayah" value="WIB" <?php if ($data['wilayah'] == 'WIB') echo 'checked' ?> /><label for="wilayah">WIB</label>
                <input type="radio" name="wilayah" value="WITA" <?php if ($data['wilayah'] == 'WITA') echo 'checked' ?> /><label for="wilayah">WITA</label>
                <input type="radio" name="wilayah" value="WIT" <?php if ($data['wilayah'] == 'WIT') echo 'checked' ?> /><label for="wilayah">WIT</label>
            </td>
            -->

            <td>
                <label for="wilayah">Wilayah :</label>

                <select name="wilayah" id="wilayah">
                    <option value="WIB" <?php if ($data['wilayah'] == 'WIB') echo 'selected' ?>>WIB</option>
                    <option value="WITA" <?php if ($data['wilayah'] == 'WITA') echo 'selected' ?>>WITA</option>
                    <option value="WIT" <?php if ($data['wilayah'] == 'WIT') echo 'selected' ?>>WIT</option>
                </select>
            </td>

        </tr>
    </table>
    <table>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit">Save</button>
                <a href="<?= site_url('provinsi/delete/' . $data['id']) ?>" onclick="return confirm('Anda yakin?')">Delete</a>
            </td>
        </tr>
    </table>
    </table>
</form>