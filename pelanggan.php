<form action=""method="post">
    pelanggan:
    <input type="text" name="namapelanggan" placeholder="nama pelanggan">
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="alamat">
    <br>
    telepon:
    <input type="number" name="telepon" placeholder="telepon">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$host="127.0.0.1";
$user="root";
$passwaord="";
$db="dbtoko";

$koneksi= new mysqli($host, $user, $passwaord, $db); 
if (isset($_POST["simpan"])) {
    $namapelanggan= $_POST["namapelanggan"];
    $alamat= $_POST["alamat"];
    $telpon= $_POST["telepon"];

    $sql="INSERT INTO pelanggan (namapelanggan,alamat,telpon) VALUES ('$namapelanggan','$alamat',$telpon)";

    $hasil=mysqli_query($koneksi, $sql);
}

$sql="SELECT * FROM pelanggan";

$hasil=mysqli_query($koneksi, $sql);

echo "<table border=2px>
<thead>
    <tr>
        <th>
            PELANGGAN
        </th>


        <th>
            ALAMAT
        </th>


        <th>
            TELPON
        </th>
    </tr>
</thead>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
    echo "</tr>";
}
?>