<?php

class My_Dropdown_Category_Control extends WP_Customize_Control {

    public $type = 'dropdown-category';

    public function getArgsCateHb(){
        $orderby = 'name';
        $order = 'asc';
        $hide_empty = false ;
        $cat_args = array(
            'orderby'    => $orderby,
            'order'      => $order,
            'hide_empty' => $hide_empty,
        );
        $product_categories = get_terms( 'product_cat', $cat_args );
        $result = [];
        foreach ($product_categories as $category){
            array_push($result, $category->name);
        }
        return $result;
    }

    protected function render_content() {
        ?><label><?php

        if ( ! empty( $this->label ) ) :
            ?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
        endif;

        if ( ! empty( $this->description ) ) :
            ?><span class="description customize-control-description"><?php echo $this->description; ?></span><?php
        endif;

        $dropdown_args = wp_parse_args( $this->getArgsCateHb(), array(
            'taxonomy'          => 'category',
            'show_option_none'  => ' ',
            'selected'          => $this->value(),
            'show_option_all'   => '',
            'orderby'           => 'id',
            'order'             => 'ASC',
            'show_count'        => 1,
            'hide_empty'        => 1,
            'child_of'          => 0,
            'exclude'           => '',
            'hierarchical'      => 1,
            'depth'             => 0,
            'tab_index'         => 0,
            'hide_if_empty'     => false,
            'option_none_value' => 0,
            'value_field'       => 'term_id',
        ) );

        $dropdown_args['echo'] = false;

        $dropdown = wp_dropdown_categories( $dropdown_args );
        $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
        echo $dropdown;

        ?></label><?php

    }
}