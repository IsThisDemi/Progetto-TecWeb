<?php 
require_once "utilityphp/header.php";
require_once "utilityphp/admin_utilities.php";
$BackendResult="";
$DisplayMessage="";
if(!isset($_SESSION["admin"])||!$_SESSION["admin"]){
    $_SESSION["prev_page"]="adminpage.php";
    header("location:login.php");
}
else
{
    if (isset($_GET["action"])) {
        //id_corso`, `nome_corso`, `id_categoria`, `descrizione`, `immagine`, `alt`, `forza`, `equilibrio`, `resistenza`, `stabilità`, `intensita`, `durata`, `calorie`, `asciugamano`, `borraccia`, `calzini`, `tappetino`, `scarpe_sportive`, `guantoni`, `capelli_raccolti`, `abbigliamento_outdoor`, `scarpe_outdoor`, `accappatoio`, `cuffia`, `costume`, `ciabatte`, `piedi_nudi`
        if($_GET["action"]=="add_corso"
        &&isset($_POST["id_corso"])
        &&isset($_POST["nome_corso"])
        &&isset($_POST["id_categoria"])
        &&isset($_POST["descrizione"])
        &&isset($_POST["immagine"])
        &&isset($_POST["alt"])
        &&isset($_POST["forza"])
        &&isset($_POST["equilibrio"])
        &&isset($_POST["stabilità"])
        &&isset($_POST["durata"])
        &&isset($_POST["calorie"])
        &&isset($_POST["asciugamano"])
        &&isset($_POST["borraccia"])
        &&isset($_POST["stabilità"])
        &&isset($_POST["calzini"])
        &&isset($_POST["tappetino"])
        &&isset($_POST["scarpe_sportive"])
        &&isset($_POST["guantoni"])
        &&isset($_POST["capelli_raccolti"])
        &&isset($_POST["abbigliamento_outdoor"])
        &&isset($_POST["scarpe_outdoor"])
        &&isset($_POST["accappatoio"])
        &&isset($_POST["cuffia"])
        &&isset($_POST["costume"])
        &&isset($_POST["ciabatte"])
        &&isset($_POST["piedi_nudi"])){
            
        }
        /*if($_GET["action"]=="register"&&isset($_POST["username_registra"])&&isset($_POST["password_registra"])){
            
        }*/
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <title>Login FitnessCenter</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Login FitnessCenter"/>
    <meta name="description" content="pagina di login per FitnessCenter" />
	<meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link type="text/css"  rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" media="print" href="css/print.css" type="text/css"/>
	<link rel="shortcut icon" href="../images/favicon.ico" />
</head>
<body>

<?php 

    echo genera_header("admin");
    $categorie;
    if(GetCategorie($categorie)!="success"){

        ?>
        
        
        <?php 
    }
    else{

?>
<div id="content" class="adminpage">
    <form class="adminform" action="adminpage.php?action=insert" method="post" id="inserisci">
        <label for="nome_corso" lang="it">Nome</label>    
        <input id="nome_corso" type="text" placeholder="Nome corso" name="nome_corso" required />
        <label for="categoria_corso" lang="it">Categoria</label>
        <select id="categoria_corso" name="categoria_corso" required>
<?php   
        $categorie;
        GetCategorie($categorie)
        foreach($categorie as $id=>$nome){
            echo "<option value=".$id.">".$nome."</option>"
        }
?>
        </select>
        <fieldset>
            <legend>Presentazione:</legend>
            <label for="descrizione_corso" lang="it">Descrizione</label>    
            <textarea id="descrizione_corso" name="descrizione_corso" rows="4" cols="50" required>
                Breve descrizione del corso e delle attività svolte
            </textarea>
            <label for="link_immagine" lang="it">Link immagine</label>    
            <input id="link_immagine" type="text" placeholder="image.png" name="link_immagine" required />
            <label for="alt_immagine" lang="it">Alt text immagine</label>    
            <textarea id="alt_immagine" name="alt_immagine" rows="2" cols="25" required>
                Breve descrizione del immagine
            </textarea>
        </fieldset>
        <fieldset>
            <legend>Caratterisstice</legend>
                <input type="checkbox" id="forza" name="forza" value="forza">
                <label for="forza"> forza</label>
                <input type="checkbox" id="equilibrio" name="equilibrio" value="equilibrio">
                <label for="equilibrio"> equilibrio</label>
                <input type="checkbox" id="resistenza" name="resistenza" value="resistenza">
                <label for="resistenza">resistenza</label>
                <input type="checkbox" id="resistenza" name="resistenza" value="resistenza">
                <label for="resistenza">resistenza</label>
                <input type="checkbox" id="stabilità" name="stabilità" value="stabilità">
                <label for="stabilità">stabilità</label>
                <input type="checkbox" id="intensita" name="intensita" value="intensita">
                <label for="intensita">intensita</label>
        </fieldset>
        <fieldset>
            <legend>equipaggiamento</legend>
            <label for="calzature" lang="it">calzature</label>
            <select id="calzature" name="equipaggiamento_calzature" required>
                <option value="1">calzini</option>
                <option value="2">scarpe_sportive</option>
                <option value="3">scarpe outdoor</option>
                <option value="4">ciabatte</option>
                <option value="5">piedi nudi</option>
            </select>
            <input type="checkbox" id="forza" name="forza" value="forza">
                <label for="asciugamano"> asciugamano</label>
                <input type="checkbox" id="asciugamano" name="asciugamano" value="asciugamano">
                <label for="borraccia"> borraccia</label>
                <input type="checkbox" id="borraccia" name="borraccia" value="borraccia">
                <label for="tappetino">tappetino</label>
                <input type="checkbox" id="tappetino" name="tappetino" value="tappetino">
                <label for="guantoni">guantoni</label>
                <input type="checkbox" id="guantoni" name="guantoni" value="guantoni">
                <label for="capelli_raccolti">capelli raccolti</label>
                <input type="capelli_raccolti" id="capelli_raccolti" name="capelli_raccolti" value="capelli_raccolti">
                <label for="abbigliamento_outdoor">abbigliamento_outdoor</label>
                <input type="abbigliamento_outdoor" id="abbigliamento_outdoor" name="abbigliamento_outdoor" value="abbigliamento_outdoor">
                <label for="accappatoio">accappatoio</label>
                <input type="accappatoio" id="accappatoio" name="accappatoio" value="accappatoio">
                <label for="cuffia">cuffia</label>
                <input type="cuffia" id="cuffia" name="cuffia" value="cuffia">
                <label for="costume">costume</label>
                <input type="costume" id="costume" name="costume" value="costume">
        </fieldset>
        
        <input type="submit" name="inserisci">
    </form>
    id
</div>

</body>
<?php
    }
}
?>