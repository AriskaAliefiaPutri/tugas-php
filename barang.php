<form action=""method="post">
    barang;
    <input type="text" name="namabarang" placeholder="nama barang">
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang">
    <br>
    stock:
    <input type="number" name="stock" placeholder="stock barang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>



<?php
$host="127.0.0.1";
$user="root";
$passwaord="";
$db="dbtoko";

$koneksi= new mysqli($host, $user, $passwaord, $db);

if(isset($_POST["simpan"])){
    $namabarang=$_POST["namabarang"];
    $harga=$_POST["harga"];
    $stock=$_POST["stock"];
    $sql="INSERT INTO barang (namabarang,harga,stock) VALUES ('$namabarang',$harga,$stock)";

$hasil=mysqli_query($koneksi, $sql);
}

$namabarang="laptop";
$harga=5000;
$stock=5;

$sql="SELECT * FROM barang";

$hasil=mysqli_query($koneksi, $sql);

var_dump($hasil);

echo"<table border=2px>
        <thead>
            <tr>
                <th>
                    BARANG
                </th>
                <th>
                    HARGA
                </th>
                <th>
                    STOCK
                </th>
            </tr>
        </thead>
        <tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}

echo "  </tbody>
    </table>";
?>