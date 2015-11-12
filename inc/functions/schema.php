<?php
/**
 * Schemas (http://www.schema.org)
 *
 * @package themeHandle
 */

// Add schema.org support
function html_tag_schema()
{
    $schema = 'http://schema.org/';

    // Is single post
    if(is_single())
    {
        $type = "Article";
    }
    // Contact form page ID
    else if( is_page(00) )
    {
        $type = 'ContactPage';
    }
    // Is author page
    elseif( is_author() )
    {
        $type = 'ProfilePage';
    }
    // Is search results page
    elseif( is_search() )
    {
        $type = 'SearchResultsPage';
    }
    // Is of custom post type
    elseif(is_singular('custom_post_type'))
    {
        $type = 'XXXX'; // http://schema.org/docs/full.html
    }
    else
    {
        $type = 'WebPage';
    }

    echo 'itemscope="itemscope" itemtype="' . $schema . $type . '"';
}

?>