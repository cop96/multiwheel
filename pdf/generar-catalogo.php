<?php
/**
 * Generar PDF del Catálogo Completo de Productos
 * Requiere TCPDF instalado en inc/tcpdf/
 */

// Verificar si TCPDF existe
$tcpdf_path = __DIR__ . '/../inc/tcpdf/config/tcpdf_config.php';
if (!file_exists($tcpdf_path)) {
    die('Error: TCPDF no encontrado. Por favor, ejecuta primero: catalogo/data/install-tcpdf.php');
}

require_once($tcpdf_path);

// Load products data
$products_file = __DIR__ . '/../catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Multiwheel');
$pdf->SetAuthor('Multiwheel S.L.');
$pdf->SetTitle('Catálogo Completo de Productos - Multiwheel');
$pdf->SetSubject('Equipamiento profesional para vehículos comerciales');

// Set margins
$pdf->SetMargins(20, 30, 20);

// Cover Page
$pdf->AddPage();
$pdf->SetFillColor(30, 58, 95);
$pdf->Rect(0, 0, 210, 297, 'F');

$pdf->SetFont('helvetica', 'B', 28);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(0, 50, '', 0, 1);

$pdf->Cell(0, 20, 'CATÁLOGO DE PRODUCTOS', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 18);
$pdf->Cell(0, 10, 'Equipamiento profesional para vehículos comerciales', 0, 1, 'C');

$pdf->SetFont('helvetica', '', 14);
$pdf->Cell(0, 30, '', 0, 1);

$pdf->SetFont('helvetica', 'B', 16);
$pdf->Cell(0, 10, 'MULTIWHEEL', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 5, 'Especialistas desde 2011', 0, 1, 'C');

$pdf->Cell(0, 20, '', 0, 1);

$pdf->SetFont('helvetica', '', 11);
$pdf->MultiCell(0, 6, "
Pol. Ind. La Red
Calle 12 Nave 14
41500 Alcalá de Guadaíra, Sevilla

Tel: 620 531 511
info@multiwheel.es
www.multiwheel.es

Horario:
Lun-Vie 8:00-18:00h | Sáb 9:00-14:00h
", 0, 'C');

// Index Page
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 10, 'Índice de Categorías', 0, 1);

$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(60, 60, 60);

// Count products per category
$count_by_category = [];
foreach ($products_data['productos'] as $product) {
    $cat = $product['categoria_display'];
    if (!isset($count_by_category[$cat])) {
        $count_by_category[$cat] = 0;
    }
    $count_by_category[$cat]++;
}

foreach ($count_by_category as $cat => $count) {
    $pdf->Cell(0, 8, $cat . ' (' . $count . ' productos)', 0, 1);
}

// Products by Category
$categoria_anterior = '';
$pdf->SetFont('helvetica', '', 10);

foreach ($products_data['productos'] as $producto) {
    // New category page
    if ($producto['categoria'] !== $categoria_anterior) {
        $pdf->AddPage();
        $categoria_anterior = $producto['categoria'];
        
        // Category header
        $pdf->SetFillColor(30, 58, 95);
        $pdf->Rect(0, 0, 210, 20, 'F');
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(0, 8, strtoupper($producto['categoria_display']), 0, 1, 'C');
        $pdf->SetTextColor(60, 60, 60);
        $pdf->SetFont('helvetica', '', 10);
    }
    
    // Product page
    $pdf->AddPage();
    
    // Product image placeholder (would use actual image if available)
    $pdf->SetFillColor(240, 240, 240);
    $pdf->Rect(20, 25, 60, 60, 'F');
    $pdf->SetFont('helvetica', 'I', 10);
    $pdf->SetTextColor(150, 150, 150);
    $pdf->Cell(60, 60, '[Imagen]', 0, 0, 'C');
    
    // Product name and reference
    $pdf->SetXY(85, 25);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->MultiCell(100, 6, $producto['nombre'], 0, 'L');
    
    $pdf->SetX(85);
    $pdf->SetFont('helvetica', '', 9);
    $pdf->SetTextColor(100, 100, 100);
    $pdf->Cell(0, 5, 'Ref: ' . $producto['id'], 0, 1);
    
    $pdf->SetX(85);
    $pdf->SetFont('helvetica', 'I', 9);
    $pdf->MultiCell(100, 4, $producto['descripcion_corta'], 0, 'L');
    
    // Full description
    $pdf->SetY(95);
    $pdf->SetFont('helvetica', '', 9);
    $pdf->SetTextColor(60, 60, 60);
    $pdf->MultiCell(0, 4, $producto['descripcion_larga'], 0, 'J');
    
    // Key specifications table
    $pdf->Ln(10);
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 6, 'Especificaciones clave', 0, 1);
    
    // Simple specifications table
    $pdf->SetFont('helvetica', '', 8);
    $pdf->SetTextColor(60, 60, 60);
    
    $specs = [];
    if (isset($producto['especificaciones'])) {
        foreach ($producto['especificaciones'] as $key => $value) {
            $specs[] = [ucfirst(str_replace('_', ' ', $key)), $value];
        }
    }
    
    $html = '<table border="1" cellpadding="3">';
    foreach ($specs as $i => $spec) {
        $bg = ($i % 2 == 0) ? '#f9fafb' : '#ffffff';
        $html .= '<tr bgcolor="' . $bg . '"><td width="40%"><b>' . $spec[0] . '</b></td><td width="60%">' . $spec[1] . '</td></tr>';
    }
    $html .= '</table>';
    $pdf->writeHTML($html, true, false, true, false, '');
    
    // Features list
    $pdf->Ln(5);
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 6, 'Características principales', 0, 1);
    
    $pdf->SetFont('helvetica', '', 8);
    $pdf->SetTextColor(60, 60, 60);
    
    foreach (array_slice($producto['caracteristicas_tecnicas'], 0, 4) as $carac) {
        $pdf->Cell(5, 4, '•', 0, 0, 'L');
        $pdf->Cell(0, 4, $carac, 0, 1);
    }
    
    // Price and CTA info
    $pdf->Ln(10);
    $pdf->SetFillColor(240, 240, 240);
    $pdf->Rect(20, $pdf->GetY(), 170, 20, 'FD');
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->SetTextColor(30, 58, 95);
    
    if (isset($producto['precio'])) {
        $pdf->Cell(100, 8, 'Precio: ' . $producto['precio']['base'] . ' ' . $producto['precio']['moneda'], 0, 0, 'L');
    }
    
    $pdf->SetFont('helvetica', '', 9);
    $pdf->SetTextColor(100, 100, 100);
    $pdf->Cell(0, 8, 'Ver página web para disponibilidad', 0, 1, 'R');
}

// Contact page
$pdf->AddPage();
$pdf->SetFont('helvetica', 'B', 18);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 15, 'Contacte con nosotros', 0, 1, 'C');

$pdf->SetFont('helvetica', '', 11);
$pdf->SetTextColor(60, 60, 60);

$contact_info = "
MULTIWHEEL - Equipamiento Profesional

Pol. Ind. La Red
Calle 12 Nave 14
41500 Alcalá de Guadaíra, Sevilla

Teléfono: 620 531 511
Email: info@multiwheel.es
Web: www.multiwheel.es

Horario:
Lunes - Viernes: 8:00 - 18:00h
Sábado: 9:00 - 14:00h
";

$pdf->MultiCell(0, 6, $contact_info, 0, 'C');

// Footer on all pages
$pdf->SetFooterFont(Array('helvetica', '', 8));
$pdf->setFooterData(array(0,0,0), array(0,0,0));

// Output PDF
$filename = 'catalogo-productos-multiwheel-' . date('Y') . '.pdf';
$pdf->Output($filename, 'D');
