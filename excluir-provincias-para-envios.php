//Excluir Ceuta, Melilla, Canarias y Baleares
function ejr_limita_envios ($provincias) {
    unset ($provincias ['ES'] ['TF']);
    unset ($provincias ['ES'] ['GC']);
    unset ($provincias ['ES'] ['CE']);
    unset ($provincias ['ES'] ['ML']);
    unset ($provincias ['ES'] ['PM']);
    return $provincias;
    }
 
 add_filter ('woocommerce_states', 'ejr_limita_envios');