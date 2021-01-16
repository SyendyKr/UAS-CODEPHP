<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Ticket</title>
</head>
<body>
<style>
 body{
     background-image: url(bgweb.jpg) ;
     background-size: cover;
     background-attachment: fixed;
     color: antiquewhite;
 }
 tr,td{
     background-color:black;
 }
 form{
     padding: 60px ;
 }
 </style>
    <form action="output.php" method="POST">
    <table align="center" border="1" cellpadding="0" cellspacing="0" >
        <tr align="center"><td><h2> <b>PEMESANAN TICKET MASKAPAI</b></h2></td></tr>
        <tr>
            <td>
                <table widht="600" border="0" cellpadding="0" cellspacing="10" align="center">
                    <tr>
                        <td>Nama Pemesan</td>
                        <td> :</td>
                        <td><input name="nama" type="text" size="40" /></td>
                    </tr>
                    <tr>
                        <td>Jumlah Ticket</td>
                        <td> : </td>
                        <td>
                            <input name="jml" type="integer" size="40" />
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : </td>
                        <td>
                            <select name="kls" value="kls">
                                <option name="EKONOMI" value="EKONOMI">Ekonomi</option>
                                <option name="BISNIS" value="BISNIS">Bisnis</option>
                                <option name="EKSEKUTIF" value="EKSEKUTIF">Eksekutif</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td> : </td>
                        <td>
                            <select name="tujuan" value="tujuan">
                                <option name="BALI">Bali</option>
                                <option name="SAMARINDA">Samarinda</option>
                                <option name="BANDUNG">Bandung</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bagasi</td>
                        <td> : </td>
                        <td>
                            <input name="bagasi" type="radio" value="5KG"><label for="5KG">5 kg</label>
                            <input name="bagasi" type="radio" value="10KG"><label for="10KG">10 kg</label>
                            <input name="bagasi" type="radio" value="15KG"><label for="15KG">15 Kg</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Asuransi</td>
                        <td> : </td>
                        <td>
                            <input type="checkbox" name="asuransi[]" value="Asuransi Jiwa">Asuransi Jiwa
                            <input type="checkbox" name="asuransi[]" value="Asuransi Kecelakaan">Asuransi Kecelakaan
                            <input type="checkbox" name="asuransi[]" value="Asuransi Keterlambatan">Asuransi Keterlambatan
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" value="Simpan"/>
                            <input type="reset" value="Batal"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
</body>
</html>