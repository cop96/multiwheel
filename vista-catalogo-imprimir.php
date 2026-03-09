<?php
/**
 * Vista de impresión del Catálogo Completo - Multiwheel
 * Utiliza el mismo diseño premium que la ficha individual.
 */
require_once 'inc/wp-compat.php';
require_once 'pdf/template-producto.php';

// Load products data
$products_file = __DIR__ . '/catalogo/data/productos.json';
if (!file_exists($products_file)) {
    die('Error: Archivo de productos no encontrado');
}
$products_data = json_decode(file_get_contents($products_file), true);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Completo - Multiwheel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600;700&family=Inter:wght@400;600&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }

        h1,
        h2,
        h3,
        .brand-text {
            font-family: 'Rajdhani', sans-serif;
        }

        @media print {
            .no-print {
                display: none;
            }

            body {
                padding: 0;
                background: white;
            }

            .page-break {
                page-break-after: always;
            }

            .catalog-container {
                width: 100% !important;
                max-width: none !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .product-sheet {
                box-shadow: none !important;
                border: none !important;
                margin: 0 !important;
                padding: 2cm !important;
            }
        }

        .product-sheet {
            background: white;
            min-height: 29.7cm;
            padding: 1.5cm;
            margin-bottom: 2rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Cover and Back colors */
        .bg-multiwheel-blue {
            background-color: #1e3a5f;
        }

        .text-multiwheel-blue {
            color: #1e3a5f;
        }

        .text-multiwheel-orange {
            color: #f05a28;
        }
    </style>
</head>

<body class="py-8">

    <!-- Floating Toolbar -->
    <div class="no-print fixed top-6 right-6 z-50 flex flex-col gap-3">
        <button onclick="window.print()"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full shadow-2xl font-bold transition flex items-center gap-2">
            <i class="fas fa-print text-xl"></i> IMPRIMIR / GUARDAR TODO EL CATÁLOGO
        </button>
        <a href="catalogo.php"
            class="bg-white hover:bg-gray-100 text-multiwheel-blue px-6 py-3 rounded-full shadow-lg font-bold transition text-center border border-gray-200">
            <i class="fas fa-arrow-left"></i> Volver al Catálogo
        </a>
    </div>

    <div class="catalog-container container mx-auto max-w-5xl px-4">

        <!-- COVER PAGE -->
        <div
            class="product-sheet page-break flex flex-col items-center justify-center bg-multiwheel-blue text-white text-center">
            <img src="logo550_nuevo.png" alt="Multiwheel" class="w-80 mb-12">
            <h1 class="text-6xl font-bold mb-4">CATÁLOGO GENERAL</h1>
            <p class="text-2xl opacity-80 mb-24 uppercase tracking-widest">Equipamiento Profesional de Vehículos</p>

            <div class="absolute bottom-20 w-full text-center">
                <p class="text-xl font-bold mb-2">MULTIWHEEL EQUIPOS Y SISTEMAS S.L.</p>
                <p class="opacity-70">www.multiwheel.es</p>
            </div>
        </div>

        <!-- PRODUCT PAGES -->
        <?php foreach ($products_data['productos'] as $index => $producto): ?>
        <div class="product-sheet <?php echo ($index < count($products_data['productos']) - 1) ? 'page-break' : ''; ?>">
            <?php echo generar_html_producto($producto, false); ?>
        </div>
        <?php
endforeach; ?>

        <!-- BACK COVER -->
        <div class="product-sheet flex flex-col items-center justify-center bg-multiwheel-blue text-white text-center">
            <h2 class="text-4xl font-bold mb-6">GRACIAS POR SU CONFIANZA</h2>
            <p class="text-xl opacity-80 mb-12">Contacte con nosotros para presupuestos a medida y asesoramiento
                técnico.</p>

            <div class="grid grid-cols-2 gap-12 text-left max-w-2xl mx-auto border-t border-white/20 pt-12">
                <div>
                    <h3 class="font-bold text-multiwheel-orange text-lg mb-2">DIRECCIÓN</h3>
                    <p class="opacity-80">Pol. Ind. La Red, C/ 12 - Nave 14</p>
                    <p class="opacity-80">41500 Alcalá de Guadaíra, Sevilla</p>
                </div>
                <div>
                    <h3 class="font-bold text-multiwheel-orange text-lg mb-2">CONTACTO</h3>
                    <p class="opacity-80">Telf: +34 620 531 511</p>
                    <p class="opacity-80">Email: info@multiwheel.es</p>
                    <p class="opacity-80">Web: www.multiwheel.es</p>
                </div>
            </div>

            <img src="logo550_nuevo.png" alt="Multiwheel" class="w-48 mt-24 opacity-50">
        </div>
    </div>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>

</html>