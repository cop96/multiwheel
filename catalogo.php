<?php include 'header.php'; ?>

<!-- HERO SECTION -->
<section class="bg-multiwheel-blue py-16 md:py-24">
    <div class="container mx-auto px-4 text-center">
        <h1 class="font-rajdhani font-bold text-4xl md:text-6xl text-white mb-4">
            Catálogo de equipamiento
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Productos profesionales certificados para tu vehículo de trabajo
        </p>
    </div>
</section>

<?php
// Load products data
$products_file = __DIR__ . '/catalogo/data/productos.json';
$products_data = json_decode(file_get_contents($products_file), true);
$productos = $products_data['productos'] ?? [];
?>

<!-- CATALOGO CONTENT -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Filters -->
        <?php
$cat_filter = $_GET['categoria'] ?? 'todos';
$categorias = $products_data['categorias'] ?? [];
?>
        <div class="flex flex-wrap justify-center gap-2 mb-12">
            <a href="catalogo.php?categoria=todos"
                class="px-4 py-2 <?php echo $cat_filter === 'todos' ? 'bg-multiwheel-blue text-white' : 'bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white'; ?> rounded-full font-semibold transition">
                Todos
            </a>
            <?php foreach ($categorias as $cat): ?>
            <a href="catalogo.php?categoria=<?php echo $cat['id']; ?>"
                class="px-4 py-2 <?php echo $cat_filter === $cat['id'] ? 'bg-multiwheel-blue text-white' : 'bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white'; ?> rounded-full font-semibold transition">
                <?php echo $cat['nombre']; ?>
            </a>
            <?php
endforeach; ?>
        </div>

        <!-- PDF Download Button -->
        <div class="flex flex-col md:flex-row justify-end gap-3 mb-8">
            <a href="pdf/generar-catalogo.php" target="_blank"
                class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded font-semibold transition">
                <i class="fas fa-download"></i>
                Descarga Directa PDF
            </a>
            <a href="vista-catalogo-imprimir.php" target="_blank"
                class="inline-flex items-center gap-2 bg-multiwheel-blue hover:bg-blue-800 text-white px-4 py-2 rounded font-semibold transition shadow-md">
                <i class="fas fa-print"></i>
                Catálogo Premium (Vista para Imprimir)
            </a>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
foreach ($productos as $p):
    // Skip if doesn't match category filter
    if ($cat_filter !== 'todos' && $p['categoria'] !== $cat_filter)
        continue;

    // Get main image
    $prod_image = 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&q=80'; // Fallback
    if (!empty($p['imagenes'])) {
        $prod_image = 'catalogo/productos/' . $p['categoria'] . '/' . $p['slug'] . '/images/' . $p['imagenes'][0];
    }
?>
            <div
                class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="<?php echo $prod_image; ?>" alt="<?php echo $p['nombre']; ?>"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">

                    <div class="absolute top-2 left-2 flex flex-col gap-1">
                        <?php if (isset($p['stock'])): ?>
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            <?php echo ucfirst($p['stock']); ?>
                        </span>
                        <?php
    endif; ?>
                    </div>

                    <div class="absolute top-2 right-2 flex flex-col gap-1">
                        <?php if (isset($p['nuevo']) && $p['nuevo']): ?>
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-semibold">Nuevo</span>
                        <?php
    endif; ?>
                        <?php if (isset($p['destacado']) && $p['destacado']): ?>
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs font-semibold">Destacado</span>
                        <?php
    endif; ?>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF:
                        <?php echo $p['id']; ?>
                    </p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2 h-14 line-clamp-2">
                        <?php echo $p['nombre']; ?>
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        <?php echo $p['descripcion_corta']; ?>
                    </p>

                    <?php if (isset($p['especificaciones'])): ?>
                    <ul class="space-y-1 mb-4">
                        <?php
        $i = 0;
        foreach ($p['especificaciones'] as $key => $val):
            if ($i++ >= 3)
                break;
?>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray truncate">
                            <i class="fas fa-check text-multiwheel-orange"></i>
                            <span class="font-semibold capitalize">
                                <?php echo $key; ?>:
                            </span>
                            <?php echo $val; ?>
                        </li>
                        <?php
        endforeach; ?>
                    </ul>
                    <?php
    endif; ?>

                    <a href="producto.php?slug=<?php echo $p['slug']; ?>"
                        class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            <?php
endforeach; ?>
        </div>

        <!-- Load More -->
        <div class="text-center mt-12">
            <button
                class="px-8 py-3 border-2 border-multiwheel-blue text-multiwheel-blue hover:bg-multiwheel-blue hover:text-white rounded font-semibold transition">
                Cargar más productos
            </button>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="py-16 md:py-24 bg-workshop-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-rajdhani font-bold text-3xl md:text-4xl text-multiwheel-blue mb-4">
            ¿Necesitas un presupuesto personalizado?
        </h2>
        <p class="text-steel-gray text-lg mb-8 max-w-2xl mx-auto">
            Consulta disponibilidad y precio para tu proyecto específico. Te respondemos en menos de 24 horas.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="contacto.php"
                class="bg-multiwheel-red hover:bg-red-700 text-white px-8 py-3 rounded font-semibold transition flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                Consultar disponibilidad
            </a>
            <a href="https://wa.me/34620531511?text=Hola,%20quiero%20información%20sobre%20los%20productos%20del%20catálogo"
                target="_blank"
                class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded font-semibold transition flex items-center gap-2">
                <i class="fab fa-whatsapp"></i>
                WhatsApp
            </a>
        </div>
    </div>
</section>