<?php
include('partials/_header.php');
?>
<head>
	<!--
		<script src="https://maps.google.com/maps/api/js?key=[AJOUTEZ_VOTRE_CLE_API_ICI]" type="text/javascript"></script>
		<script async type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.852969;
			var lon = 2.349903;
			var map = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
				map = new google.maps.Map(document.getElementById("map"), {
					// Nous plaçons le centre de la carte avec les coordonnées ci-dessus
					center: new google.maps.LatLng(lat, lon), 
					// Nous définissons le zoom par défaut
					zoom: 11, 
					// Nous définissons le type de carte (ici carte routière)
					mapTypeId: google.maps.MapTypeId.ROADMAP, 
					// Nous activons les options de contrôle de la carte (plan, satellite...)
					mapTypeControl: true,
					// Nous désactivons la roulette de souris
					scrollwheel: false, 
					mapTypeControlOptions: {
						// Cette option sert à définir comment les options se placent
						style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
					},
					// Activation des options de navigation dans la carte (zoom...)
					navigationControl: true, 
					navigationControlOptions: {
						// Comment ces options doivent-elles s'afficher
						style: google.maps.NavigationControlStyle.ZOOM_PAN 
					}
				});
			}
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>
		-->
		<title>Infos pratiques</title>
</head>

<body>
	<div class='titre_infos_pratiques'>
		<h1>Informations pratiques</h1>	
	</div>
	<div class="corp_infos">
		<section class="dates_en_entier">
			<h2>Dates et horaires</h2>
				<div class="dates">
					<p>Du 26 au 27 juin 2021</p>
					<p>Ouverture de 9 heures à 18 heures</p>
				</div>	
			</section>
		
		<!--<img class="séparateur" src="asset/image/séparateur.png" alt="-">-->
		<div class="séparateur"></div>

		<section class="plan_acces_en_entier">	
			<h2>Plan d'accès :</h2>

			<div class="plan_acces">
				<div class="carte">
					<iframe width="600" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" sandbox="allow-forms allow-scripts allow-same-origin" src="https://www.geoportail.gouv.fr/embed/visu.html?c=3.16791,50.693026&z=17&l0=GEOGRAPHICALGRIDSYSTEMS.PLANIGNV2::GEOPORTAIL:OGC:WMTS(1)&d1=3408606(1)&permalink=yes" allowfullscreen></iframe>
					<!-- 
					<div id="map">
					// Ici s'affichera la carte
					</div>
					-->
				</div>

				<div class="accès">
					<p><span class="gras">Adresse :</span><br/>
					Le Vestiaire Maisons de Mode
					23 Rue de l'Espérance, 59100 Roubaix</p>


					<p><span class="gras">Transports en commun :</span><br/>
					Métro ligne 2 - station Jean Lebas <br/>
					Gare de Roubaix (à 500 mètres)<br/>
					Bus Z6 et 32 - arrêt Jean Lebas</p>


					<p><span class="gras">En vélo :</span><br/>
					V’Lille Musée art et industrie</p>


					<p><span class="gras">En voiture :</span><br/>
					D656 direction Tourcoing, sortie 10<br/>
					Parking payant de la gare</p>
				</div>
			</div>
		</section>

	</div>

</body>

<?php
include('partials/_footer.php');
?>

