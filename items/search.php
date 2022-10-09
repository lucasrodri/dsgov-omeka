<?php
$pageTitle = __('Search Items');
echo head(array('title' => $pageTitle,
           'bodyclass' => 'items advanced-search'));
$link_items=html_escape(WEB_ROOT) . tag_attributes(array()) . "/items";
?>
<?php dsgov_breadcrumb_redes(array(['name' => __('Items'), 'type' => 'link', 'link' => $link_items],['name' => $pageTitle, 'type' => 'page'])); ?>
<h1><?php echo $pageTitle; ?></h1>

<div class="browse-header">
    <nav class="items-nav navigation secondary-nav">
        <?php echo public_nav_items(); ?>
    </nav>
</div>

<?php echo $this->partial('items/search-form.php',
    array('formAttributes' =>
        array('id'=>'advanced-search-form'))); ?>

<?php echo foot(); ?>
