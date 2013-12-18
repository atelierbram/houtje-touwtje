<?php ob_start('compress_aside'); ?>
   <aside class="sidebar">

    <h2>Sidebar Content</h2>
<ul>
  <li>item 1</li>
  <li>item 2</li>
  <li>item 3</li>
  <li>item 4</li>
  <li>item 5</li>
</ul>

  </aside> 
 <?php ob_end_flush(); function compress_aside($buffer) {
  $search = array("/>[[:space:]]+/", "/[[:space:]]+</");
  $replace = array(">","<");
  return preg_replace($search, $replace, $buffer);
}
?>

