<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un Terrain </title>
	<meta charset='UTF-8' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />

	<script src="script/jquery-2.1.4.js"></script>
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
	<script type="text/javascript" src="script/locationpicker.jquery.min.js"></script>  
	<script type="text/javascript" src="script/jquery.cropit.js"></script>  


</head>
<body>
	<header>
		<?php include('privateMenu.php');?>
	</header>
<section id="contents">
	<div class="container">	
		<h2>Ajouter un nouveau terrain</h2>

		<div class="col-xs-12">
			<div class="col-md-6">
				<form id="formInscrip" action='controller/ControlAddTerrain.php' method="post">
						<input type="hidden" name="login" value= "<?php echo $_SESSION['Auth']['login']; ?> "/><br />
					<div class="form-group">
						<label for='prix'>Prix</label><br />
						<input type="text" class="form-control" name="prix" /><br />
					</div>
					<div class="form-group">
						<label for="us3-address"><i class="fa fa-map-marker"></i> Adresse</label>  
	                    <input type="text" class="form-control" id="us3-address" name="adresse" >
	                    <input type="hidden" class="form-control" id="us5-street1"  name="us5-street1" >  
	                    <input type="hidden" class="form-control" id="us5-city" name="us5-city">   
	                    <input type="hidden" class="form-control" id="us5-zip" name="us5-zip" >
	                    <input type="hidden" class="form-control"  id="us3-lat" name="us3-lat" >
	                    <input type="hidden" class="form-control"  id="us3-lon" name="us3-lon" > 
					</div>
					<div class="form-group">
						<label for='detail'>Details</label><br />
						<textarea class="form-control" rows="4" cols="50" name="detail" ></textarea><br />
					</div>
					<div class="form-group">
						<label for='description'>Description</label><br />
						<textarea class="form-control" rows="4" cols="50"  name="description" ></textarea><br />
					</div>

						<input type="submit" class="btn btn-default" value="Envoyer">
				</form>
			</div>
								
			<div class="col-md-6">
				<div id="us3" style="width: 510px; height: 400px;margin:114px 0 0"></div> 
			</div>	
		</div>
			<!--script geolocalitation-->				
			<script>
                function updateControls(addressComponents) {
                $('#us5-street1').val(addressComponents.addressLine1);
                $('#us5-city').val(addressComponents.city); 
                $('#us5-zip').val(addressComponents.postalCode); 
                }
                                                  
                $('#us3').locationpicker({
                    radius: 0,
                    location: {latitude: 50.818531, longitude:  4.401122}, 
                    inputBinding: {  
                    	latitudeInput: $('#us3-lat'),
                        longitudeInput: $('#us3-lon'),
                        locationNameInput: $('#us3-address')
                        },
                    enableAutocomplete: true,
                    onchanged: function (currentLocation, radius, isMarkerDropped) {                                      
                        var addressComponents = $(this).locationpicker('map').location.addressComponents;
                        updateControls(addressComponents);                         
                    },                                
                    oninitialized: function(component) {
                 	    var addressComponents = $(component).locationpicker('map').location.addressComponents;
                        updateControls(addressComponents);
                    }
                                                     
                });
         	</script> 

		
		<!-- Photos -->
		
		<div class="col-xs-12">
		<h2>Ajouter des photos</h2>
		<form method="POST" action="controller/ajoutImage.php" enctype="multipart/form-data">
			<input type="hidden" name="login" value= "<?php echo $_SESSION['Auth']['login']; ?> "/><br />
		            
		    <div class="image-editor">                                    
			    <div class="cropit-image-preview-container">
			    	<div class="cropit-image-preview"></div>
			    </div>                          
			    <div class="slider-wrapper">
			        <i class="fa fa-picture-o"></i> 
			        <input class="cropit-image-zoom-input custom" type="range" min="0" max="1" step="0.01">
			        <i class="fa fa-picture-o"></i> 
			    </div>
			     <!-- On limite le fichier à 2MO -->
			     <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			     <p class="help-block">format jpg (maximum 2 Mégas. Dimension recommandée: 995x588)</p> 
			     Fichier : <input type="file" name="imageTerrain"  class="cropit-image-input btn btn-default  nobg"><br/>
			     <label for='legende'>Legende de l'image</label><br />
			     <input type="text" name="legende">
			     <button type="submit" name="envoyer"  class="btn btn-default btn-blue">Valider</button>
			</div>
		</form>
		</div>

		<!-- PHOTO PRINCIPALE-->
		<div class="col-xs-12">
		<h2>Ajouter une photo principale</h2>
		<form method="POST" action="controller/ajoutImagePrincipal.php" enctype="multipart/form-data">
			<input type="hidden" name="login" value= "<?php echo $_SESSION['Auth']['login']; ?> "/><br />
		            
		    <div class="image-editor">                                    
			    <div class="cropit-image-preview-container">
			    	<div class="cropit-image-preview"></div>
			    </div>                          
			    <div class="slider-wrapper">
			        <i class="fa fa-picture-o"></i> 
			        <input class="cropit-image-zoom-input custom" type="range" min="0" max="1" step="0.01">
			        <i class="fa fa-picture-o"></i> 
			    </div>
			     <!-- On limite le fichier à 2MO -->
			     <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			     <p class="help-block">format jpg (maximum 2 Mégas. Dimension recommandée: 995x588)</p> 
			     Fichier : <input type="file" name="imageTerrain"  class="cropit-image-input btn btn-default  nobg"><br/>
			     <label for='legende'>Legende de l'image</label><br />
			     <input type="text" name="legende">
			     <button type="submit" name="envoyer"  class="btn btn-default btn-blue">Valider</button>
			</div>
		</form>
		</div>
	</div>
</section>
	<footer>
		<?php include('footer.php'); ?>
	</footer>
	<!--Script pour cropit image-->
    <script>
      $(function() { 
	  
        $('.image-editor').cropit({ 
		  quality: .7,
		  width: 600,
		  height: 300,  
		  smallImage: 'allow',
		  maxZoom:2,
		  minZoom:'fit', 
		  smallImage:'allow', 
		  freeMove:true, 
		  fillBg: '#fff',
		  imageBackground: true,
		  imageBackgroundBorderWidth: 15 // Width of background border
		});
        $('form.image-edit').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export', { 
			  quality: .7,
  				type: 'image/jpeg', 
			});
          $('.hidden-image-data').val(imageData); 
		
        });
		 
		  
        $('.logo-editor').cropit({ 
		  quality: .7,
		  width: 250,
		  height: 200,  
		  fillBg: '#fff',
		  smallImage: 'allow',
		  maxZoom:2,  
		  minZoom:'fit', 
		  smallImage:'allow', 
		  freeMove:true, 
		  imageBackground: true,
		  imageBackgroundBorderWidth: 15 // Width of background border
		});
        $('form.logo-edit').submit(function() {
          // Move cropped image data to hidden input
          var imageData = $('.logo-editor').cropit('export', { 
			  quality: .7,
  				type: 'image/jpeg', 
			});
          $('.hidden-logo-data').val(imageData); 
		
        });
		
		
		
      });
    </script>
</body>
</html>