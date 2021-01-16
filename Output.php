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
    <table align="center" border="1" cellpadding="0" cellspacing="0">
        <tr align="center"><td><h2> <b>PEMESANAN TICKET MASKAPAI</b></h2></td></tr>
        <tr>
            <td>
                <table style="font-family:courier" widht="450" border="0" cellpadding="0" cellspacing="10">
                    <tr>
                        <td>Nama Pemesan</td>
                        <td>:</td>
                        <td>
                            <?= $_POST['nama']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Beli</td>
                        <td> : </td>
                        <td>
                            <?= $_POST['jml']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : </td>
                        <td>
                             <?= $_POST['kls']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tujuan</td>
                        <td> : </td>
                        <td>
                             <?= $_POST['tujuan']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Bagasi</td>
                        <td> : </td>
                        <td>
                             <?php $bagasi = 0;?>
                            <?php if($_POST['bagasi'] == "10KG"):
                                        $bagasi = 150000;
                                        echo "(10KG) ( Rp" . number_format($bagasi) .")" ;
                                    elseif($_POST['bagasi'] == "15KG"):
                                        $bagasi = 200000;
                                        echo "(15KG) ( Rp" . number_format($bagasi).")";
                                    else:
                                        $bagasi= 100000;
                                        echo "(5KG) ( Rp" . number_format($bagasi).")";
                                    endif; 
                            ?>
                        </td>
                    </tr>
                    <tr>
                         <td>Asuransi</td>
                         <td>:</td>
                        <td>
                            <?php
                        if (isset($_POST['asuransi'])) {
                          $asuransi=$_POST['asuransi'];
                          echo "";
                          for ($i=0 ; $i < count ($asuransi); $i++){
                              echo $asuransi[$i]."  ";
                          }
                          $harga = count($asuransi) * 50000;
                          echo $harga;
                      }
                      ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td> : </td>
                        <td>
                            <?php $harga = 0; ?>
                            <?php if($_POST['kls'] == "BISNIS"):
                                        $harga = 2000000;
                                        number_format($harga);
                                    elseif($_POST['kls'] == "EKSEKUTIF"):
                                        $harga = 3000000;
                                         number_format($harga);
                                    else:
                                        $harga = 1000000;
                                        number_format($harga);
                                    endif; 
                            ?>
                              <?php
                              $totalharga = $harga * $_POST['jml'] ;
                              number_format($totalharga);
                              ?>
                            <?php $discount = 0; ?>
                            <?php
                            if ($_POST['jml'] >= 3):
                                $discount=(($totalharga*30)/100);
                                number_format($discount);
                            endif;
                            ?>
                            <?="Rp " . number_format($totalharga - $discount + $bagasi); ?>
                        </td>
                    </tr>
                    <td></td>
                    <td></td>
                        <td>
                            <a href="input.php"><button>Kembali</button></a> 
                        </td>
                 </tr>
             </table>
         </td>
     </tr>
</table>
</body>
</html>