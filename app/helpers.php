<?php
function setActivo($nombreRuta)
{
    return request()->routeIs($nombreRuta) ? 'active' : '';
}

function fechaActual($fecha)
{
    return date($fecha);
}

?>