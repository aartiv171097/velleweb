<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img {
		  max-width: 100%; /* This rule is very important, please do not ignore this! */
		}
		.image_container{
			width:600px;
			height: 500px;	
		}
	</style>
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{  asset('css/cropper.min.css')}}">
    <script type="text/javascript" src="{{ asset('js/cropper.min.js')}}"></script>
</head>
<body>
	
	<input type="file" name="image" id="image" onchange="readURL(this);"/>
	<div class="image_container">
		<img id="blah" src="#" alt="your image" />
	</div>
	<div id="cropped_result"></div>
	<button id="crop_button">Crop</button>


	<script type="text/javascript" defer>
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
                setTimeout(initCropper, 1000);
            }
        }
	    function initCropper(){
	    	console.log("Came here")
	    	var image = document.getElementById('blah');
			var cropper = new Cropper(image, {
			  aspectRatio: 1 / 1,
			  crop: function(e) {
			    console.log(e.detail.x);
			    console.log(e.detail.y);
			  }
			});

			// On crop button clicked
			document.getElementById('crop_button').addEventListener('click', function(){
	    		var imgurl =  cropper.getCroppedCanvas().toDataURL();
	    		var img = document.createElement("img");
	    		img.src = imgurl;
	    		document.getElementById("cropped_result").appendChild(img);

	    		/* ----------------	SEND IMAGE TO THE SERVER-------------------------

					cropper.getCroppedCanvas().toBlob(function (blob) {
						  var formData = new FormData();
						  formData.append('croppedImage', blob);
						  // Use `jQuery.ajax` method
						  $.ajax('/path/to/upload', {
						    method: "POST",
						    data: formData,
						    processData: false,
						    contentType: false,
						    success: function () {
						      console.log('Upload success');
						    },
						    error: function () {
						      console.log('Upload error');
						    }
						  });
					});
	    		*/
	    	})
	    }
	</script>
</body>
</html>