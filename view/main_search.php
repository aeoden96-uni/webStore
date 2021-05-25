<?php 

require_once __DIR__ . '/_header.php'; 
require_once __DIR__ . '/addons/_navigation_pane.php';
?>
<br>
<b>Search</b>
<div class="addItemDiv">
	
    <br>
	<form method="post" action="index.php?rt=main/searchResult">
		
		Product name:
		<input type="text" name="searchTerm" /> 
        <br>
		<input type="text" name="searchType" /> 
		<br>

		<button type="submit">Search</button>
		
	</form>
</div>
