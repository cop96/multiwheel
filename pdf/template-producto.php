<?php
/**
 * Plantilla HTML para Ficha Técnica - Multiwheel
 * Esta vista servirá tanto para previsualización web como para generar el PDF.
 */

function generar_html_producto($producto, $is_pdf = false)
{
    $logo_path = 'logo550_nuevo.png';
    $primary_blue = '#1e3a5f';
    $primary_orange = '#f05a28';
    $text_gray = '#3a3a3a';
    $light_bg = '#f9fafb';

    // Construir ruta de imagen
    $img_url = '';
    if (!empty($producto['imagenes'])) {
        $relative_path = 'catalogo/productos/' . $producto['categoria'] . '/' . $producto['slug'] . '/images/' . $producto['imagenes'][0];
        if ($is_pdf) {
            $img_url = dirname(__DIR__) . '/' . $relative_path;
        }
        else {
            $img_url = $relative_path;
        }
    }

    $logo_url = $logo_path;
    if ($is_pdf) {
        $logo_url = dirname(__DIR__) . '/' . $logo_path;
    }

    $html = '
    <style>
        .pdf-container {
            font-family: helvetica, sans-serif;
            color: ' . $text_gray . ';
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header-table {
            width: 100%;
            border-bottom: 2px solid ' . $primary_blue . ';
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .logo-img {
            height: 60px;
        }
        .brand-text {
            text-align: right;
            color: ' . $primary_blue . ';
            font-weight: bold;
            font-size: 14pt;
        }
        .product-title {
            color: ' . $primary_blue . ';
            font-size: 24pt;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .category-tag {
            color: ' . $primary_orange . ';
            font-weight: bold;
            font-size: 12pt;
            margin-bottom: 20px;
        }
        .main-content {
            width: 100%;
            margin-top: 20px;
        }
        .product-image {
            width: 100%;
            max-width: 400px;
            border-radius: 8px;
            margin: 0 auto 30px;
            display: block;
        }
        .section-title {
            color: ' . $primary_blue . ';
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 5px;
            margin-top: 25px;
            margin-bottom: 15px;
            font-size: 16pt;
        }
        .description-list {
            line-height: 1.6;
            font-size: 11pt;
            padding-left: 20px;
        }
        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .specs-table td {
            padding: 10px;
            border-bottom: 1px solid #eeeeee;
        }
        .spec-label {
            font-weight: bold;
            width: 30%;
            background-color: ' . $light_bg . ';
        }
        .price-box {
            background-color: ' . $primary_blue . ';
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-top: 30px;
        }
        .price-value {
            font-size: 20pt;
            font-weight: bold;
        }
        .footer-info {
            text-align: center;
            font-size: 9pt;
            color: #999999;
            margin-top: 50px;
            border-top: 1px solid #eeeeee;
            padding-top: 20px;
        }
    </style>

    <div class="pdf-container">
        <!-- Header -->
        <table class="header-table">
            <tr>
                <td width="50%">
                    <img src="' . $logo_path . '" class="logo-img">
                </td>
                <td width="50%" class="brand-text">
                    EQUIPAMIENTO PROFESIONAL<br>DE VEHÍCULOS
                </td>
            </tr>
        </table>

        <!-- Title & Category -->
        <div style="text-align: center;">
            <h1 class="product-title">' . htmlspecialchars($producto['nombre']) . '</h1>
            <div class="category-tag">' . htmlspecialchars($producto['categoria_display'] ?? 'Accesorio') . '</div>
            <div style="color: #666; font-size: 10pt;">Ref: ' . htmlspecialchars($producto['id']) . '</div>
        </div>

        <!-- Image -->
        ' . ($img_url ? '<div style="text-align: center; margin: 30px 0;"><img src="' . $img_url . '" class="product-image"></div>' : '') . '

        <!-- Description -->
        <h2 class="section-title">Descripción</h2>
        <div class="description-list">';

    $lines = explode("\n", $producto['description_larga'] ?? $producto['description_corta']);
    $html .= '<ul>';
    foreach ($lines as $line) {
        if (!empty(trim($line))) {
            $html .= '<li>' . htmlspecialchars(trim($line)) . '</li>';
        }
    }
    $html .= '</ul></div>';

    // Specs
    if (!empty($producto['especificaciones'])) {
        $html .= '<h2 class="section-title">Especificaciones Técnicas</h2>
        <table class="specs-table">';
        foreach ($producto['especificaciones'] as $label => $value) {
            $html .= '<tr>
                <td class="spec-label">' . htmlspecialchars(ucfirst($label)) . '</td>
                <td>' . htmlspecialchars($value) . '</td>
            </tr>';
        }
        $html .= '</table>';
    }

    // Price & Commercial Info
    $html .= '
        <div class="price-box">
            <div style="font-size: 10pt; margin-bottom: 5px; opacity: 0.9;">PRECIO RECOMENDADO</div>
            <div class="price-value">' . ($producto['precio']['base'] ?? 'Consultar') . ' ' . ($producto['precio']['moneda'] ?? 'EUR') . '</div>
            <div style="font-size: 9pt; margin-top: 10px; opacity: 0.8;">
                IVA no incluido | Plazo de entrega: ' . ($producto['plazo_entrega'] ?? 'Consultar') . '
 