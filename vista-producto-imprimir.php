<?php
/**
 * Vista de impresión y previsualización de producto - Multiwheel
 */
require_once 'inc/wp-compat.php';
require_once 'pdf/template-producto.php';

// Get product SLUG from URL
$slug = $_GET['slug'] ?? '';

// Load products data
$products_file = __DIR__ . '/catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);

// Find current product
$producto = null;
foreach ($products_data['productos'] as $p) {
    if ($p['slug'] === $slug) {
        $producto = $p;
        break;
    }
}

if (!$producto) {
    die('Producto no encontrado');
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Técnica -
        <?php echo $producto['nombre']; ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            .no-print {
                display: none;
            }

            body {
                padding: 0;
                background: white;
            }

            .pdf-container {
                width: 100% !important;
                max-width: none !important;
                margin: 0 !important;
                padding: 0 !important;
            }
        }

        body {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="py-8">
    <div class="container mx-auto max-w-4xl px-4">
        <div
            class="no-print bg-white p-4 rounded-lg shadow-md mb-6 flex justify-between items-center border-l-4 border-multiwheel-orange">
            <div>
                <h2 class="font-bold text-lg text-multiwheel-blue">Previsualización de Ficha Técnica</h2>
                <p class="text-gray-600 text-sm">Esta es la versión que se genera en el PDF.</p>
            </div>
            <div class="flex gap-4">
                <button onclick="window.print()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition flex items-center gap-2">
                    <i class="fas fa-print"></i> Imprimir / Guardar PDF
                </button>
                <a href="producto.php?slug=<?php echo $slug; ?>"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded font-semibold transition">
                    Volver al producto
                </a>
            </div>
        </div>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <?php echo generar_html_producto($producto); ?>
        </div>
    </div>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>

</html>