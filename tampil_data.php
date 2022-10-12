<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONFIRMASI</title>
    <link rel="stylesheet" href="css/style_form.css">
    <script type="text/javascript" src="darkmode.js"></script>
    <link rel="icon" href="https://ipmboyolali.com/uploads/cover_blog/lambang_ipm.jpg">
</head>
<body>
    <div class="navbar">
        <img width="50" height="80" src="image/Logo_IPM.png" class="logo-navbar">
        <div class="navbar-logo">IKATAN PELAJAR MUHAMMADIYAH<br>KALIMANTAN TIMUR</div>
        <div class="navbar-list">
            <ul>
                <li><button onclick="myFunction()">dark mode</button></li>
                <li><a href="index.html" onclick=""><i class="home"></i>Home</a></li>
                <li><a href="profil.html" onclick=""><i class="profil"></i>Profil IPM KALTIM</a></li>
                <li><a href="seputaripm.html" onclick=""><i class="seputar"></i>Seputar IPM KALTIM</a></li>
                </ul>
            </div>
    </div>
    <p class="judul" >DATA ANDA BERHASIL DISIMPAN</p>
    <?php if(isset($_POST['simpan'])){?>
        <div class="form">
       <table>
       <tr>
            <td><h3>Nama</h3</td>
            <td>
                <h3 id="nama" class="jarak-atas"><?php echo $_POST['Nama'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Tanggal Lahir</h3></td>
            <td>
                <h3 id="TanggalLahir" class="jarak-atas"><?php echo $_POST['TanggalLahir'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Nomor HP</h3></td>
            <td>
                <h3 id="NomorHP" class="jarak-atas"><?php echo $_POST['NomorHP'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Jabatan</h3></td>
            <td>
                <h3 id="Jabatan" class="jarak-atas"><?php echo $_POST['Jabatan'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Asal Pimpinan Daerah</h3></td>
            <td>
                <h3 id="Asal" class="jarak-atas"><?php echo $_POST['Asal'] ?></h3>
            </td>
        </tr>
        <tr>
            <td><h3>Pengkaderan Terakhir</h3></td>
            <td>
                <h3 id="TM" class="jarak-atas"><?php echo $_POST['TM'] ?></h3>
            </td>
        </tr>
       </table>
       </div>
    <?php } ?>
</body>
<style>

h1{
	text-align: center;
}

.form{
 	width: 1106px;
 	background-color: #fff;
 	position: fixed;
 	margin-left: 142px;
	text-align: center;
	top: 122px;
	color: black;
}

table{
    margin-left: 20px;
    margin-top: 20px;
    font-size: 14px;
    width: 759px;
    margin: 2% auto;

}
table td{
    padding: 5px 5px;
}

th, td {
  border-bottom: 1px solid #DDD;
}

</style>
</html>