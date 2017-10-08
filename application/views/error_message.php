<div class="ui modal">
  <div class="header">
   An error occurred. 
  </div>
  <div class="image content">
    <div class="image">
      <img src="<?=base_url();?>/front_end/poker_face.png">
    </div>
    <div class="description">
	<p><?=$error;?>
    </div>
  </div>
 </div>
<script type='text/javascript'>
$( document ).ready(function() {
	$('.ui.modal').modal({
		transition: 'horizontal flip',
		duration: 1000,
		onHide: function(){
		$('.ui.modal').empty();
        },
        onShow: function(){
        }
    }).modal('show'); //end of modal
});//end of document ready
</script>
