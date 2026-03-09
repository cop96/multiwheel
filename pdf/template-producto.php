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

    $logo_url = $logo_path;
    if ($is_pdf) {
        $logo_url = dirname(__DIR__) . '/' . $logo_path;
    }

    $html = '
    <style>
        .pdf-container {
            font-family: helvetica, sans-serif;
            color: ' . $text_gray . ';
        }
        .header-table {
            width: 100%;
            border-bottom: 2px solid ' . $primary_blue . ';
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .logo-img {
            width: 180px;
        }
        .brand-text {
            text-align: right;
            color: ' . $primary_blue . ';
            font-weight: bold;
            font-size: 14pt;
        }
        .product-title {
            color: ' . $primary_blue . ';
            font-size: 22pt;
            font-weight: bold;
            text-transform: uppercase;
        }
        .category-tag {
            color: ' . $primary_orange . ';
            font-weight: bold;
            font-size: 12pt;
        }
        .section-title {
            color: ' . $primary_blue . ';
            border-bottom: 1px solid #eeeeee;
            padding-bottom: 5px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 15pt;
            font-weight: bold;
        }
        .description-list {
            line-height: 1.5;
            font-size: 10pt;
        }
        .specs-table {
            width: 100%;
            border-collapse: collapse;
        }
        .specs-table td {
            padding: 8px;
            border-bottom: 1px solid #eeeeee;
            font-size: 10pt;
        }
        .spec-label {
            font-weight: bold;
            width: 30%;
            background-color: ' . $light_bg . ';
        }
        .price-box {
            background-color: ' . $primary_blue . ';
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }
        .price-value {
            font-size: 18pt;
            font-weight: bold;
        }
        .footer-info {
            text-align: center;
            font-size: 8pt;
            color: #888888;
            margin-top: 30px;
            border-top: 1px solid #eeeeee;
            padding-top: 15px;
        }
    </style>

    <div class="pdf-container">
        <!-- Header -->
        <table class="header-table">
            <tr>
                <td width="50%">
                    <img src="' . $logo_url . '" class="logo-img">
                </td>
                <td width="50%" class="brand-text">
                    EQUIPAMIENTO PROFESIONAL<br>DE VEHÍCULOS
                </td>
            </tr>
        </table>

        <!-- Title & Category -->
        <div style="text-align: center; margin-bottom: 20px;">
            <h1 class="product-title">' . htmlspecialchars($producto['nombre']) . '</h1>
            <div class="category-tag">' . htmlspecialchars($producto['categoria_display'] ?? 'Accesorio') . '</div>
            <div style="color: #666; font-size: 10pt;">Ref: ' . htmlspecialchars($producto['id']) . '</div>
        </div>

        <!-- Images Gallery -->';

    if (!empty($producto['imagenes'])) {
        $html .= '<div style="width: 100%; display: block; margin-bottom: 30px; text-align: center;">';
        foreach ($producto['imagenes'] as $img_name) {
            $relative_img_path = 'catalogo/productos/' . $producto['categoria'] . '/' . $producto['slug'] . '/images/' . $img_name;
            $current_img_url = $is_pdf ? dirname(__DIR__) . '/' . $relative_img_path : $relative_img_path;

            $html .= '<div style="display: inline-block; width: 30%; margin: 1%; background-color: #f9f9f9; padding: 5px; border: 1px solid #eee; vertical-align: top;">
                <img src="' . $current_img_url . '" style="width: 100%; height: auto; max-height: 150px;">
            </div>';
        }
        $html .= '</div>';
    }

    $html .= '
        <!-- Description -->
        <h2 class="section-title">Descripción</h2>
        <div class="description-list">';

    $lines = explode("\n", $producto['descripcion_larga'] ?? $producto['descripcion_corta'] ?? '');
    $html .= '<ul>';
    foreach ($lines as $line) {
        $trimmed = trim($line);
        if (!empty($trimmed)) {
            $html .= '<li>' . htmlspecialchars($trimmed) . '</li>';
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
        <div class="price-box" style="margin-top: 30px;">
            <div style="font-size: 10pt; margin-bottom: 5px; opacity: 0.9;">PRECIO RECOMENDADO</div>
            <div class="price-value">' . ($producto['precio']['base'] ?? 'Consultar') . ' ' . ($producto['precio']['moneda'] ?? 'EUR') . '</div>
            <div style="font-size: 9pt; margin-top: 10px; opacity: 0.8;">
                IVA no incluido | Plazo de entrega: ' . ($producto['plazo_entrega'] ?? 'Consultar') . '
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-info">
            <p><strong>MULTIWHEEL EQUIPOS Y SISTEMAS S.L.</strong></p>
            <p>Pol. Ind. La Red, C/ 12 - Nave 14 | 41500 Alcalá de Guadaíra, Sevilla</p>
            <p>Telf: 620 531 511 | Email: info@multiwheel.es | www.multiwheel.es</p>
            <p style="margin-top: 10px;">Generado automáticamente - ' . date('d/m/Y') . '</p>
        </div>
    </div>';

    return $html;
}