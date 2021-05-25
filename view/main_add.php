<?php 


require_once __DIR__ . '/_header.php'; 
require_once __DIR__ . '/addons/_navigation_pane.php';

?>
<br>
<b>Add new product</b>
<div class="addItemDiv">
	
    <br>
	<form method="post" action="index.php?rt=main/addResult">
		
		Product name:
		<input type="text" name="productName" /> 
        <br>
        <br>
        Description:
		<textarea name="description" rows="3" cols="30"></textarea>
        <br>
        Price:
		<input type="number" name="price" step=".01"/>  
		
		<br>

		<button type="submit">Add product</button>
		
	</form>
</div>
