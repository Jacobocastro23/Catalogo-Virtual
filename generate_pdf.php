<?php
require_once 'vendor/autoload.php';

// Crear una instancia de mPDF
$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'L',
    'format' => 'A4',
    'margin_left' => 20,
    'margin_right' => 20,
    'margin_top' => 40,
    'margin_bottom' => 20,
    'margin_header' => 10,
    'margin_footer' => 10,
    'autoPageBreak' => true,
    'autoPageBreakValue' => 10,
]);

// Conectar a la base de datos
require_once 'config.php';
require_once 'models/Artwork.php';

// Obtener las obras de arte
$model = new Artwork($pdo);
$artworks = $model->getAllArtworks();

// Estilo general
$styles = '
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css");

        body {
            font-family: "Arial", sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .page-container {
            width: 100%;
            padding: 15px;
            box-sizing: border-box;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .page-container:hover {
            transform: scale(1.01);
        }
        .details-cell, .image-cell {
            vertical-align: top;
            padding: 15px;
            box-sizing: border-box;
        }
        .details-cell {
            border-right: 2px solid #e0e0e0;
            width: 50%;
            height: 500px;
            overflow: hidden;
            background-color: #ffffff;
            border-radius: 8px 0 0 8px;
        }
        .image-cell {
            width: 50%;
            height: 500px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
            border-radius: 0 8px 8px 0;
        }
        .image-cell img {
            max-width: 100%;
            max-height: 90%;
            object-fit: contain;
            border: 3px solid #7f8c8d;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
            padding: 10px;
            background-color: #ffffff;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 10px;
        }
        .index {
            margin: 20px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 20px;
        }
        .index h1 {
            color: #34495e;
            font-size: 36px;
            margin-bottom: 20px;
            border-bottom: 3px solid #7f8c8d;
            padding-bottom: 10px;
        }
        .index p {
            font-size: 16px;
            color: #000;
            margin: 10px 0;
        }
        .index a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.2s;
        }
        .index a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        .description {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            line-height: 1.6;
        }
        .divider {
            border-top: 3px solid #e0e0e0;
            margin: 10px 0;
        }
        .cover-img {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            border: 5px solid #7f8c8d;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        }
        .cover-title {
            color: #34495e;
            font-size: 42px;
            margin-top: 20px;
            font-weight: bold;
        }
        .cover-subtitle {
            color: #7f8c8d;
            font-size: 28px;
            margin-top: 10px;
        }
        .cover-description {
            color: #7f8c8d;
            font-size: 20px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            position: fixed;
            width: 100%;
            top: 0;
            background-color: #ffffff;
            border-bottom: 2px solid #7f8c8d;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header img {
            width: 60px;
        }
        .page-number {
            position: fixed;
            bottom: 10px;
            right: 20px;
            font-size: 12px;
            color: #7f8c8d;
        }
    </style>
';
$mpdf->WriteHTML($styles, 1);

// Logo en todas las páginas (parte superior izquierda)
$mpdf->SetHTMLHeader('<div style="text-align: left; padding: 10px;"><img src="Assets/img/logo_b-artemx_colores.png" style="width: 60px;" /></div>');

// Portada
$mpdf->AddPage();
$coverHtml = '
    <div style="text-align: center; margin-top: 100px;">
        <img src="Assets/img/Caminoalabufa.png" class="cover-img" />
        <h1 class="cover-title">Catálogo de Exposición</h1>
        <h2 class="cover-subtitle">Título de la Exposición</h2>
        <p class="cover-description">Una descripción breve del catálogo o de la exposición.</p>
    </div>';
$mpdf->WriteHTML($coverHtml);

// Crear el índice
$indexHtml = '<div class="index"><h1>Índice</h1>';
foreach ($artworks as $key => $artwork) {
    $title = htmlspecialchars($artwork['name']);
    $artist = htmlspecialchars($artwork['artist']);
    $indexHtml .= '<p><a href="#artwork' . $key . '">' . $title . ' - ' . $artist . '</a></p>';
}
$indexHtml .= '</div>';
$mpdf->WriteHTML($indexHtml);

// Añadir un salto de página después del índice
$mpdf->AddPage();

// Alternar la disposición entre cada obra
$alternate = true;

// Añadir detalles de cada obra
foreach ($artworks as $key => $artwork) {
    $title = htmlspecialchars($artwork['name']);
    $artist = htmlspecialchars($artwork['artist']);
    $year = htmlspecialchars($artwork['year']);
    $technique = htmlspecialchars($artwork['technique']);
    $dimensions = htmlspecialchars($artwork['dimensions']);
    $imagePath = 'Assets/img/' . htmlspecialchars($artwork['image']);

    // Nueva página para cada obra
    $mpdf->AddPage();
    $mpdf->Bookmark($title . ' - ' . $artist, 0); // Añadir marcador para el índice

    // Texto Lorem Ipsum extenso para la descripción
    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio, et feugiat tellus vestibulum et. Mauris feugiat, metus non interdum venenatis, odio ante aliquet turpis, ut fermentum dui orci at dolor. Nulla at lacus lorem. Pellentesque nec nisi neque. Nulla venenatis laoreet nisi, ac convallis elit tempus eget. Curabitur quis nulla ut purus aliquet pharetra. Sed luctus turpis sed erat dignissim fermentum.";

    // Alternar entre información a la izquierda y la imagen a la derecha
    if ($alternate) {
        $mpdf->WriteHTML('
            <table>
                <tr>
                    <td class="details-cell">
                        <h2>' . $title . '</h2>
                        <p><strong>Artista:</strong> ' . $artist . '</p>
                        <p><strong>Año:</strong> ' . $year . '</p>
                        <p><strong>Técnica:</strong> ' . $technique . '</p>
                        <p><strong>Dimensiones:</strong> ' . $dimensions . '</p>
                        <div class="divider"></div>
                        <p class="description">' . $lorem . '</p>
                    </td>
                    <td class="image-cell">
                        <img src="' . $imagePath . '" />
                    </td>
                </tr>
            </table>');
    } else {
        $mpdf->WriteHTML('
            <table>
                <tr>
                    <td class="image-cell">
                        <img src="' . $imagePath . '" />
                    </td>
                    <td class="details-cell">
                        <h2>' . $title . '</h2>
                        <p><strong>Artista:</strong> ' . $artist . '</p>
                        <p><strong>Año:</strong> ' . $year . '</p>
                        <p><strong>Técnica:</strong> ' . $technique . '</p>
                        <p><strong>Dimensiones:</strong> ' . $dimensions . '</p>
                        <div class="divider"></div>
                        <p class="description">' . $lorem . '</p>
                    </td>
                </tr>
            </table>');
    }

    // Alternar para la siguiente obra
    $alternate = !$alternate;
}

// Salida del archivo PDF
$mpdf->Output('catalogo_exposicion.pdf', \Mpdf\Output\Destination::INLINE);
?>
