</main>

<footer class="jumbotron row m-0 p-0 bg-fourthColor no-gutters">

    <div class="form-group display-block col-3 align-self-center px-5">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
      <small id="emailHelp" class="form-text text-muted">Nous ne divulgons pas les e-mails !</small>
    </div>

    <div class="block col-6 row align-self-center px-5">
        <div class="col-6 align-self-center footerText p-4">
            <h6>Adresse</h6>
            <p class="lead footerText">12 Rue du mail</p>
            <p class="lead footerText">56100 Lorient</p>
            <hr>    
            <h6 >Téléphone</h6>
            <p class="lead">02 92 54 18 67</p>
        </div>
        <div id="map" class="m-2 no-gutters">
			<!-- Ici s'affichera la carte -->
		</div>
        </div>
    </div>

    <div class="block my-4  col-3 align-self-center">
    <ul class="flex fullCenter">
              <li>
                 <a href="https://twitter.com">
                    <img class="icone" src="img/icoTwitter.png" alt="logo twitter clicable">
                 </a>
                 <a href="https://www.facebook.com/">
                    <img class="icone" src="img\icoFacebook2.png" alt="logo facebook clicable">
                 </a>
                 <a href="https://www.instagram.com/">
                    <img class="icone" src="img\icoInstagram2.png" alt="logo instagram clicable">
                 </a>
                 <a href="https://www.tiktok.com/">
                    <img class="icone" src="img\icons8-tic-tac-50.png" alt="logo tiktok clicable">
                 </a>
              </li>
           </ul>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script><script src="https://maps.google.com/maps/api/js?key=AIzaSyC4Co-a_Ymv-nMTYljmVSzoJ9kZanbabuc" type="text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCjxFfIvzJsA2ACJMVgb_LQX4v8_8K49jY" type="text/javascript"></script>

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
</body>

</html>
