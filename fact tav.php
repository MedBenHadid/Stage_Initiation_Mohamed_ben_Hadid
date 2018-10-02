<?php

$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$N=$_POST["T1"];
$result = mysql_query("SELECT * FROM facttav WHERE N= '$N'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$message = "Le Code Client existe déjà  !";
} else {
$N=$_POST["T1"];
$Ref=$_POST["T2"];
$DateFact=$_POST["T3"];
$Description=$_POST["S1"];
$TotalAmount=$_POST["S2"];
$TotalHT=$_POST["T7"];
$VATRate=$_POST["T8"];
$VATAmount=$_POST["T9"];
$Total=$_POST["T10"];
$Stamptax=$_POST["T11"];
$Amounttobepaid=$_POST["T12"];
$LastPaymentDate=$_POST["T13"];
$sql="INSERT INTO facttav VALUES ('$N','$Ref','$DateFact','$Description','$TotalAmount','$TotalHT','$VATRate','$VATAmount','$Total','$Stamptax','$Amounttobepaid','$LastPaymentDate')";
$req=mysql_query($sql) or die(mysql_error());
  if($req){
      $message="Insertion de la facture avec succés";
}
}
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="js/jquery.js"></script>
    <script src="js/controle4.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

   <body background="tunisair1.jpg">

 <!-- - - - - - - - - - - - - - - - - - Body- - - - - - - - - - - - - - - - - - - -  -->

         <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="acceuil.php">
                       Gestion des facture
                    </a>
                </li>
                 <li>
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facture Telecom </a>
                  <ul class="dropdown-menu" role="menu">

                    <li><a href="fact Fixe telecom.php">Ligne Fixe</a></li>
                    <li><a href="fact gsm telecom.php"> Ligne GSM</a></li>
                    <li><a href="fact ADSL telecom.php">Ligne ADSL</a></li>
                    <li><a href="fact data telecom.php">Ligne DATA</a></li>


                  </ul>
                </li>
                </li>

                <li>
                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facture Orange </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="fact orange .php">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>
                </li>
                 <li>
                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facture OACA </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="fact OACA.php">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>
                </li>
                 <li>
                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facture TAV </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="fact tav.php">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="consultationfixetelecom.php">Ligne Fixe Télécom</a></li>
                    <li><a href="consultationgsmtelecom.php">Ligne GSM Télécom</a></li>
                    <li><a href="consultationadsltelecom.php">Ligne ADSL Télécom</a></li>
                    <li><a href="consultationdatatelecom.php">Ligne DATA Télécom</a></li>
                    <li><a href="consultationorange.php">Ligne Fixe orange</a></li>
                    <li><a href="consultationoaca.php">Ligne Fixe OACA</a></li>
                    <li><a href="consultationtav.php">Ligne Fixe TAV</a></li>
                  </ul>
                </li>
            </ul>


        <div id="page-content-wrapper">

                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                    <p style="text-align: right">
                         <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>

        </p>
                    <center><form name="F" method="POST" action="" onsubmit="return verif()">

	<fieldset style="padding: 2">
	<legend>Facture TVA</legend>
      <div class="message"><?php if($message!="") { echo $message; } ?></div>
	<p align="center">&nbsp;</p>
	<div align="center">
		<table border="0" width="28%">
			<tr>
				<td>NUM:</td>
				<td><input type="text" name="T1" size="20"></td>
			</tr>
			<tr>
				<td>Réf:</td>
				<td><input type="text" name="T2" size="20"></td>
			</tr>
			<tr>
				<td>Date :</td>
				<td><input type="text" name="T3" size="20"></td>
			</tr>
		</table>
	</div>
	<div align="center">

		<p>&nbsp;</p>
		<table border="0" width="47%" bordercolor="#C0C0C0">
			<tr>
				<th bgcolor="#C0C0C0">Description</th>
				<th bgcolor="#C0C0C0" width="148">Total Amount</th>
			</tr>
			<tr>
				<td height="200"><textarea rows="12" name="S1" cols="42"></textarea></td>
				<td width="148" height="200">
				<textarea rows="12" name="S2" cols="16"></textarea></td>
			</tr>
			<tr>
				<td>Total(HT) :</td>
				<td width="148"><input type="text" name="T7" size="20"></td>
			</tr>
			<tr>
				<td>VAT Rate:</td>
				<td width="148"><input type="text" name="T8" size="20"></td>
			</tr>
			<tr>
				<td>VAT Amount:</td>
				<td width="148"><input type="text" name="T9" size="20"></td>
			</tr>
			<tr>
				<td>Total(incl.tax):</td>
				<td width="148"><input type="text" name="T10" size="20"></td>
			</tr>
			<tr>
				<td>Stamp tax:</td>
				<td width="148"><input type="text" name="T11" size="20"></td>
			</tr>
			<tr>
				<td>Amount to be paid :</td>
				<td width="148"><input type="text" name="T12" size="20"></td>
			</tr>
			<tr>
				<td>Last Payment Date:</td>
				<td width="148"><input type="text" name="T13" size="20"></td>
			</tr>
			</table>
	</div>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center">&nbsp;</p>
	<p align="center"><input type="submit" value="Envoyer" name="B1"><input type="reset" value="Rétablir" name="B2"></p>
	<p align="center">&nbsp;</p>
	</fieldset><p align="center">&nbsp;</p>
</form></center>
                    </div>
                </div>
            </div>


 <!-- - - - - - - - - - - - - - - - - - Body- - - - - - - - - - - - - - - - - - - -  -->

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/style.js"></script>
  </body>
</html>