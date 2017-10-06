<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?=base_url('front_end/css/');?>semantic.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('front_end/css/');?>home.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="<?=base_url('front_end/js/');?>semantic.min.js"></script>
</head>
<body>
<div class="ui left icon input">
<div id = 'loading'><img src = "<?=base_url('front_end/loading.gif');?>"></div>
<div id = 'main'>
<?php $attributes = array('id' => 'file_form'); ?>
<?=form_open_multipart('base/upload_file',$attributes);?>
  <input type="file" name='the_file' id='file_id'>
<input type='submit' id='submit_button' />
<?=form_close();?>
</div>
</div>
<script type='text/javascript'>
$( document ).ready(function() {
        $('#submit_button').on('click',function(e) {
                e.preventDefault();
		if (confirm('Are you sure you want to submit this image?'))
                {
			var file_data = new FormData($('#file_form')[0]);
			$('#main').hide(); //hide the main elements
			$('#loading').show(); //show the loading image
			$.ajax({
				type:'POST',
				url:"<?=base_url('index.php/base/upload_file');?>",
				processData: false,
				contentType: false,
				async: true,
				cache: false,
				data : file_data,
				success: function(response){
					alert(response);
					$('#file_id').val(''); //reset the file
					$('#loading').hide(); //hide the loading image
					$('#main').show(); //show again the elements
				}
			});//end of ajax
		}//end if
	});
});//end of document ready

</script>
</body>
</html>
