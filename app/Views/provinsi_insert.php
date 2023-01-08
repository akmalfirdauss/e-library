<form method="post" action="<?= site_url('provinsi/insert') ?>">
    <?= csrf_field() ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="" />
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <!--
            <td>Wilayah</td>
            <td>
                <input type="radio" name="wilayah" value="WIB" /> <label for="wilayah">WIB</label>
                <input type="radio" name="wilayah" value="WITA" /> <label for="wilayah">WITA</label>
                <input type="radio" name="wilayah" value="WIT" /> <label for="wilayah">WIT</label>
            </td>
            -->

            <td>
                <label for="wilayah">Wilayah :</label>

                <select name="wilayah" id="wilayah">
                    <option value="WIB">WIB</option>
                    <option value="WITA">WITA</option>
                    <option value="WIT">WIT</option>
                </select>
            </td>

        </tr>
    </table>
    <table>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>