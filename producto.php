<?php include 'header.php';

// Get slug from URL
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

// If product not found, show error
if (!$producto) {
    echo '<section class="py-24 bg-white"><div class="container mx-auto px-4 text-center"><h1 class="text-4xl font-bold text-red-600 mb-4">Producto no encontrado</h1><p class="text-gray-600 mb-8">El producto que buscas no existe o ha sido eliminado.</p><a href="catalogo.php" class="bg-multiwheel-blue text-white px-6 py-3 rounded">Volver al catálogo</a></div></section>';
    include 'footer.php';
    exit;
}

$page_title = $producto['nombre'] . ' | Multiwheel';
?>

<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center gap-2 text-sm text-gray-500">
            <a href="index.php" class="hover:text-multiwheel-blue">Inicio</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="catalogo.php" class="hover:text-multiwheel-blue">Catálogo</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="catalogo.php?categoria=<?php echo $producto['categoria']; ?>"
                class="hover:text-multiwheel-blue"><?php echo $producto['categoria_display']; ?></a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gray-800"><?php echo $producto['nombre']; ?></span>
        </nav>
    </div>
</section>

<!-- PRODUCTO DETALLE -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Product Header -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- Gallery -->
            <div>
                <div
                    class="relative bg-gray-100 rounded-lg overflow-hidden mb-4 aspect-square flex items-center justify-center">
                    <?php
                    $main_image = 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80'; // Fallback
                    if (!empty($producto['imagenes'])) {
                        $main_image = 'catalogo/productos/' . $producto['categoria'] . '/' . $producto['slug'] . '/images/' . $producto['imagenes'][0];
                    }
                    ?>
                    <img src="<?php echo $main_image; ?>" alt="<?php echo $producto['nombre']; ?>"
                        id="main-product-image" class="w-full h-full object-contain">
                    <?php if (isset($producto['nuevo']) && $producto['nuevo']): ?>
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-500 text-white px-3 py-1 rounded text-sm font-bold">NUEVO</span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($producto['destacado']) && $producto['destacado']): ?>
                        <div class="absolute top-4 right-4">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm font-bold">DESTACADO</span>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Thumbnails -->
                <?php if (!empty($producto['imagenes']) && count($producto['imagenes']) > 1): ?>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($producto['imagenes'] as $index => $img_name): ?>
                            <div onclick="document.getElementById('main-product-image').src = this.querySelector('img').src"
                                class="w-20 h-20 bg-gray-100 rounded overflow-hidden cursor-pointer border-2 <?php echo $index === 0 ? 'border-multiwheel-blue' : 'border-transparent'; ?> hover:border-multiwheel-blue transition">
                                <img src="catalogo/productos/<?php echo $producto['categoria']; ?>/<?php echo $producto['slug']; ?>/images/<?php echo $img_name; ?>"
                                    alt="Detalle <?php echo $index + 1; ?>" class="w-full h-full object-cover">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Info -->
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-sm text-steel-gray">REF: <?php echo $producto['id']; ?></span>
                    <span
                        class="px-2 py-1 rounded text-xs font-semibold <?php echo $producto['stock'] == 'disponible' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'; ?>">
                        <?php echo ucfirst($producto['stock']); ?>
                    </span>
                </div>

                <h1 class="font-rajdhani font-bold text-3xl md:text-4xl text-multiwheel-blue mb-4">
                    <?php echo $producto['nombre']; ?>
                </h1>

                <p class="text-steel-gray text-lg mb-6">
                    <?php echo $producto['descripcion_corta']; ?>
                </p>

                <!-- Price -->
                <?php if (isset($producto['precio'])): ?>
                    <div class="bg-workshop-white p-4 rounded-lg mb-6">
                        <p class="text-sm text-steel-gray mb-1">Precio:</p>
                        <p class="font-rajdhani font-bold text-3xl text-multiwheel-blue">
                            <?php echo $producto['precio']['base'] ?? 'Consultar'; ?> <span
                                class="text-lg"><?php echo $producto['precio']['moneda'] ?? 'EUR'; ?></span>
                        </p>
                        <?php if (!empty($producto['precio']['nota_precio'])): ?>
                            <p class="text-xs text-steel-gray"><?php echo $producto['precio']['nota_precio']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- CTAs -->
                <div class="flex flex-wrap gap-3 mb-6">
                    <a href="contacto.php?producto=<?php echo urlencode($producto['nombre']); ?>"
                        class="flex-1 min-w-[200px] bg-multiwheel-red hover:bg-red-700 text-white py-3 px-6 rounded font-semibold transition text-center">
                        <i class="fas fa-envelope mr-2"></i>Solicitar presupuesto
                    </a>
                    <a href="https://wa.me/34620531511?text=Hola,%20quiero%20información%20sobre%20<?php echo urlencode($producto['nombre']); ?>"
                        target="_blank"
                        class="flex-1 min-w-[150px] bg-green-600 hover:bg-green-700 text-white py-3 px-6 rounded font-semibold transition text-center">
                        <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                    </a>
                </div>

                <!-- Features -->
                <div class="space-y-2 text-sm">
                    <div class="flex items-center gap-2 text-industrial-gray">
                        <i class="fas fa-truck text-multiwheel-orange"></i>
                        <span><?php echo $producto['plazo_entrega']; ?></span>
                    </div>
                    <div class="flex items-center gap-2 text-industrial-gray">
                        <i class="fas fa-tools text-multiwheel-orange"></i>
                        <span><?php echo $producto['instalacion_incluida'] ? 'Instalación incluida' : 'Instalación no incluida'; ?></span>
                    </div>
                    <div class="flex items-center gap-2 text-industrial-gray">
                        <i class="fas fa-shield-alt text-multiwheel-orange"></i>
                        <span>Garantía: <?php echo $producto['garantia']; ?></span>
                    </div>
                </div>

                <!-- Download PDF -->
                <div class="mt-6 pt-6 border-t">
                    <a href="pdf/generar-pdf-producto.php?slug=<?php echo $producto['slug']; ?>" target="_blank"
                        class="inline-flex items-center gap-2 text-multiwheel-blue hover:text-blue-700 font-semibold transition">
                        <i class="fas fa-file-pdf text-xl"></i>
                        Descargar ficha técnica PDF
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="border-gray-200 mb-8">

        <!-- Tab Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Description -->
                <div class="mb-8">
                    <h2 class="font-rajdhani font-bold text-2xl text-multiwheel-blue mb-4">Descripción</h2>
                    <ul class="flex flex-col gap-3 text-industrial-gray leading-relaxed list-disc pl-5 w-full">
                        <?php
                        $lines = explode("\n", $producto['descripcion_larga'] ?? $producto['descripcion_corta']);
                        foreach ($lines as $line) {
                            $line = trim($line);
                            if (!empty($line)) {
                                echo "<li class=\"w-full text-left\">" . htmlspecialchars($line) . "</li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div>
                <!-- Especificaciones -->
                <div class="bg-workshop-white p-6 rounded-lg mb-6">
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-4">Especificaciones</h3>
                    <div class="space-y-3 text-sm">
                        <?php foreach (($producto['especificaciones'] ?? []) as $key => $value): ?>
                            <div class="flex justify-between">
                                <span class="text-steel-gray capitalize"><?php echo str_replace('_', ' ', $key); ?>:</span>
                                <span class="font-semibold text-industrial-gray"><?php echo $value; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Productos Relacionados -->
        <?php if (!empty($producto['relacionados'])): ?>
            <div class="mt-16 pt-16 border-t">
                <h2 class="font-rajdhani font-bold text-3xl text-multiwheel-blue mb-8 text-center">
                    Productos relacionados
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php foreach ($products_data['productos'] as $p): ?>
                        <?php if (in_array($p['id'], $producto['relacionados'])): ?>
                            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition">
                                <div class="h-40 bg-gray-100">
                                    <?php
                                    $rel_image = 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&q=80';
                                    if (!empty($p['imagenes'])) {
                                        $rel_image = 'catalogo/productos/' . $p['categoria'] . '/' . $p['slug'] . '/images/' . $p['imagenes'][0];
                                    }
                                    ?>
                                    <img src="<?php echo $rel_image; ?>" alt="<?php echo $p['nombre']; ?>"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="p-4">
                                    <p class="text-xs text-steel-gray">REF: <?php echo $p['id']; ?></p>
                                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                                        <?php echo $p['nombre']; ?>
                                    </h3>
                                    <p class="text-sm text-steel-gray line-clamp-2 mb-3"><?php echo $p['descripcion_corta']; ?></p>
                                    <a href="producto.php?slug=<?php echo $p['slug']; ?>"
                                        class="text-multiwheel-red hover:text-red-700 text-sm font-semibold">
                                        Ver producto <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA FINAL -->
<section class="py-16 bg-workshop-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-rajdhani font-bold text-3xl text-multiwheel-blue mb-4">¿Necesitas más información?</h2>
        <p class="text-steel-gray text-lg mb-8">Nuestro equipo técnico está disponible para resolver tus dudas</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contacto.php"
                class="bg-multiwheel-red hover:bg-red-700 text-white px-8 py-3 rounded font-semibold transition">
                <i class="fas fa-envelope mr-2"></i>Contactar
            </a>
            <a href="tel:+34620531511"
                class="bg-multiwheel-blue hover:bg-blue-800 text-white px-8 py-3 rounded font-semibold transition">
                <i class="fas fa-phone mr-2"></i>620 531 511
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>