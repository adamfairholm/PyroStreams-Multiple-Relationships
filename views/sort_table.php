<?php

	if(!defined('PYROSTREAMS_MULT_JS_LOADED')):

		echo '<script type="text/javascript" src="'.site_url('streams_core/field_asset/js/multiple/multiple_drag.js').'"></script>';
		
		define('PYROSTREAMS_MULT_JS_LOADED', TRUE);

	endif;
	
?>

<script type="text/javascript" language="javascript">
 // <![CDATA[
	(function($){
		$(function(){
		    <?php echo $slug; ?>_change = function ( $list ){
		    	$('input#<?php echo $slug; ?>').val($.dds.serialize( '<?php echo $slug; ?>_list_2' ));    
		    }
		    $('ul.<?php echo $slug; ?>_ml').drag_drop_selectable({
		   	    onListChange:<?php echo $slug; ?>_change
		    });
		});
	})(jQuery);
// ]]>
</script>

<table class="mult_lists" cellpadding="0" cellspacing="0">

<tr>
	<th width="250">Available Options</th>
	<th>Selected Options</th>
</tr>

<tr>

	<td>

		<ul id="<?php echo $slug; ?>_list_1" class="multiple_list <?php echo $slug; ?>_ml">
		
		<?php if(isset($choices) and $choices): ?>
				
		<?php foreach($choices as $id => $choice): ?>
				
			<li id="<?php echo $slug; ?>_<?php echo $id; ?>"><span><?php echo $choice; ?></span></li>
				
		<?php endforeach; ?>
		
		<?php endif; ?>
				
		</ul>

	</td>
	<td class="drag_to_area">
	
		<ul id="<?php echo $slug; ?>_list_2" class="multiple_list <?php echo $slug; ?>_ml">
		
		<?php if(isset($current) and $current): ?>

		<?php foreach($current as $id => $current_name): ?>
				
			<li id="<?php echo $slug; ?>_<?php echo $id; ?>"><span><?php echo $current_name; ?></span></li>
				
		<?php endforeach; ?>
		
		<?php endif; ?>
		
		</ul>
	
	</td>

</tr>

</table>

<input type="hidden" name="<?php echo $slug; ?>" id="<?php echo $slug; ?>" value="<?php echo $current_string; ?>" /> 