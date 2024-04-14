<!DOCTYPE html>
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
            padding: 10px;
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
                <td><input type="text" name="kode" id="kode"></td>
            </tr>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
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
                <td colspan="3"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>