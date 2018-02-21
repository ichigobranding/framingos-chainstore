<?php if(is_front_page()): ?>
<?php else: ?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php endif; ?>