<?php

if (get_row_layout() == 'header_heading') { 

    
$heading = get_sub_field('heading'); ?>

<h1 class="header-heading">
  <?php echo $heading; ?>
</h1>
<?php
}
?>
