
<?php

$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$N=$_POST["T1"];
$result = mysql_query("SELECT * FROM factoaca WHERE n= '$N'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$message = "Le Code Client existe déjà  !";
} else {
$N=$_POST["T1"];
$du=$_POST["D1"];
$au=$_POST["D2"];
$DateFact=$_POST["T2"];
$Num=$_POST["S1"];
$MPL=$_POST["S2"];
$TotalHT=$_POST["T3"];
$TVA=$_POST["T4"];
$timbre=$_POST["T5"];
$MTF=$_POST["T6"];
$sql="INSERT INTO factoaca VALUES ('$N','$du','$au','$DateFact','$Num','$MPL','$TotalHT','$TVA','$timbre','$MTF')";
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
   <script src="js/controle3.js"></script>
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
	<legend>Facture OACA</legend>
      <div class="message"><?php if($message!="") { echo $message; } ?></div>
	<p align="center">&nbsp;<div align="center">
		<table border="0" width="55%">
        <tr>
				<td width="213">NUM: </td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="T1" size="20"></td>
			</tr>
			<tr>
				<td>Période:</td>
				<td>Du :<input type="text" name="D1" size="10"></td>
			</tr>

			<tr>
				<td>Période:</td>
				<td>Au :<input type="text" name="D2" size="10">     </td>
			</tr>


			<tr>
				<td>Date :</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="T2" size="20"></td>
			</tr>
		</table>
		<div align="center">

				<p dir="ltr">&nbsp;</p>
				<div align="center">
                <table border="0" width="47%" bordercolor="#C0C0C0">
			<tr>
				<th bgcolor="#C0C0C0">Numero Poste</th>
				<th bgcolor="#C0C0C0" >Montant HT Par ligne </th>
			</tr>
			<tr>
				<td width="100" height="150"><textarea rows="20" cols="26" name="S1"></textarea></td>
				<td width="100" height="150">
				<textarea rows="20" name="S2" cols="26"></textarea></td>
			</tr>
        </table>
		<div align="center">
			<table border="0" width="35%">
				<tr>
					<td>Total HT:</td>
					<td>
					<p align="center"><input type="text" name="T3" size="20"></td>
				</tr>
				<tr>
					<td>TVA 18%:</td>
					<td>
					<p align="center"><input type="text" name="T4" size="20"></td>
				</tr>
				<tr>
					<td>Timbre:</td>
					<td>
					<p align="center"><input type="text" name="T5" size="20"></td>
				</tr>
				
			</table>

		</div>
					<table border="0" width="53%">
						<tr>
							<td><i><b><font size="5">Montant Total de la facture
							(en DT TTC) :<u> </u></font></b></i></td>
							<td><input type="text" name="T6" size="20"></td>
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
