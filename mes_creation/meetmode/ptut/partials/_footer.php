<footer>
    
<div class="réseaux_bas">
  <p>Suivez nous 
    <a href="https://www.facebook.com/Meet_Modede_fils_en_aiguille-111338897840157" target="_blank"><img src="asset/image/réseaux/facebook.svg" alt="Facebook"/></a>
    <a href="https://twitter.com/meet_mode" target="_blank"><img src="asset/image/réseaux/twitter.svg" alt="Twitter"/></a>
    <a href="https://www.instagram.com/meet_mode.de_fils_en_aiguille/" target="_blank"><img src="asset/image/réseaux/insta.svg" alt="Instagram"/></a>
    <a href="https://www.youtube.com/channel/UCJagL3hyKqyWxSlkJIS4hYA" target="_blank"><img src="asset/image/réseaux/youtube.svg" alt="YouTube"/></a>
  </p>

  <p><a href="../newsletter/index.php">S'inscrire à la newsletter</a> </p>
  
</div>

<div class="infos_bas">
  <p><span class="bas_titre">Les dates : </span><br />
  Du 26 au 27 juin 2021<br />
  Ouverture de 9 heures à 18 heures<br />
  </p>

  <p><span class="bas_titre">Le lieu : </span><br />
  La Piscine-Musée d'Art et d'Industrie<br />
  23 Rue de l'Espérance, 59100 Roubaix<br />
  <a href="info_pratique.php">(Voir le plan)</a>
  </p>

  <a href="#"><img src="asset/image/flèche-haut.png" alt="Aller vers le haut" title="Aller en haut de la page"></a>

</div>

    <nav class="float-end">
      <a href="ressources.php">Télecharger nos ressources</a>
      <a href="mention_legale.php">Mention légale </a>
      <a  href="contact.php">Contact</a>
      <a href='#'>Site créé par l'agence Hestia.co</a> 
      © 2021 Meet Mode
    </nav>

<div class="logo_partenaires">
      <a href="https://www.caisse-epargne.fr/hauts-de-france/particuliers" target="_blanc"><img src="asset\image\logos-partenaires\caisse_d_epargne-sombre.png" alt="Caisse d'épargne"></a>
      <a href="https://www.hautsdefrance.fr/" target="_blanc"><img src="asset\image\logos-partenaires\hauts-de-france.png" alt="Région Haut de France"></a>
      <a href="https://www.roubaix-lapiscine.com/" target="_blanc"><img src="asset\image\logos-partenaires\la_piscine-sombre.png" alt="musée de la piscine"></a>
      <a href="https://www.nord.gouv.fr" target="_blanc"><img src="asset\image\logos-partenaires\prefet_npdc-sombre.png" alt="Le préfét"></a>
      <a href="https://www.ville-roubaix.fr/" target="_blanc"><img src="asset\image\logos-partenaires\roubaix_sombre.png" alt="Ville de Roubaix"></a>
      <a href="https://www.lillemetropole.fr/" target="_blanc"><img src="asset\image\logos-partenaires\MEL.png" alt="Métropole de Lille"></a>
</div>

</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Version jQuery pour le carrousel -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.5/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
              $('.owl-carousel').owlCarousel({
                loop:false,
                rewind:true,
                margin:10,
                nav:false,
                dots:true,
                video:true,
                lazyLoad: true,
                caption:true,
                autoplay:true,
                // autoplayTimeout:4000, // Time Before Change (4s)
                smartSpeed:500, // Transition-delay (500ms)
                autoplayHoverPause:true,
                // navText:["<img id='left-arrow' src='assets/img/left-arrow.svg'>","<img id='right-arrow' src='assets/img/right-arrow.svg'>"],
                responsive:{
                    0:{
                        items:1
                    },
                    3000:{
                        items:1
                    }
                }
              });
            });
    </script>
    <script language="javascript">
        $(function() {
            toastr.options = {
               "closeButton": true,
               "debug": false,
               "positionClass": "toast-bottom-left",
               // "showDuration": "10000",
               // "hideDuration": "100",
               "timeOut": "0",
               // "extendedTimeOut": "1000",
               "showEasing": "swing",
               "hideEasing": "linear",
               "showMethod": "fadeIn",
               "hideMethod": "fadeOut",
            }
      toastr.info("<p>Les cookies nous aident à fournir nos services. En utilisant nos services, vous acceptez notre utilisation des cookies. <a href='./article?article_id=71' target='_blank' style='display:block; text-decoration: underline;'>Plus de détails</a></p>");
        });
    </script>
</body>
</html>