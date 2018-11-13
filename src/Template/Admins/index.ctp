<?php echo $this->element('search_box'); ?>

<div class="table-content">
    <?php
        echo $this->SimpleTable->render($table);
        echo $this->Paginate->render($total, $limit);
    ?>
</div>
