
<?php

$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$Nclient=$_POST["T0"];
$result = mysql_query("SELECT * FROM factorange  WHERE Nclient= '$Nclient'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$message = "Le Code Client existe déjà  !";
} else {
$Nclient=$_POST["T0"];
$Nfact=$_POST["T1"];
$DateFact=$_POST["T2"];
$TotalHT=$_POST["T3"];
$TVA=$_POST["T4"];
$Redevance=$_POST["T5"];
$timbre=$_POST["T6"];
$Num=$_POST["S1"];
$MPL=$_POST["S2"];
$MTF=$_POST["T7"];
$sql="INSERT INTO factorange VALUES ('$Nclient','$Nfact','$DateFact','$TotalHT','$TVA','$Redevance','$timbre','$Num','$MPL','$MTF')";$req=mysql_query($sql) or die(mysql_error());
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
    <script src="js/controle2.js"></script>
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
                    <center>

<form name="F" method="POST" action="" onsubmit="return verif()">
	<fieldset style="padding: 2">
	<legend>Facture Orange</legend>
      <div class="message"><?php if($message!="") { echo $message; } ?></div>
	<p align="center">&nbsp;<div align="center">
		<table border="0" width="42%">
        <tr>
				<td width="213">N client:</td>
				<td><input type="text" name="T0" size="20"></td>
			</tr>
			<tr>
				<td>N Facture:</td>
				<td><input type="text" name="T1" size="20"></td>
			</tr>
			<tr>
				<td>Date de Facturation:</td>
				<td><input type="text" name="T2" size="20"></td>
			</tr>
		</table>
		<p><u><font size="5"><b><i>Description:</i></b></font></u></p>
		<div align="center">
			<table border="0" width="35%">
				<tr>
					<td>Total hors taxes:</td>
					<td>
					<p align="center"><input type="text" name="T3" size="20"></td>
				</tr>
				<tr>
					<td>TVA 18%:</td>
					<td>
					<p align="center"><input type="text" name="T4" size="20"></td>
				</tr>
				<tr>
					<td>Redevance Télécom 5%:</td>
					<td>
					<p align="center"><input type="text" name="T5" size="20"></td>
				</tr>
				<tr>
					<td>Droit de timbre sur consommation 10%:</td>
					<td>
					<p align="center"><input type="text" name="T6" size="20"></td>
				</tr>

			</table>

				<p dir="ltr">&nbsp;</p>
				<div align="center">
                <table border="0" width="47%" bordercolor="#C0C0C0">
			<tr>
				<th bgcolor="#C0C0C0">Numero</th>
				<th bgcolor="#C0C0C0" >Montant HT Par ligne </th>
			</tr>
			<tr>
				<td width="100" height="150"><textarea rows="20" cols="26" name="S1"></textarea></td>
				<td width="100" height="150">
				<textarea rows="20" name="S2" cols="26"></textarea></td>
			</tr>
        </table>
					<table border="0" width="53%">
						<tr>
							<td><i><b><font size="5">Montant Total de la facture
							(en DT TTC) :<u> </u></font></b></i></td>
							<td><input type="text" name="T7" size="20"></td>
						</tr>
					</table>
				</div>

		</div>
	</div>
	<p align="center"><input type="submit" value="Envoyer" name="B1"  class="glyphicon glyphicon-log-out"><input type="reset" value="Rétablir" name="B2"  class="glyphicon glyphicon-log-out"></p>
	</fieldset>
</form>

</center>
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
