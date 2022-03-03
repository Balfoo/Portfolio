<?php
include('partials/_header.php');
?>
<body>
    <div class="titre_presse">
        <h1>Presse</h1>
    </div>

    <section class="corp_presse">
        <p class="presse_gras">Retrouver ici tous les documents de presse.<p>
        
        <div class="document_presse">
            <div class="sous-document_presse">
                <h2>Communiqué de presse</h2>
                <a href="asset\téléchargement\communiqué_de_presse.pdf" target="_blanc">
                    <div class="apperçu_document">
                        <img class=img_presse src="asset\téléchargement\communiqué_de_presse_image.jpg" alt="Communiqué de presse">
                        <span class="dessus-document"><span class="dessus-titre">Lire le communiqué</span></span>
                    </div>
                </a>
            </div>  

            <div class="sous-document_presse">
                <h2>Dossier de presse</h2>
                    <a href="asset\téléchargement\Dossier_de_Presse.pdf" target="_blanc">
                        <div class="apperçu_document">
                        <img class=img_presse src="asset\téléchargement\Dossier_de_Presse_image.jpg" alt="Dossier de presse">
                            <span class="dessus-document"><span class="dessus-titre">Lire de dossier</span></span>
                        </div>
                    </a>
            </div>
        </div>
    </section>
    
</body>
<?php
include('partials/_footer.php');
?>

