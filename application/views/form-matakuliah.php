<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
    <style>
        body {
            text-align: center;
        }

        table {
            margin: auto;
        }

        th,
        td {
            padding: 7px;
        }

        .form_error {
            font-style: italic;
            color: red;
            text-align: left;
        }

        .radio {
            display: inline-block;
        }
    </style>
</head>

<body>
    <form action="<?= base_url(); ?>matakuliah/cetak" method="post">
        <table>
            <tr>
                <th colspan="3">Form Input Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Kode MTK</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" value="<?= set_value('kode'); ?>"></td>
                <!-- <th class="form_error">
                    <small><?= form_error('kode'); ?></small>
                </th> -->
            </tr>
            <tr>
                <td colspan="2"></td>
                <th class="form_error">
                    <small><?= form_error('kode'); ?></small>
                </th>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th class="form_error">
                    <small><?= form_error('nama'); ?></small>
                </th>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th class="form_error">
                    <small><?= form_error('sks[]'); ?></small>
                </th>
            </tr>
            <tr>
                <td>Status MTK</td>
                <td>:</td>
                <td colspan="2">
                    <div class="radio">
                        <input type="radio" id="status1" name="status" value="Unggulan">
                        <label for="status1">Unggulan</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="status2" name="status" value="Tidak Unggulan">
                        <label for="status2">Tidak Unggulan</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th class="form_error">
                    <small><?= form_error('status'); ?></small>
                </th>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>