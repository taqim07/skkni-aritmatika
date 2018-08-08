<html>

<head>

                <title>Membuat Kalkulator Sederhana Menggunakan PHP</title>

                <link rel="stylesheet" type="text/css" href="style.css">
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
</head>

<body>

                <?php

// function isset() disini berfungsi untuk mengecek data, jadi apabila form di submit maka data akan tersimpan di masing-masing variabel.

                if(isset($_POST['hitung'])){

                                 // Variabel

                                $txt1 = $_POST['txt1'];

                                $txt2 = $_POST['txt2'];

                                //$txt3 = $_POST['txt3'];

                                $operator = $_POST['operator'];

                                                //untuk fungsi Switch case di sini untuk mengecek operator apa yang pilih sebelum data di submit.

                                                switch ($operator) {

                                                                case 'tambah':

                                                                                $hasil = $txt1+$txt2;

                                                                break;

                                                                case 'kurang':

                                                                                $hasil = $txt1-$txt2;

                                                                break;

                                                                case 'kali':

                                                                                $hasil = $txt1*$txt2;

                                                                break;

                                                                case 'bagi':

                                                                                $hasilx = $txt1/$txt2;
                                                                                $hasil=round($hasilx,2);
                                                                                


                                                                break;                                  

                                                }

                }

                ?>

                <div class="kalkulator">

                                <h1 class="judul">KALKULATOR</h1>

                                <form method="post" action="index.php">                                      

                                                <input type="text" name="txt1" class="txt" placeholder="Type Here ...">
                                                <input type="text" name="txt2" class="txt" placeholder="Type Here ...">
                                                
                                                <select class="operator" name="operator">

                                                                <option value="tambah"> + </option>

                                                                <option value="kurang"> - </option>

                                                                <option value="kali"> * </option>

                                                                <option value="bagi"> / </option>

                                                </select>

                                                <input type="submit" name="hitung" value="HITUNG" class="tombol">

                                                <input type="submit" name="reset" value="RESET" class="tombol">                                                                                                                                                                    

                                </form>
<?php
include"terbilang_ku.php";
 ?>

                                <?php if(isset($_POST['hitung'])){ ?>

                                                <input type="text" value="<?php echo $hasil; ?>" class="txt">
                                                <input type="text" value="<?php echo terbilang($hasil); ?>" class="txt">
                                                <?php echo '<br>';
                                                
                                                echo '<input onclick="play();" type="button" value="🔊 Play" /></input>';
                                                ?>

                                <?php }else{ ?>

                                <?php } ?>                                         

                </div>

<script type="text/javascript">
  function play (){
   responsiveVoice.speak(
    "<?php echo terbilang($hasil ); ?>",
    "Indonesian Male",
   );
  }

</script>

</body>

 

</html> 