<?php
/**
 * Generar PDF de Producto Individual
 * Requiere TCPDF instalado en inc/tcpdf/
 */

// Verificar si TCPDF existe
$tcpdf_path = __DIR__ . '/../inc/tcpdf/config/tcpdf_config.php';
if (!file_exists($tcpdf_path)) {
    die('Error: TCPDF no encontrado. Por favor, ejecuta primero: catalogo/data/install-tcpdf.php');
}

require_once($tcpdf_path);

// Get product ID from URL
$product_id = $_GET['id'] ?? '';

// Load products data
$products_file = __DIR__ . '/../catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Find current product
$producto = null;
foreach ($products_data['productos'] as $p) {
    if ($p['id'] === $product_id) {
        $producto = $p;
        break;
    }
}

// If product not found
if (!$producto) {
    die('Producto no encontrado');
}

// Initialize PDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Multiwheel');
$pdf->SetAuthor('Multiwheel S.L.');
$pdf->SetTitle('Ficha Técnica - ' . $producto['nombre']);
$pdf->SetSubject($producto['descripcion_corta']);

// Set margins
$pdf->SetMargins(20, 30, 20);

// Set auto page breaks
$pdf->SetAutoPageBreak(true, 40);

// Add page
$pdf->AddPage();

// Header
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(30, 58, 95); // multiwheel-blue
$pdf->Cell(0, 10, 'FICHA TÉCNICA DE PRODUCTO', 0, 1, 'C');
$pdf->SetFont('helvetica', '', 10);
$pdf->SetTextColor(100, 100, 100);
$pdf->Cell(0, 5, 'Multiwheel - Equipamiento Profesional', 0, 1, 'C');

// Line separator
$pdf->SetDrawColor(30, 58, 95);
$pdf->SetLineWidth(0.5);
$pdf->Line(20, 42, 190, 42);

// Product name and reference
$pdf->Ln(15);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->SetTextColor(30, 58, 95);
$pdf->MultiCell(0, 8, $producto['nombre'], 0, 'L');

$pdf->SetFont('helvetica', '', 10);
$pdf->SetTextColor(100, 100, 100);
$pdf->Cell(0, 5, 'Referencia: ' . $producto['id'], 0, 1);

// Category badge
$pdf->SetFont('helvetica', 'I', 9);
$pdf->SetTextColor(240, 90, 40); // multiwheel-orange
$pdf->Cell(0, 5, $producto['categoria_display'], 0, 1);

// Description
$pdf->Ln(10);
$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);
$pdf->MultiCell(0, 5, $producto['descripcion_larga'], 0, 'J');

// Technical specifications table
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'Especificaciones Técnicas', 0, 1);

$pdf->SetFont('helvetica', '', 9);
$pdf->SetFillColor(249, 250, 251);
$pdf->SetTextColor(60, 60, 60);

// Table header
$pdf->SetFont('helvetica', 'B', 9);
$pdf->SetFillColor(30, 58, 95);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(60, 7, 'Característica', 1, 0, 'C', true);
$pdf->Cell(110, 7, 'Valor', 1, 1, 'C', true);

// Table rows
$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);
$fill = false;

foreach ($producto['especificaciones'] as $key => $value) {
    $label = ucfirst(str_replace('_', ' ', $key));
    $pdf->Cell(60, 6, $label, 1, 0, 'L', $fill);
    $pdf->Cell(110, 6, $value, 1, 1, 'L', $fill);
    $fill = !$fill;
}

// Características técnicas list
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'Características', 0, 1);

$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);

foreach ($producto['caracteristicas_tecnicas'] as $carac) {
    $pdf->Cell(5, 5, '•', 0, 0, 'L');
    $pdf->MultiCell(0, 5, $carac, 0, 'L');
}

// Compatibility
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'Compatibilidad de Vehículos', 0, 1);

$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);
$pdf->MultiCell(0, 5, implode('  |  ', $producto['compatibilidad_vehiculos']), 0, 'L');

// Applications
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'Aplicaciones Profesionales', 0, 1);

$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);

foreach ($producto['aplicaciones'] as $app) {
    $pdf->Cell(5, 5, '•', 0, 0, 'L');
    $pdf->Cell(0, 5, $app, 0, 1);
}

// What's included
$pdf->Ln(10);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'El producto incluye', 0, 1);

$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);

foreach ($producto['incluye'] as $item) {
    $pdf->Cell(5, 5, '•', 0, 0, 'L');
    $pdf->Cell(0, 5, $item, 0, 1);
}

// Commercial info box
$pdf->Ln(15);
$pdf->SetFillColor(240, 240, 240);
$pdf->SetDrawColor(200, 200, 200);
$pdf->Rect(20, $pdf->GetY(), 170, 35, 'FD');

$pdf->SetFont('helvetica', 'B', 10);
$pdf->SetTextColor(30, 58, 95);
$pdf->Cell(0, 8, 'Información Comercial', 0, 1, 'L', false, '', 0, false, 'T', 'T');

$pdf->SetFont('helvetica', '', 9);
$pdf->SetTextColor(60, 60, 60);

$pdf->Cell(50, 5, 'Plazo de entrega:', 0, 0);
$pdf->Cell(50, 5, $producto['plazo_entrega'], 0, 1);

$pdf->Cell(50, 5, 'Instalación:', 0, 0);
$pdf->Cell(50, 5, $producto['instalacion_incluida'] ? 'Incluida' : 'No incluida', 0, 1);

$pdf->Cell(50, 5, 'Garantía:', 0, 0);
$pdf->Cell(50, 5, $producto['garantia'], 0, 1);

if (isset($producto['precio'])) {
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(50, 6, 'Precio:', 0, 0);
    $pdf->Cell(50, 6, $producto['precio']['base'] . ' ' . $producto['precio']['moneda'], 0, 1);
    $pdf->SetFont('helvetica', 'I', 8);
    $pdf->SetTextColor(100, 100, 100);
    $pdf->Cell(0, 4, $producto['precio']['nota_precio'], 0, 1);
}

// Certifications
if (!empty($producto['certificaciones'])) {
    $pdf->Ln(10);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(30, 58, 95);
    $pdf->Cell(0, 8, 'Certificaciones', 0, 1);
    
    $pdf->SetFont('helvetica', '', 9);
    $pdf->SetTextColor(60, 60, 60);
    
    foreach ($producto['certificaciones'] as $cert) {
        $pdf->Cell(5, 5, '✓', 0, 0, 'L');
        $pdf->Cell(0, 5, $cert, 0, 1);
    }
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

// Footer
$pdf->SetY(-20);
$pdf->SetFont('helvetica', 'I', 8);
$pdf->SetTextColor(100, 100, 100);
$pdf->Cell(0, 5, '© ' . date('Y') . ' Multiwheel S.L. - Todos los derechos reservados', 0, 1, 'C');
$pdf->Cell(0, 5, 'Página ' . $pdf->getAliasNumPage() . ' de ' . $pdf->getAliasNbPages(), 0, 1, 'C');

// Output PDF
$filename = 'ficha-tecnica-' . $producto['slug'] . '.pdf';
$pdf->Output($filename, 'D');
