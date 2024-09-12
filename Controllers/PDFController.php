<?php
require_once 'libs/tcpdf/tcpdf.php';  // Asegúrate de que la ruta es correcta
require_once 'config.php';
require_once 'Models/Artwork.php';

class PDFController extends TCPDF {
    public function __construct() {
        parent::__construct();
        $this->SetHeaderData('', 0, 'Catálogo de Obras de Arte', '');
        $this->setFooterData();
        $this->SetMargins(15, 30, 15);
        $this->SetAutoPageBreak(TRUE, 15);
        $this->AddPage();
    }

    public function generatePDF($artworks) {
        $this->SetFont('helvetica', '', 12);
        foreach ($artworks as $artwork) {
            $title = 'Título: ' . $artwork['name'];
            $details = "Artista: " . $artwork['artist'] . "\n" .
                       "Año: " . $artwork['year'] . "\n" .
                       "Técnica: " . $artwork['technique'] . "\n" .
                       "Dimensiones: " . $artwork['dimensions'];

            $this->SetFont('helvetica', 'B', 12);
            $this->Cell(0, 10, $title, 0, 1, 'L');
            $this->SetFont('helvetica', '', 12);
            $this->MultiCell(0, 10, $details);

            // Agregar la imagen PNG
            $imagePath = 'assets/img' . $artwork['image'];  // Ajusta la ruta según tu estructura
            if (file_exists($imagePath)) {
                $this->Image($imagePath, '', '', 100, 100, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
            } else {
                $this->Cell(0, 10, 'Imagen no disponible', 0, 1, 'L');
            }

            $this->Ln();
        }
    }
}

$model = new Artwork($pdo);
$artworks = $model->getAllArtworks();

$pdf = new PDFController();
$pdf->generatePDF($artworks);

// Forzar la descarga del archivo PDF
$pdf->Output('catalog.pdf', 'D');
?>
