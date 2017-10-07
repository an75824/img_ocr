<div class="ui modal">
  <div class="header">
   Result 
  </div>
  <div class="image content">
    <div class="image">
      <img src="<?=base_url();?>/front_end/invoice_128.png">
    </div>
    <div class="description">
<?php
switch ($result) {
    case 0:
	echo "<a class='ui red label'>No matches</a>";
        break;
    case 1:
        echo "<a class='ui yellow label'>We found 1 match!</a>";
        break;
    case 2:
        echo "<a class='ui green label'>We found 2 matches!!</a>";
        break;
    case $result >= 3:
	echo  "<a class='ui black label'>We found $result matches!!!</a>";
	break;
}//end of switch
?>
    </div>
  </div>
 </div>
<script type='text/javascript'>
$( document ).ready(function() {
	$('.ui.modal').modal({
		transition: 'horizontal flip',
		duration: 1000,
		onHide: function(){
		//console.log('hidden');
		$('.ui.modal').empty();
        },
        onShow: function(){
            //console.log('shown');
        }
    }).modal('show'); //end of modal
});//end of document ready
</script>
