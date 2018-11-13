<div class="orders-act">
    <div class="left-action text-left clearfix">
        <h2><?php echo !empty($pageTitle) ? $pageTitle : '';?></h2>
    </div>
</div>
<div class="search-box">
    <?php echo $this->SimpleForm->render($searchForm); ?>
</div>
