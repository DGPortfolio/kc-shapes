<?php

// KC SHAPES EXTENSION SHORTCODE
function dgtkcsh_shapes_shortcode( $atts, $content = null ) {

    extract( $atts );

    $color = ( $atts['color'] ) ? $atts['color'] : '';
    $out = '';

    $css_class = apply_filters( 'kc-el-class', $atts );
    $css_class = array_merge( $css_class, array( 'dgtkcsh_shapes' ) );

    if ( $atts['fullwidth'] == 'yes' ) $css_class = array_merge( $css_class, array( 'dgtkcsh_shape_fullwidth' ) );
    if ( $atts['position'] == 'top' ) $css_class = array_merge( $css_class, array( 'dgtkcsh_shape_top' ) );

    $out .= '<svg class="' . esc_attr( implode( ' ', $css_class ) ) . '" viewBox="0 0 100 100" preserveAspectRatio="none">';
    $out .= '<polygon fill="' . $color . '" points="';

    foreach( $atts['shape_points'] as $i => $point ){

    if ( $atts['position'] == 'top' ) {
        if ( $point->width == 0 || $point->height == 0 ) {
                $out .= $point->width . ',' . $point->height . ' ';
        } else if ( $point->width == 100 || $point->height == 100 ) {
                $out .= $point->width . ',' . $point->height . ' ';
        } else {
                $out .= (100 - $point->width) . ',' . (100 - $point->height) . ' ';
        }
    } else {
        $out .= $point->width . ',' . $point->height . ' ';
    }

    }

    $out .=  '100,100 0,100"/>';
    $out .= '</svg>';

    return $out;

}
add_shortcode('dgtkcsh_shapes', 'dgtkcsh_shapes_shortcode');