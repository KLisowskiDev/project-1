<?php 

// Metatags
$metatags['robots'] = "index, follow";
$metatags['viewport'] = "width=device-width, initial-scale=1.0";


// Get request url
$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$protocol = !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$canonical = $protocol . '://' . $_SERVER['HTTP_HOST'] . $request;

switch($request) {
    case '/':
        $title = "Strona główna";
        $metatags['description'] = "Opis strony głównej";
    break;
    case '/o-nas':
        $title = "O nas";
        $metatags['description'] = "Opis meta description podstrony o nas";
    break;
    case '/oferta':
        $title = "Oferta";
        $metatags['description'] = "Opis meta description podstrony oferta";
    break;
    case '/galeria':
        $title = "Galeria";
        $metatags['description'] = "Opis meta description podstrony galeria";
    break;
    case '/kontakt':
        $title = "Kontakt";
        $metatags['description'] = "Opis meta description podstrony kontakt";
    break;
    default:
        $title = "404";
        $metatags['description'] = "Nie ma takiej strony";
        header("HTTP/1.0 404 Not Found");
    break;
}

// Active link in menu
function getActiveLink($request, $param) {
    if($request == $param) {
        echo "active";
    }
}

// Load diffrent images on subpages
function loadSubheader($request) {
    if($request == '/o-nas') {
        echo 's1.png';
    } else if ($request == '/oferta') {
        echo 's2.png';
    } else {
        echo 's3.png';
    }
}

?>