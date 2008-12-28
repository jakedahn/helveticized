<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name'              => 'Helveticized Sidebar',
        'before_widget'     => '<div class="widget %2$s">',
        'after_widget'      => '</div>',
        'before_title'      => '<h5>',
        'after_title'       => '<span class="slash"> /</span></h5>',
    ));
    
    
    function widget_helveticized_search() {
    ?>
        <div class="search">
      		<h5><label for="s">Search <span class="slash"> /</span></label></h5>
      		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
    <?php
    }
    if ( function_exists('register_sidebar_widget') )
        register_sidebar_widget(__('Search'), 'widget_helveticized_search');
    
    
?>