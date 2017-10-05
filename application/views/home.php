<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?=base_url('front_end/css/');?>semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="<?=base_url('front_end/js/');?>semantic.min.js"></script>
</head>
<body>
<div class="ui left icon input">
<?=form_open_multipart('base/upload_file');?>
  <input type="file" name='the_file'>
<input type='submit' />
<?=form_close();?>
</div>
</body>
</html>
