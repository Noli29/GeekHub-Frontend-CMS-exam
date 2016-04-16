<div class="category">
    <ul>
        <?php $category = get_the_category();
        if (is_category()) {
            $this_category = get_category($cat);
            if($this_category->category_parent) {
                $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$this_category->category_parent."&echo=0");
            } else {
                $this_category = wp_list_categories('orderby=name&depth=1&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$this_category->cat_ID."&echo=0");
            }
        } elseif ( is_single()) {
            if($category[0]->category_parent) {
                $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$category[0]->category_parent."&echo=0");
            } else {
                $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$category[0]->cat_ID."&echo=0");
            }
        } ?>
        <?php echo $this_category; ?>
    </ul>

</div>
