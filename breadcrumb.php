<?php
/* Add support for Breadcrumb NavTx plugin */
?>

<nav class="breadcrumbs breadcrumbs-path" itemprop="breadcrumb">
  <ul>
  <?php
  if(function_exists('bcn_display')):
      bcn_display_list();
  endif;
  ?>
  </ul>
</nav>

