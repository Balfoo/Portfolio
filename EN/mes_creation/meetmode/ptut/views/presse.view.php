<?php
include('partials/_header.php');
?>
<body>
    <div class="titre_presse">
        <h1>Press</h1>
    </div>

    <section class="corp_presse">
        <p class="presse_gras">Find all the press documents here.<p>
        
        <div class="document_presse">
            <div class="sous-document_presse">
                <h2>Press release</h2>
                <a href="asset\téléchargement\communiqué_de_presse.pdf" target="_blanc">
                    <div class="apperçu_document">
                        <img class=img_presse src="asset\téléchargement\communiqué_de_presse_image.jpg" alt="Communiqué de presse">
                        <span class="dessus-document"><span class="dessus-titre">Read the press release</span></span>
                    </div>
                </a>
            </div>  

            <div class="sous-document_presse">
                <h2>Press kit</h2>
                    <a href="asset\téléchargement\Dossier_de_Presse.pdf" target="_blanc">
                        <div class="apperçu_document">
                        <img class=img_presse src="asset\téléchargement\Dossier_de_Presse_image.jpg" alt="Dossier de presse">
                            <span class="dessus-document"><span class="dessus-titre">Read file</span></span>
                        </div>
                    </a>
            </div>
        </div>
    </section>
    
</body>
<?php
include('partials/_footer.php');
?>

