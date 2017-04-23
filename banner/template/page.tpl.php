<?php print render($page['header']); ?>

<?php if($active_trail){ ?>
<div class="banner" style="height:200px; background:url('/banner/sites/default/files/banner/<?php print $filename; ?>') no-repeat"></div>
<?php } ?>

<?php print render($page['content']); ?>