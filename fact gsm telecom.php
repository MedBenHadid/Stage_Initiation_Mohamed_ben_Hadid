
<?php
$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$ccl=$_POST["T0"];
$result = mysql_query("SELECT * FROM factgsmtelecom WHERE CCL= '$ccl'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$message = "Le Code Client existe déjà  !";
} else {
$ccl=$_POST["T0"];
$nfact=$_POST["T1"];
$datefact=$_POST["T2"];
$Souscriptions=$_POST["T3"];
$abser=$_POST["T4"];
$commfixe=$_POST["T5"];
$commmobile=$_POST["T6"];
$comminter=$_POST["T7"];
$autrecomm=$_POST["T8"];
$remises=$_POST["T9"];
$tva=$_POST["T10"];
$redevance=$_POST["T11"];
$timbre=$_POST["T12"];
$num=$_POST["S1"];
$MPL=$_POST["S2"];
$mtf=$_POST["T13"];
$sql="INSERT INTO factgsmtelecom VALUES ('$ccl','$nfact','$datefact','$Souscriptions','$abser','$commfixe','$commmobile','$comminter','$autrecomm','$remises','$tva','$redevance','$timbre','$num','$MPL','$mtf')";
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
   <script src="js/controle1.js"></script>
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
	<legend>Facture GSM Télécom</legend>
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
	<p align="center">&nbsp;<div align="center">
		<table border="0" width="42%">
        <tr>
				<td>Code Client :</td>
				<td><input type="text" name="T0" size="20"></td>
			</tr>
			<tr>
				<td>N Facture:</td>
				<td><input type="text" name="T1" size="20"></td>
			</tr>
			<tr>
				<td>Date de Facturation</td>
				<td><input type="text" name="T2" size="20"></td>
			</tr>
		</table>
		<p><u><font size="5"><b><i>Description:</i></b></font></u></p>
		<div align="center">
			<table border="0" width="35%">
				<tr>
					<td>Souscriptions::</td>
					<td>
					<p align="center"><input type="text" name="T3" size="20"></td>
				</tr>
				<tr>
					<td>Abonnements et services:</td>
					<td>
					<p align="center"><input type="text" name="T4" size="20"></td>
				</tr>
				<tr>
					<td>Communications vers FIXE:</td>
					<td>
					<p align="center"><input type="text" name="T5" size="20"></td>
				</tr>
				<tr>
					<td>Communications vers Mobile:</td>
					<td>
					<p align="center"><input type="text" name="T6" size="20"></td>
				</tr>
				<tr>
					<td>Communications vers Internationales:</td>
					<td>
					<p align="center"><input type="text" name="T7" size="20"></td>
				</tr>
				<tr>
					<td>Autre Communications</td>
					<td>
					<p align="center"><input type="text" name="T8" size="20"></td>
				</tr>
				<tr>
					<td>Remises</td>
					<td>
					<p align="center"><input type="text" name="T9" size="20"></td>
				</tr>
			</table>
			<p><u><i><b><font size="5">Total Hors Taxes:</font></b></i></u></p>
			<div align="center">
				<table border="0" width="29%">
					<tr>
						<td>TVA(18%):</td>
						<td>
						<p align="center">
						<input type="text" name="T10" size="20"></td>
					</tr>
					<tr>
						<td>Redevance Télécom(5%):</td>
						<td>
						<p align="center">
						<input type="text" name="T11" size="20"></td>
					</tr>
					<tr>
						<td>Timbre Fiscal</td>
						<td>
						<p align="center">
						<input type="text" name="T12" size="20"></td>
					</tr>
				</table>
				<p dir="ltr">&nbsp;</p>
				<div align="center">
                <p><u><font size="5"><b><i>Récapitulatif des Contrats</i></b></font></u></p>
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
							<td><input type="text" name="T13" size="20"></td>
						</tr>
					</table>
				</div>
				<p dir="ltr">&nbsp;</p>
				<p dir="ltr">&nbsp;</p></div>
		</div>
	</div>
	<p align="center"><input type="submit" value="Envoyer" name="B1"><input type="reset" value="Rétablir" name="B2"></p>
	</fieldset><p align="center">&nbsp;</p>
</form>                 </center>
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