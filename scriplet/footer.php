
<footer>
  Autor: Mateusz Małagowski <a href="https://github.com/MMRevilium/WWWProjekt">Github</a>
  <?php
  if($_SESSION["AdminStatus"]==1){
    echo "|| <a href='adminPanel.php'>Admin Panel</a>";
  }
  ?>     
</footer>