<?php

mysql_connect("localhost","root","");
mysql_select_db("gf2");
$sql='SELECT * FROM factdatatelecom';
$req=mysql_query($sql);
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Consultation</title>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="js/jquery.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <script src="js/style.js"></script>

</head>

  <body background="tunisair1.jpg">

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



         <fieldset style="padding: 2">
	<legend>Consultation Facture DATA Télécom</legend>
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">

                    <input class="form-control" id="system-search" name="q" placeholder="Search" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>  <br><br><br>

		<div class="col-md-9">
    	 <table class="table table-list-search">
                    <thead>
                        <tr >
                            <th>Code Client</th>
                            <th>Ref Facture</th>
                            <th>compte de facturation</th>
                            <th>Ligne globale</th>
                            <th>DU</th>
                            <th>AU</th>
                            <th>Total HT</th>
                            <th>Montant TVA</th>
                            <th>Détaxe TTC</th>
                            <th>Timbre fiscal</th>
                             <th>Net à payer TTC</th>
                            <th>Total Général  </th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <? while($row = mysql_fetch_array($req)) { ?>
        <td><? echo $row['CCL']; ?></td>
        <td><? echo $row['Ref fact']; ?></td>
        <td><? echo $row['Comptefact']; ?></td>
        <td><? echo $row['LigneGlobal']; ?></td>
        <td><? echo $row['DU']; ?></td>
        <td><? echo $row['AU']; ?></td>
        <td><? echo $row['TotalHT']; ?></td>
        <td><? echo $row['TVA']; ?></td>
        <td><? echo $row['detaxe']; ?></td>
        <td><? echo $row['timbre']; ?></td>
         <td><? echo $row['Net']; ?></td>
         <td><? echo $row['Total']; ?></td>
</tr>
<? }
?>
                    </tbody>
                </table>
		</div>
        </fieldset>
	</div>
</div>
                    </div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/style.js"></script>

</body>

</html>
