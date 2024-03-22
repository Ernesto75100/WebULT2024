 <?php
 /*
 * Define shortcodes
 * https://codex.wordpress.org/Shortcode_API
 */
add_shortcode("ult_boton", "fasult_boton");

// Add parameters to function
function fasult_boton($atts, $content = null) {
    return '<a class="btn btn-primary btn-lg me-2 content-control-2" href="' . $atts["link"] . '" role="button" style="position: relative;width: 102.375px;font-size: 14px;margin-left: 34%;border-radius: 25px;border-left-color: var(--bs-border-color-translucent);background: #003d1a;height: 33px;padding-top: 4px;padding-bottom: 4px;">
    '.$content.'</a>';

}
add_shortcode("ult_p", "fasult_p");

// Add parameters to function
function fasult_p($atts, $content = null) {
    return '<p class="mb-4 r" style="color: #003d1a;margin-top: 0px;padding-left: 0px;margin-left: 7%;padding-right: 0px;width: 90%;margin-right: 0px;font-size: 14px;">'.$content.'</p>';

}
add_shortcode("ult_h", "fasult_h");

// Add parameters to function
function fasult_h($atts, $content = null) {
    return '<h1 class="fw-bold mb-3 r" style="color: #003d1a;padding-bottom: 0px;padding-top: 0px;background: #ffffff;padding-right: 0px;width: 100%;height: auto;margin-top: 2%;margin-left: 7%;margin-right: 0px;padding-left: 0px;font-size: 45.88px;">'.$content.'</h1>';

}
// Create the new shortcode [fastfood_head] with the callback fastfoodBtnFunc
add_shortcode("fastfood_headings", "fastfoodHeadingsFunc");

// Add parameters to function
function fastfoodHeadingsFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] . "'>" . $content . "</" . $atts['type'] . ">";
}

// Create the new shortcode [fastfood_btn] with the callback fastfoodBtnFunc
add_shortcode("fastfood_btn", "fastfoodBtnFunc");

// Add parameters to function
function fastfoodBtnFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] ." style='" . $atts['style']. "' href='" . $atts['link'] . "'>" . $content . "</" . $atts['type'] . ">";
}


function category_posts_shortcode($atts) {
    $atts = shortcode_atts( array(
        'categories' => '',
        'posts_per_category' => 10,
        'thumbnail_size' => 'medium',
		'entradas_link' => 'ver-entradas-relacionadas',
    ), $atts );
    
    $category_names = explode(',', $atts['categories']); // Separa los nombres de categor�a por comas y los convierte en un array
    $category_ids = array();
    foreach ($category_names as $category_name) {
        $category_ids[] = get_cat_ID(trim($category_name)); // Convierte el nombre de categor�a en ID
    }
    
    $posts_per_category = intval($atts['posts_per_category']); // Convierte el valor en un entero
    $thumbnail_size = sanitize_text_field($atts['thumbnail_size']); // Limpia el valor para evitar inyecci�n de c�digo malicioso
    $output = '';
    $c=0;
    foreach ($category_ids as $category_id) {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_category,
            'cat' => $category_id
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
           
            $output .='<div class="container">';
            while ($query->have_posts()) : $query->the_post();
            if($c==0){
                $dat = get_the_post_thumbnail_url($query->ID);             

                $output .='<h1 class="r text-center text-uppercase py-0"><bold><i class="la la-angle-double-right"></i>' . get_cat_name($category_id) . '<i class="la la-angle-double-left"></i></bold></h1>
               
                <div class="row rounded p-2">
                <div class="col-md-6 d-md-flex justify-content-md-center align-items-md-center">
                <div class="card w-100">
                <img src="' . $dat . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-capitalize">' . get_the_title() . '</h5>
                    <p class="card-text">' . get_the_excerpt() . '</p>
                    <a href="' . get_permalink() . '" class="btn btn-success">Ver más</a>
                </div>
                </div>
                </div>';
                $output .='<div class="col-md-6">';
            }            
            if($c!=0){
                $dat = get_the_post_thumbnail_url($query->ID);
                $output .='
                <div class="card mb-1 w-100 text-white bg-success">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center">
                    <img src="' . $dat . '" class="img-fluid rounded h-75 p-1 " alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">' . get_the_title() . '</h5>
                        <p class="card-text">' .substr(get_the_excerpt(),0,120)  . '[...]</p>
                        <small class="text-muted"><a href="' . get_permalink() . '" class="btn btn-outline-secondary border-white btn-sm text-white">Ver más</a></small>
                    </div>
                    </div>
                </div>
                </div>';
            }
            $c++;
            endwhile;
            wp_reset_postdata();
        endif;
		$output .= '<p><a href="' . $atts['entradas_link'] . '" class="btn btn-success">Ver Todas</a></p>';
        $output .='</div></div></div>';
    }
    return $output;
}
add_shortcode('category_posts', 'category_posts_shortcode');
function mostrar_menu_como_acordeon($atts) {
    $atts = shortcode_atts(array(
        'menu' => '',
    ), $atts);

    // Obtener el ID del menú a partir del nombre
    $menu = wp_get_nav_menu_object($atts['menu']);

    if (!$menu) {
        return 'El menú especificado no existe.';
    }

 echo '<div class="accordion" role="tablist" id="accordion-1">';
$menu_items = wp_get_nav_menu_items($menu); // Reemplaza 'nombre-del-menu' con el nombre de tu menú
$parent_items = array();
$c=1;
foreach ($menu_items as $item) {
    if ($item->menu_item_parent == 0) {
        // Si el elemento no tiene padre, es un elemento principal del menú

        // Buscamos los elementos hijos de este elemento principal
        $child_items = array();
        foreach ($menu_items as $child_item) {
            if ($child_item->menu_item_parent == $item->ID) {
                // Si el elemento hijo tiene como padre el ID del elemento principal, lo agregamos a la lista de elementos hijos
                $child_items[] = $child_item;
            }
        }

        // Si hay elementos hijos, creamos un submenú
        if (empty($child_items)) {
            echo ' <div class="accordion-item">
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-'.$c.'" aria-expanded="false" aria-controls="accordion-1 .item-'.$c.'">
            ';
            echo  $item->title;
            echo '</button>
            </h2>';
            echo '</div>
            </div>';
        }
        if (!empty($child_items)) {
            echo ' <div class="accordion-item">
            <h2 class="accordion-header" role="tab">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-'.$c.'" aria-expanded="false" aria-controls="accordion-1 .item-'.$c.'">
            ';
            echo  $item->title;
            echo '</button>
            </h2>';
            echo '<div class="accordion-collapse collapse item-'.$c.'" role="tabpanel" data-bs-parent="#accordion-1">
            <div class="accordion-body">';
            foreach ($child_items as $child_item) {
              
                echo '<a style="text-decoration:none ;color: inherit;" href="' . $child_item->url . '">' . $child_item->title . '</a><br>';
               
            }
            echo '</div>
            </div>';
            echo '</div>';
        }
        $c++;

      
    }
   
}
echo '</div>';

   
}
add_shortcode('menu_acordeon', 'mostrar_menu_como_acordeon');