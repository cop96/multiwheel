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

<!-- CATALOGO CONTENT -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-2 mb-12">
            <button class="px-4 py-2 bg-multiwheel-blue text-white rounded-full font-semibold transition">
                Todos
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Estanterías
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Bancos de trabajo
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Iluminación
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Generadores
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Sistemas rescate
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Anclajes
            </button>
            <button class="px-4 py-2 bg-workshop-white text-industrial-gray hover:bg-multiwheel-blue hover:text-white rounded-full font-semibold transition">
                Accesorios
            </button>
        </div>
        
        <!-- PDF Download Button -->
        <div class="flex justify-end mb-8">
            <a href="pdf/generar-catalogo.php" target="_blank" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded font-semibold transition">
                <i class="fas fa-file-pdf"></i>
                Descargar catálogo PDF
            </a>
        </div>
        
        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <!-- Producto 1 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=400&q=80" 
                         alt="Estantería Modular Lateral" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                    <div class="absolute top-2 right-2">
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Destacado
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: EST-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Estantería Modular Lateral Derecha
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Estructura metálica con 5 baldas ajustables para instalación lateral en furgonetas profesionales.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-ruler-combined text-multiwheel-orange"></i>
                            1800 x 400 x 350mm
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-weight-hanging text-multiwheel-orange"></i>
                            Carga: 150kg
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-shield-alt text-multiwheel-orange"></i>
                            Homologado ITV
                        </li>
                    </ul>
                    <a href="producto.php?slug=estanteria-modular-lateral" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 2 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=400&q=80" 
                         alt="Banco de Trabajo Plegable" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: BAN-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Banco de Trabajo Plegable
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Banco de trabajo con superficie metálica y cajones extraíbles. Sistema de plegado vertical.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-ruler-combined text-multiwheel-orange"></i>
                            1200 x 600 x 900mm
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-box text-multiwheel-orange"></i>
                            5 cajones
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-tools text-multiwheel-orange"></i>
                            Plegable
                        </li>
                    </ul>
                    <a href="producto.php?slug=banco-trabajo-plegable" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 3 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=400&q=80" 
                         alt="Kit LED Autónomo" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                    <div class="absolute top-2 right-2">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Nuevo
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: ILU-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Kit LED Autónomo 12V/24V
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Sistema de iluminación LED profesional con sensor de movimiento y batería auxiliar.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-bolt text-multiwheel-orange"></i>
                            12V/24V compatible
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-clock text-multiwheel-orange"></i>
                            8h autonomía
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-lightbulb text-multiwheel-orange"></i>
                            1800 lúmenes
                        </li>
                    </ul>
                    <a href="producto.php?slug=kit-led-autonomo" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 4 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1565043666747-69f6646db940?w=400&q=80" 
                         alt="Generador Eléctrico Portátil" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Bajo pedido
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: GEN-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Generador Eléctrico Portátil 2000W
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Generador inverter silencioso con tomas Schuko y USB. Ideal para herramientas eléctricas.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-bolt text-multiwheel-orange"></i>
                            2000W máximo
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-volume-down text-multiwheel-orange"></i>
                            58 dB silencioso
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-gas-pump text-multiwheel-orange"></i>
                            Gasolina
                        </li>
                    </ul>
                    <a href="producto.php?slug=generador-portatil-2000w" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 5 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605218427360-4736e2d82375?w=400&q=80" 
                         alt="Winche Eléctrico Profesional" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: RES-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Winche Eléctrico Profesional 4500lbs
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Cabrestante eléctrico con mando a distancia inalámbrico. Cable de acero galvanizado.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-tachometer-alt text-multiwheel-orange"></i>
                            4500 lbs (2041kg)
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-cable text-multiwheel-orange"></i>
                            Cable 25m acero
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-wifi text-multiwheel-orange"></i>
                            Mando inalámbrico
                        </li>
                    </ul>
                    <a href="producto.php?slug=winche-electrico-4500lbs" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 6 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1599940824399-b87987ceb72a?w=400&q=80" 
                         alt="Kit Anclajes Homologados" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: ANC-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Kit Anclajes Homologados EN 12195
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Sistema completo de anclajes para fijación de carga. Certificación europea de seguridad.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-certificate text-multiwheel-orange"></i>
                            EN 12195
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-box text-multiwheel-orange"></i>
                            8 puntos
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-shield-alt text-multiwheel-orange"></i>
                            2000kg por punto
                        </li>
                    </ul>
                    <a href="producto.php?slug=kit-anclajes-homologados" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 7 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581092921461-eab6245b0262?w=400&q=80" 
                         alt="Divisor de Carga Modular" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: DIV-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Divisor de Carga Modular
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Sistema modular de divisores ajustables para optimización del espacio de carga.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-ruler-horizontal text-multiwheel-orange"></i>
                            Altura ajustable
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-lock text-multiwheel-orange"></i>
                            Fijación rápida
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-layer-group text-multiwheel-orange"></i>
                            Módular
                        </li>
                    </ul>
                    <a href="producto.php?slug=divisor-carga-modular" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
            
            <!-- Producto 8 -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503376763036-066120622c74?w=400&q=80" 
                         alt="Suelo Antideslizante Profesional" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-2 left-2">
                        <span class="bg-green-500 text-white px-2 py-1 rounded text-xs font-semibold">
                            Disponible
                        </span>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-xs text-steel-gray mb-1">REF: SUE-001</p>
                    <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-2">
                        Suelo Antideslizante Profesional
                    </h3>
                    <p class="text-steel-gray text-sm mb-3 line-clamp-2">
                        Revestimiento de suelo de alta resistencia con efecto antideslizante para furgonetas.
                    </p>
                    <ul class="space-y-1 mb-4">
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-ruler-combined text-multiwheel-orange"></i>
                            2mm Grosor
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-shield-alt text-multiwheel-orange"></i>
                            Antideslizante R10
                        </li>
                        <li class="flex items-center gap-1 text-xs text-industrial-gray">
                            <i class="fas fa-tint text-multiwheel-orange"></i>
                            Resistente agua
                        </li>
                    </ul>
                    <a href="producto.php?slug=suelo-antideslizante-profesional" class="block w-full text-center bg-workshop-white hover:bg-multiwheel-blue hover:text-white text-multiwheel-blue py-2 rounded font-semibold transition">
                        <i class="fas fa-eye mr-1"></i>
                        Ver ficha técnica
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Load More -->
        <div class="text-center mt-12">
            <button class="px-8 py-3 border-2 border-multiwheel-blue text-multiwheel-blue hover:bg-multiwheel-blue hover:text-white rounded font-semibold transition">
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
            <a href="contacto.php" class="bg-multiwheel-red hover:bg-red-700 text-white px-8 py-3 rounded font-semibold transition flex items-center gap-2">
                <i class="fas fa-envelope"></i>
                Consultar disponibilidad
            </a>
            <a href="https://wa.me/34620531511?text=Hola,%20quiero%20información%20sobre%20los%20productos%20del%20catálogo" 
               target="_blank" 
               class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded font-semibold transition flex items-center gap-2">
                <i class="fab fa-whatsapp"></i>
                WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
