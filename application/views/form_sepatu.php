<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Shop | Toko Sepatu</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/css/sepatu.css">
</head>
<body>
    <center>
        <div class="container">
        <header>
            <hgroup>
                <h1>Shoes Shop</h1>
                <h3>Menjual macam macam sepatu</h3>
            </hgroup>
        </header>
        <form action="<?= base_url('Sepatu/cetak'); ?>" method="POST">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <th>No telp</th>
                    <td>:</td>
                    <td><input type="tel" name="telp"></td>
                </tr>
                <tr>
                    <th>Merkn</th>
                    <td>:</td>
                    <td>
                        <select name="merk">
                            <option value="#">-pilih-</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="kickers">kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran">
                            <option value="#">-pilih-</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input class="butt" type="Submit" name="submit" value="kirim">
                    </td>
                </tr>
            </table>
        </form>
        <footer>
            <h5 class="copy"> Jhon Patarick Kennedy | Tugas Pertemuan 7</h5>
        </footer>
        </div>
    </center>
</body>
</html>