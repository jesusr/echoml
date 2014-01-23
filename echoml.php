<?php 
/**
 *  echoml
 *  @brief  Función para la muestra de títulos y contenido multilenguaje 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @param  it: String
 *  @param  zh: String
 *  @return Void. 
 */
function echoml($es,$en,$fr,$it,$zh){
    echo echoml_ret($es,$en,$fr,$it,$zh);
}
/**
 *  echoml_ret
 *  @brief  Función para la muestra de títulos y contenido multilenguaje 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @param  it: String
 *  @param  zh: String
 *  @return String. 
 */
function echoml_ret($es,$en,$fr,$it,$zh){
    if(ICL_LANGUAGE_CODE == 'es'): return $es; 
    elseif(ICL_LANGUAGE_CODE == 'en'): return $en;
    elseif(ICL_LANGUAGE_CODE == 'fr'): return $fr;
    elseif(ICL_LANGUAGE_CODE == 'it'): return $it;
    elseif(ICL_LANGUAGE_CODE == 'zh'): return $zh;
    endif; 
}
/**
 *  echoml_pdf
 *  @brief  Función que imprime los enlaces a pdf. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_pdf(){
    $ml='enlace_pdf';
    if(ICL_LANGUAGE_CODE!='es'){ $ml = $ml . '_' . ICL_LANGUAGE_CODE;}
    if(ICL_LANGUAGE_CODE=='it' || ICL_LANGUAGE_CODE=='zh') {$ml='enlace_pdf_en';}
    echo '<a href="/wp-content/themes/u-design/download.php?f=' . get_field($ml) . '" class="btn" title="Descargar PDF"><i class="icon-download"></i>';
    echoml('Descargar PDF','Download PDF','Télécharger PDF','Scaricare PDF');
    echo '</a>';
}
/**
 *  echoml_pdf_title
 *  @brief  Función que imprime los enlaces a pdf. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_pdf_title($title){
    $ml='enlace_pdf';
    if(ICL_LANGUAGE_CODE!='es'){ $ml = $ml . '_' . ICL_LANGUAGE_CODE;}
    if(ICL_LANGUAGE_CODE=='it' || ICL_LANGUAGE_CODE=='zh') {$ml='enlace_pdf_en';}
    echo '<a href="/wp-content/themes/u-design/download.php?f=' . get_field($ml) . '" title="Descargar PDF"><i class="icon-download"></i>';
    echoml(get_the_title());
    echo '</a>';
}
/**
 *  echoml_print
 *  @brief  Función que muestra el codigo de impresion. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_print(){
    if(function_exists('wp_print')) {
        echo '<a href="' . get_permalink() . '?print=1" class="btn" title="' . echoml_ret('Imprimir','Print','Imprimer') .'" target="_blank"><i class="icon-print"></i>' . echoml_ret('Imprimir','Print','Imprimer') . '</a>';
    }
}
/**
 *  echoml_permalink
 *  @brief  Función que muestra el codigo de permalink. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_readmore(){
    echo '<a href="' . get_permalink() . '" rel="bookmark" title="' . echoml_ret('Leer más','Read More','Lire plus') .'" class="btn"><i class="icon-file"></i>' . echoml_ret('Leer más','Read More','Lire plus') .'</a>';
}
/**
 *  echoml_social
 *  @brief  Función que muestra el codigo de social. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_social(){
    echo '<div class="social">';
    echo '<span>' . echoml_ret('Compartir','Share','Partager') . '</span>';
    echo "<span class='st_facebook' st_title='". get_the_title() . "' st_url='" . get_permalink() . "' ></span>";
    echo "<span class='st_twitter' st_title='". get_the_title() . "' st_url='" . get_permalink() . "' ></span>";
    echo "<span class='st_linkedin' st_title='". get_the_title() . "' st_url='" . get_permalink() . "' ></span></div>";
}
/**
 *  echoml_medio
 *  @brief  Función que muestra el codigo de social. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return Void.
 */
function echoml_medio(){
    echo echoml_medio_ret();
}
/**
 *  echoml_medio_ret
 *  @brief  Función que muestra el codigo de social. 
 *  @param  es: String
 *  @param  en: String
 *  @param  fr: String
 *  @return String.
 */
function echoml_medio_ret(){
    if(ICL_LANGUAGE_CODE == 'es'): return '<span class="label label-info">Medio: ' . get_field('medio') . '</span>'; 
    elseif(ICL_LANGUAGE_CODE == 'en'||ICL_LANGUAGE_CODE == 'it'||ICL_LANGUAGE_CODE == 'zh'): return  '<span class="label label-info">Media: ' . get_field('medio_en') . '</span>';
    elseif(ICL_LANGUAGE_CODE == 'fr'): return  '<span class="label label-info">Média: ' . get_field('medio_fr') . '</span>';
    endif; 
}
?>s