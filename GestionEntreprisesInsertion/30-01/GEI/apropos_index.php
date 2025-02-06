<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>apropos_index</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="apropos_index.css" media="screen">
    
    
    
    
    
    
    
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="apropos_index">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="../" data-include-products="true" class="u-body u-xl-mode" data-lang="fr">
    <section class="u-black u-clearfix u-section-1" id="sec-5fad">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <span class="u-file-icon u-icon u-icon-rectangle u-text-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0" data-href="../index.html" data-page-id="229112023"><img src="../images/1169420-4538ae15.png" alt=""></span>
        <p class="u-hover-feature u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="300">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-none u-text-hover-custom-color-7 u-text-white u-btn-1" href="carte_index.html" data-page-id="178401805" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="300">Carte</a>
        </p>
        <p class="u-hover-feature u-text u-text-default-lg u-text-default-xl u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="500"><a href="apropos_plus.html">A propos</a> </p>
        <p class="u-hover-feature u-text u-text-default u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="100">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-none u-text-hover-custom-color-7 u-text-white u-btn-2" href="../index.html" data-page-id="229112023" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="100">Acceuil</a>
        </p>
        <p class="u-hover-feature u-text u-text-default u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="400">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-none u-text-hover-custom-color-7 u-text-white u-btn-3" href="contacter_index.php" data-page-id="300211020" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="400">Contact </a>
        </p>
        <p class="u-hover-feature u-text u-text-default u-text-5" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="200">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-none u-text-hover-custom-color-7 u-text-white u-btn-4" href="apropos_index.php" data-page-id="57767775" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="200">Rechercher</a>
        </p>
      </div>
      
      
      
      
      
      
      
      
      
    </section>
    <section class="u-clearfix u-custom-color-17 u-section-2" id="sec-4d2b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-lato u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="700">Vous cherchez quelque chose?</p>
        <p class="u-align-center u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="800">Recherchez ci-dessous ce que vous désirez sur nos entreprises déjà inscrites </p>
        <div class="u-border-1 u-border-grey-dark-1 u-expanded-width-xs u-line u-line-horizontal u-line-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="800"></div>
        <div class="u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="600">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-form u-form-1">
              
              <div class="form">
                <br><br>
                <form action="" method="post">
        <input 
                type="text" 
                name="q" 
                placeholder="Rechercher une entreprise (ex: Adecco)" 
                class="u-input u-input-rectangle u-radius u-input-1">
        <input 
                type="submit" 
                name="x" 
                value="Rechercher" 
                class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-20 u-hover-custom-color-22 u-radius u-btn-1">
                <?php
    $q=$_POST['q'] ?? "";
    $x=$_POST['x'] ?? "";

    if ($x && $q) {
      echo "<br><br>";
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=lato_gei', 'root', '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
            // Requête SQL corrigée
            $sql = $bdd->prepare("SELECT * FROM entreprises 
                WHERE id LIKE :q 
                OR email LIKE :q 
                OR coordonnees LIKE :q 
                OR num_tel LIKE :q 
                OR domaine LIKE :q 
                OR region LIKE :q 
                OR nom_entreprise LIKE :q 
                OR chef_ent LIKE :q");
    
            $sql->bindValue(':q', "%" . $q . "%", PDO::PARAM_STR);
            $sql->execute();
    
            $result = $sql->fetchAll(PDO::FETCH_OBJ);
    
            if ($result) {
                $nb = count($result);
                echo "<h4 style='background-color:#171717;border-radius:10px;padding: 10px;'>Nombre de résultats : ". "<b>" . $nb . "</b>". "</h4>";
                foreach ($result as $row) {
                  echo "<div style='text-align:left;'><strong><span style='font-size: 25px;border: 1px solid white;border-radius:10px;padding: 5px;'>" . $row->id . "</span> - " . "<span style='font-size: 20px;border: 1px solid white;border-radius:10px;padding: 5px;'>" . $row->nom_entreprise . "</strong> </span><br><br>" .
                  "<b>Email : </b>" . $row->email . "<br>" . "<b>Adresse : </b>" . $row->coordonnees . " <br>" . "<b>Téléphone : </b>" . $row->num_tel . "<br>" . "<b>Domaine de l'entreprise : </b>" .$row->domaine . "<br>" . 
                  "<b>Région de l'entreprise : </b>". $row->region . "<br>" . "<b>Chef de l'entreprise : </b>" . $row->chef_ent . "<br>" .
                  "<b>Actualités : </b>" . $row->actus . "<br>" . "<b>Chiffre d'affaire : </b>" . $row->ca . "</div><br>" ;
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
        } catch (Exception $e) {
            // Rien à afficher ici, gestion silencieuse
        }
    }
    ?>
            </form>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    

  
</body></html>
