<?php 
require_once __DIR__ . '/_header.php'; 
require_once __DIR__ . '/addons/_navigation_pane.php';
?>


<br>
<div class="personalProductList">
	<b>Some info for user <?php echo $userName?>.....</b><br><br>
	<table class="productTable">

		<?php 
			
		foreach ( $myProductList as $product)
		{	

			echo '<tr>' .
			     	'<td>' . $product->name . '</td>' .
			     	'<td>' .    'comment link'     . '</td>' .
				'</tr>'.
				 '<tr>'.
				 	 '<td>' . $product->price . '</td>' .
					 '<td>' . 'settings link' . '</td>' .
			     '</tr>'.
				 '<tr>'.
				 	'<td colspan="2">' . $product->description . '</td>' .	
				'<tr>' 
				 ;
			
		}

		?>
	</table>
</div>