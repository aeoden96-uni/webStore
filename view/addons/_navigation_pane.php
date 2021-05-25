<?php 

$activeText='class="active"';

?>

<div  class="topnav">
  <a <?php echo ($activeInd==0)? $activeText : "";  ?> href="index.php?rt=main"><?php echo $userName; ?>'s products</a>
  <a <?php echo ($activeInd==1)? $activeText : "";  ?> href="index.php?rt=main/add">Add a new product</a>
  <a <?php echo ($activeInd==2)? $activeText : "";  ?> href="index.php?rt=main/history">Shopping history</a>
  <a <?php echo ($activeInd==3)? $activeText : "";  ?> href="index.php?rt=main/search">Search</a>
  <a <?php echo ($activeInd==4)? $activeText : "";  ?> href="index.php?rt=start/logout">Logout</a>
</div>
