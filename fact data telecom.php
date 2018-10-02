
<?php
$message="";
if(count($_POST)>0) {
mysql_connect("localhost","root","");
mysql_select_db("gf2");
$ccl=$_POST["T0"];
$result = mysql_query("SELECT * FROM factDATAtelecom WHERE CCL= '$ccl'");
$row = mysql_fetch_array($result);
if(is_array($row)) {
$message = "Le Code Client existe déjà  !";
} else {
$ccl=$_POST["T0"];
$Reffact=$_POST["T1"];
$comptefact=$_POST["T2"];
$LG=$_POST["T3"];
$du=$_POST["du"];
$au=$_POST["au"];
$Ncompte=$_POST["T6"];
$service=$_POST["S1"];
$MHT=$_POST["S2"];
$totalHT=$_POST["T7"];
$tva=$_POST["T8"];
$redevance=$_POST["T9"];
$dus=$_POST["T10"];
$acompte=$_POST["T11"];
$ForcementTTC=$_POST["T12"];
$DetaxeTTC=$_POST["T13"];
$timbre=$_POST["T14"];
$NetTTC=$_POST["T15"];
$NLigne=$_POST["S3"];
$MHTligne=$_POST["S4"];
$Total=$_POST["T16"];
$sql="INSERT INTO factDATAtelecom VALUES ('$ccl','$Reffact','$comptefact','$LG','$du','$au','$Ncompte','$service','$MHT','$totalHT','$tva','$redevance','$dus','$acompte','$ForcementTTC','$DetaxeTTC','$timbre','$NetTTC','$NLigne','$MHTligne','$Total')";
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
   <script src="js/controle.js"></script>
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


                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture Telecom</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>


                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture Ooredoo</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>


                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture Orange</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>


                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture OACA</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>


                       <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultation facture TAV</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Ligne Fixe</a></li>
                    <li><a href="#">Ligne GSM</a></li>
                    <li><a href="#">Ligne ADSL</a></li>
                    <li><a href="#">Ligne DATA</a></li>
                  </ul>
                </li>

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
<form name="F"method="POST" action="" onsubmit="return verif()">


	<fieldset style="padding: 2">
	<legend id="fixe">Facture DATA Télécom</legend>
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
<div align="center">
		<table border="0" width="44%">
        	<tr>
				<td width="213">Code client</td>
				<td><input type="text" name="T0" size="20"></td>
			</tr>
			<tr>
				<td width="213">Ref Facture:</td>
				<td><input type="text" name="T1" size="20"></td>
			</tr>
			<tr>
				<td width="213">Compte de facturation:</td>
				<td><input type="text" name="T2" size="20"></td>
			</tr>
			<tr>
				<td width="213">Ligne globale:</td>
				<td><input type="text" name="T3" size="20"></td>
			</tr>
			<tr>
				<td width="213">Période du:</td>
				<td><input type="text" name="du" size="20"></td>
			</tr>
			<tr>
				<td width="213">Au:</td>
				<td><input type="text" name="au" size="20"></td>
			</tr>
			<tr>
				<td width="213">N du compte courant:</td>
				<td><input type="text" name="T6" size="20"></td>
			</tr>
		</table>
		<p>&nbsp;</p>
		<table border="0" width="47%" bordercolor="#C0C0C0">
			<tr>
				<th bgcolor="#C0C0C0">Service</th>
				<th bgcolor="#C0C0C0" width="148">Montant HT</th>
			</tr>
			<tr>
				<td height="200"><textarea rows="12" name="S1" cols="42"></textarea></td>
				<td width="148" height="200">
				<textarea rows="12" name="S2" cols="16"></textarea></td>
			</tr>
			<tr>
				<td>Total HT:</td>
				<td width="148"><input type="text" name="T7" size="20"></td>
			</tr>
			<tr>
				<td>Montant TVA:</td>
				<td width="148"><input type="text" name="T8" size="20"></td>
			</tr>
			<tr>
				<td>Redevance Télécom:</td>
				<td width="148"><input type="text" name="T9" size="20"></td>
			</tr>
			<tr>
				<td>Dus antérieurs:</td>
				<td width="148"><input type="text" name="T10" size="20"></td>
			</tr>
			<tr>
				<td>Acompte:</td>
				<td width="148"><input type="text" name="T11" size="20"></td>
			</tr>
			<tr>
				<td>Forcement TTC:</td>
				<td width="148"><input type="text" name="T12" size="20"></td>
			</tr>
			<tr>
				<td>Détaxe TTC:</td>
				<td width="148"><input type="text" name="T13" size="20"></td>
			</tr>
			<tr>
				<td>Timbre fiscal:</td>
				<td width="148"><input type="text" name="T14" size="20"></td>
			</tr>
			<tr>
				<td>Net à payer TTC:</td>
				<td width="148"><input type="text" name="T15" size="20"></td>
			</tr>
		</table>
                        <table border="0" width="47%" bordercolor="#C0C0C0">
			<tr>
				<th bgcolor="#C0C0C0">N Ligne</th>
				<th bgcolor="#C0C0C0" >Montant HT Par ligne </th>
			</tr>
			<tr>
				<td width="100" height="150"><textarea rows="20" cols="26" name="S3"></textarea></td>
				<td width="100" height="150">
				<textarea rows="20" name="S4" cols="26"></textarea></td>
			</tr>
        </table>
        	<table border="0" width="53%">
						<tr>
							<td><i><b><font size="5">Total Général
						   <u> </u></font></b></i></td>
							<td><input type="text" name="T16" size="20"></td>
						</tr>
					</table>

	</div>
	<p align="center" dir="ltr"><input type="submit" value="Envoyer" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Rétablir" name="B2"></p>
	<p>&nbsp;</p>
	</fieldset><p>&nbsp;</p>
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