<html>

<head>
    <title>Toko Sepatu</title>

    <style>
        .error1 {
            color: red;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table bgcolor='#B28DFF' width="200px">
                <tr>
                    <th>
                        <h3>Toko Sepatu Bar Bar</h3>
                        <hr>
                    </th>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" name="nama" id="nama" placeholder="nama"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('nama'); ?> </b></td>
                </tr>
                <tr>
                    <td><input type="text" name="no" id="no" placeholder="No Hp"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('no'); ?> </b></td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">-Merk sepatu-</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="kickers">Kickers</option>
                            <option value="eiger">Eiger</option>
                            <option value="bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('merk'); ?> </b></td>
                </tr>
                <tr>
                    <td><b>Size Sepatu :</b></td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="32">32
                        <input type="radio" name="size" value="33">33
                        <input type="radio" name="size" value="34">34
                        <input type="radio" name="size" value="35">35
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="36">36
                        <input type="radio" name="size" value="37">37
                        <input type="radio" name="size" value="38">38
                        <input type="radio" name="size" value="39">39
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="size" value="40">40
                        <input type="radio" name="size" value="41">41
                        <input type="radio" name="size" value="42">42
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('size'); ?> </b></td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" value="Input">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>