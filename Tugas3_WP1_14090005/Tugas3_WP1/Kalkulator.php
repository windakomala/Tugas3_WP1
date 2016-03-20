<html>
<head>
 <title>Web Kalkulator</title>
</head>
<body>
<!--
Sebagai desaign model baik warna dan bentuk menggunakan CSS
-->
<style type="text/css">
 .h1{
  font-family: Comic Sans MS;
  font-weight: bold;
  font-size: 16px;
 }
 .input{
   background-color: #ffffff;
   border: 1px solid #4B0082;
   padding: 5px;
   font: 0.2em;
   border-radius: 3px;
   color: #00000;
   
   
 }
 .hasil{
  margin-top: 20px;
  font-family: Comic Sans MS;
  font-size: 14px;
  font-weight: bold;
  background-color: #87CEFA;
 }
 .td{
  font-family: Comic Sans MS;
  color: #ffffff;
  background-color: #FF1493;
  
 }
 body{
  background-color: #FFE4C4;
 }
 .text{
   background: #dcdcdc;
   border-bottom: 1px dotted silver;
   padding: 4px;
 }
 .tabel{
   font-size: 1em;
   font-family: sans-serif;
   border: 1px solid #020000;
   background-color: #efefef;
   border-spacing: 2px;

 }
 .tombol {
   font-weight: bold;
     display: inline-block;
     *display: inline;
     padding: 4px 12px;
     margin-bottom: 0;
     *margin-left: .3em;
     font-size: 14px;
     line-height: 20px;
     color: #333333;
     text-align: center;
     text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
   vertical-align: middle;
   cursor: pointer;
   background-color: #f5f5f5;
   *background-color: #FF69B4;
   background-image: -moz-linear-gradient(top, #ffffff, #FF69B4);
   background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#FF69B4));
   background-image: -webkit-linear-gradient(top, #ffffff, #FF69B4);
      background-image: -o-linear-gradient(top, #ffffff, #FF69B4);
   background-image: linear-gradient(to bottom, #ffffff, #FF69B4);
   background-repeat: repeat-x;
   border: 1px solid #cccccc;
   *border: 0;
     border-color: #FF69B4 #FF69B4 #bfbfbf;
     border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
     border-bottom-color: #b3b3b3;
     -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
           border-radius: 4px;
     filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
     filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
     *zoom: 1;
     -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
       -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  }
 .tombol-aktif{
     color: #fffdfd;
     text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
     background-color: #040000;
     *background-color: #040000;
     background-image: -moz-linear-gradient(top, #040000, #040000);
     background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#040000), to(#040000));
     background-image: -webkit-linear-gradient(top, #040000, #040000);
     background-image: -o-linear-gradient(top, #040000, #040000);
     background-image: linear-gradient(to bottom, #040000, #040000);
     background-repeat: repeat-x;
     border-color: #ffffff #ffffff #ffffff;
     border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
     filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff01c5fe', endColorstr='#ffffffff', GradientType=0);
     filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  }
</style>
<!--
Perintah JavaScript untuk memberitahukan pesan warning apabila ada field yang kosong
-->
<script>
 function check(input){
  if(input.value==''){
   input.setCustomValidity('Harus diisi !! ');
  }else{
   input.setCustomValidity('');
  }
 }
</script>      
<center class="h1">--** WEB PROGRAMMING -> KALKULATOR **--</center> 
<center class="h2">By Novriani Hernawati dan Winda Komala Astriyani</center> <br></br>
 <form method="post" name="form" >
  <table align="center" height='20%' width='70%' class="tabel">
   <tr>
    <td align="center" class="td"><b>Angka 1</b></td>
    <td align="center" class="td"><b>Angka 2</b></td>
    <td align="center" colspan="3" class="td"><b>Operasi</b></td>
   </tr>
   <tr>
    <td align="center"><input type="text" class="input" oninvalid="check(this)" autofocus="true" required="true" style="width: 200px" 
	name="angka1" placeholder="Masukkan angka ke-1" onkeypress="return isNumber(event)"></td>
    <td align="center"><input type="text" class="input" oninvalid="check(this)"  required="true" style="width: 200px" 
	name="angka2" placeholder="Masukkan angka ke-2" onkeypress="return isNumber(event)"></td>
    <td align="center" >
     <input class="tombol" class="tombol tombol-aktif" type="submit" name="kali" value="x" title="Kali">
     <input class="tombol" type="submit" name="jumlah" value="+" title="Jumlah">
     <input class="tombol" type="submit" name="bagi" value=":" title="Bagi">
     <input class="tombol" type="submit" name="kurang" value="-" title="Kurang">
	 <input class="tombol" type="submit" name="mod" value="%" title="Modulus">
    </td>
	
<!--
Perintah PHP dimana sebagai operasi untuk menghitung antara "angka1" dan "angka2" yang sudah diinputkan. 
Ada proses perkalian,penjumlahan,pembagian dan pengurangan -->
    <?php
    if(isset($_POST["jumlah"])){
     $hasil = $_POST["angka1"] + $_POST["angka2"];
    }else if(isset($_POST["kali"])){
     $hasil = $_POST["angka1"] * $_POST["angka2"];
    }else if(isset($_POST["bagi"])){
     $hasil = $_POST["angka1"] / $_POST["angka2"];
    }else if(isset($_POST["kurang"])){
     $hasil = $_POST["angka1"] - $_POST["angka2"];
	}else if(isset($_POST["mod"])){
	 $hasil = $_POST["angka1"] % $_POST["angka2"];
	}
    
    ?>  
   </tr>
   
   <tr>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   </tr>
   <tr>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   </tr>
   <tr>
    <td class="hasil" colspan="3" align="center" ><input class="input" type="text" size="50" name="hasiljumlah" disabled="True" 
	value='<?php echo $hasil; ?>' title="Hasil">&nbsp;<b>Hasil</b>
    </td>
   </tr>
  </table>
 </form>
</body>
</html>