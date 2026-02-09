<?php include 'header.php'; ?>

<!-- SECTION 1: HERO -->
<section class="relative min-h-[600px] md:min-h-[700px] flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=1920&q=80" 
             alt="Interior de furgoneta equipada profesionalmente" 
             class="w-full h-full object-cover">
    </div>
    
    <!-- Overlay Gradient -->
    <div class="absolute inset-0 z-10 bg-gradient-to-r from-[#1e3a5f] 0% via-[#1e3a5f] 70% to-transparent 100%"></div>
    
    <!-- Content -->
    <div class="relative z-20 container mx-auto px-4">
        <div class="max-w-2xl">
            <!-- Pretitle -->
            <p class="text-multiwheel-orange font-semibold uppercase tracking-wider text-sm mb-4 flex items-center gap-2">
                <i class="fas fa-tools"></i>
                Desde 2011 en Sevilla
            </p>
            
            <!-- Title -->
            <h1 class="font-rajdhani font-bold text-5xl md:text-7xl text-white leading-tight mb-6">
                Convertimos tu furgoneta en tu mejor herramienta de trabajo
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl text-gray-200 leading-relaxed mb-8">
                Equipamiento profesional para talleres móviles, reparación especializada de grúas y sistemas de rescate en carretera. 
                <strong class="text-multiwheel-orange">Más de 340 vehículos equipados</strong> en Andalucía.
            </p>
            
            <!-- CTAs -->
            <div class="flex flex-wrap gap-4 mb-10">
                <a href="catalogo.php" class="bg-multiwheel-red hover:bg-red-700 text-white px-6 py-3 rounded font-semibold transition flex items-center gap-2">
                    <i class="fas fa-box-open"></i>
                    Ver catálogo de equipamiento
                </a>
                <a href="contacto.php" class="border-2 border-white hover:bg-white hover:text-multiwheel-blue text-white px-6 py-3 rounded font-semibold transition flex items-center gap-2">
                    <i class="fas fa-clipboard-list"></i>
                    Presupuesto gratuito
                </a>
            </div>
            
            <!-- Trust Badges -->
            <div class="flex flex-wrap gap-6 text-sm text-gray-200">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span>Instalación incluida</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span>Fabricación a medida</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span>Garantía certificada</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce text-white">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>

<!-- SECTION 2: PROPUESTA DE VALOR -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Intro -->
        <div class="max-w-3xl mx-auto text-center mb-12">
            <p class="text-multiwheel-orange font-semibold uppercase tracking-wider text-sm mb-2">
                ¿Por qué elegirnos?
            </p>
            <h2 class="font-rajdhani font-bold text-4xl md:text-5xl text-multiwheel-blue mb-4">
                Tu partner técnico de confianza
            </h2>
            <p class="text-steel-gray text-lg">
                Fabricamos, instalamos y mantenemos el equipamiento profesional que necesitas para optimizar tu negocio
            </p>
        </div>
        
        <!-- Value Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Value 1 -->
            <div class="bg-workshop-white p-8 rounded-lg hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-drafting-compass text-2xl text-multiwheel-red"></i>
                </div>
                <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3">
                    Fabricación a medida
                </h3>
                <p class="text-industrial-gray">
                    Diseñamos el equipamiento según tu actividad profesional: electricistas, fontaneros, herreros, servicios de grúa. 
                    Cada instalación es única y adaptada a tu flujo de trabajo.
                </p>
            </div>
            
            <!-- Value 2 -->
            <div class="bg-workshop-white p-8 rounded-lg hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-wrench text-2xl text-multiwheel-orange"></i>
                </div>
                <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3">
                    Instalación completa
                </h3>
                <p class="text-industrial-gray">
                    Montaje profesional en nuestras instalaciones de Alcalá de Guadaíra. Certificados de homologación, 
                    acabados industriales y revisión técnica garantizada.
                </p>
            </div>
            
            <!-- Value 3 -->
            <div class="bg-workshop-white p-8 rounded-lg hover:shadow-xl transition duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-2xl text-multiwheel-blue"></i>
                </div>
                <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3">
                    Servicio postventa
                </h3>
                <p class="text-industrial-gray">
                    Reparación y mantenimiento de grúas con piezas originales. Asesoramiento técnico continuo 
                    y compra-venta de carrocerías usadas para renovación de flota.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: SERVICIOS POR SECTOR -->
<section class="py-16 md:py-24 bg-workshop-white">
    <div class="container mx-auto px-4">
        <!-- Intro -->
        <div class="text-center mb-12">
            <p class="text-multiwheel-orange font-semibold uppercase tracking-wider text-sm mb-2">
                Soluciones especializadas
            </p>
            <h2 class="font-rajdhani font-bold text-4xl md:text-5xl text-multiwheel-blue mb-4">
                ¿Qué tipo de profesional eres?
            </h2>
            <p class="text-steel-gray text-lg max-w-2xl mx-auto">
                Equipamiento adaptado a tu sector con todo lo necesario para trabajar de forma eficiente
            </p>
        </div>
        
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sector 1: Grúas -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605218427360-4736e2d82375?w=800&q=80" 
                         alt="Grúa de auxílio en carretera" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-multiwheel-red text-white px-3 py-1 rounded text-sm font-semibold">
                            Profesionales del auxílio
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3 flex items-center gap-2">
                        <i class="fas fa-truck-pickup text-multiwheel-red"></i>
                        Grúas y Auxílio en Carretera
                    </h3>
                    <p class="text-industrial-gray mb-4">
                        Sistemas de rescate certificados, reparación de plumas hidráulicas, compra-venta de carrocerías usadas 
                        y actualización de equipamiento obsoleto.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Reparación de grúas slide-bed y pluma
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Sistemas de winch y rampa hidráulica
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Traspaso de carrocerías certificado
                        </li>
                    </ul>
                    <a href="servicios.php#gruas" class="inline-flex items-center gap-2 text-multiwheel-red hover:text-red-700 font-semibold transition">
                        Ver detalles del servicio
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Sector 2: Taller Móvil -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581092921461-eab6245b0262?w=800&q=80" 
                         alt="Interior furgoneta con estanterías" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-multiwheel-orange text-white px-3 py-1 rounded text-sm font-semibold">
                            Multisector
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3 flex items-center gap-2">
                        <i class="fas fa-tools text-multiwheel-orange"></i>
                        Taller Móvil Multisector
                    </h3>
                    <p class="text-industrial-gray mb-4">
                        Estanterías modulares, generadores autónomos, iluminación LED profesional y suelos antideslizantes. 
                        Soluciones para electricistas, fontaneros, herreros, carpinteros.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Banco de trabajo con cajones y utillaje
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Equipo electrógeno con tomas exteriores
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Sistema de iluminación autónomo
                        </li>
                    </ul>
                    <a href="servicios.php#taller-movil" class="inline-flex items-center gap-2 text-multiwheel-orange hover:text-orange-700 font-semibold transition">
                        Ver detalles del servicio
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Sector 3: Transporte -->
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1565043666747-69f6646db940?w=800&q=80" 
                         alt="Furgoneta de reparto" 
                         class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 left-4">
                        <span class="bg-steel-gray text-white px-3 py-1 rounded text-sm font-semibold">
                            Logística
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="font-rajdhani font-bold text-xl text-multiwheel-blue mb-3 flex items-center gap-2">
                        <i class="fas fa-shipping-fast text-steel-gray"></i>
                        Transporte y Distribución
                    </h3>
                    <p class="text-industrial-gray mb-4">
                        Anclajes homologados, sistemas de carga certificados, divisores de carga y estanterías ligeras 
                        para optimizar espacio en vehículos de reparto.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Anclajes y sistemas de amarre homologados
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Divisores de carga para separación mercancía
                        </li>
                        <li class="flex items-center gap-2 text-sm text-industrial-gray">
                            <i class="fas fa-check text-green-500"></i>
                            Estanterías modulares para paquetería
                        </li>
                    </ul>
                    <a href="servicios.php#transporte" class="inline-flex items-center gap-2 text-multiwheel-blue hover:text-blue-700 font-semibold transition">
                        Ver detalles del servicio
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: PRUEBA SOCIAL (TESTIMONIALS) -->
<section class="py-16 md:py-24 bg-multiwheel-blue text-white">
    <div class="container mx-auto px-4">
        <!-- Intro -->
        <div class="text-center mb-12">
            <h2 class="font-rajdhani font-bold text-4xl md:text-5xl mb-4">
                Confían en nosotros
            </h2>
            <p class="text-xl text-gray-300">
                Más de <strong class="text-multiwheel-orange text-2xl">340 vehículos equipados</strong> desde 2011
            </p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonio 1 -->
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-lg">
                <div class="flex items-center gap-4 mb-4">
                    <img src="https://i.pravatar.cc/80?img=12" 
                         alt="José M. Ramírez" 
                         class="w-16 h-16 rounded-full border-2 border-multiwheel-orange">
                    <div>
                        <h4 class="font-rajdhani font-bold text-lg">José M. Ramírez</h4>
                        <p class="text-gray-400 text-sm">Electricista - Sevilla</p>
                    </div>
                </div>
                <div class="flex text-yellow-400 mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-200 italic">
                    "Antes tardaba 40 minutos en preparar la furgoneta cada mañana. Ahora todo está a mano 
                    y perfectamente organizado. La inversión se recuperó en 3 meses."
                </p>
            </div>
            
            <!-- Testimonio 2 -->
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-lg">
                <div class="flex items-center gap-4 mb-4">
                    <img src="https://i.pravatar.cc/80?img=33" 
                         alt="Grúas Hermanos López" 
                         class="w-16 h-16 rounded-full border-2 border-multiwheel-orange">
                    <div>
                        <h4 class="font-rajdhani font-bold text-lg">Grúas Hermanos López</h4>
                        <p class="text-gray-400 text-sm">Auxílio en carretera - Dos Hermanas</p>
                    </div>
                </div>
                <div class="flex text-yellow-400 mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-200 italic">
                    "Llevamos 8 años confiando en Multiwheel para todas las reparaciones de nuestra flota. 
                    Respuesta rápida, piezas originales y trabajo impecable."
                </p>
            </div>
            
            <!-- Testimonio 3 -->
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-lg">
                <div class="flex items-center gap-4 mb-4">
                    <img src="https://i.pravatar.cc/80?img=25" 
                         alt="Ana Martínez" 
                         class="w-16 h-16 rounded-full border-2 border-multiwheel-orange">
                    <div>
                        <h4 class="font-rajdhani font-bold text-lg">Ana Martínez</h4>
                        <p class="text-gray-400 text-sm">Fontanera - Alcalá de Guadaíra</p>
                    </div>
                </div>
                <div class="flex text-yellow-400 mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-200 italic">
                    "Me diseñaron un taller móvil específico para fontanería con almacenaje para tubos largos. 
                    Atención personalizada y profesional de principio a fin."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: GALERÍA PROYECTOS PREVIEW -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Intro -->
        <div class="text-center mb-12">
            <p class="text-multiwheel-orange font-semibold uppercase tracking-wider text-sm mb-2">
                Nuestros proyectos
            </p>
            <h2 class="font-rajdhani font-bold text-4xl md:text-5xl text-multiwheel-blue mb-4">
                Equipamientos realizados
            </h2>
            <p class="text-steel-gray text-lg max-w-2xl mx-auto">
                Cada proyecto es único. Descubre cómo transformamos vehículos comerciales en herramientas profesionales
            </p>
        </div>
        
        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-10">
            <!-- Image 1 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&q=80" 
                     alt="Work van interior" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
            
            <!-- Image 2 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1605218427360-4736e2d82375?w=600&q=80" 
                     alt="Commercial vehicle equipment" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
            
            <!-- Image 3 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1581092921461-eab6245b0262?w=600&q=80" 
                     alt="Mobile workshop" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
            
            <!-- Image 4 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1565043666747-69f6646db940?w=600&q=80" 
                     alt="Tow truck" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
            
            <!-- Image 5 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1599940824399-b87987ceb72a?w=600&q=80" 
                     alt="Van shelving system" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
            
            <!-- Image 6 -->
            <div class="relative aspect-square overflow-hidden group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1503376763036-066120622c74?w=600&q=80" 
                     alt="Professional van conversion" 
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-multiwheel-blue/80 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white font-rajdhani font-bold text-lg">Ver proyecto</span>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center">
            <a href="proyectos.php" class="inline-flex items-center gap-2 bg-multiwheel-red hover:bg-red-700 text-white px-8 py-3 rounded font-semibold transition">
                <i class="fas fa-images"></i>
                Ver todos los proyectos
            </a>
        </div>
    </div>
</section>

<!-- SECTION 6: CTA FINAL -->
<section class="py-20 md:py-32 bg-gradient-to-br from-[#1e3a5f] to-[#1e3a8a] text-white relative overflow-hidden">
    <!-- Pattern Overlay -->
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Pretitle -->
            <p class="text-multiwheel-orange font-semibold uppercase tracking-wider text-sm mb-4">
                ¿Listo para empezar?
            </p>
            
            <!-- Title -->
            <h2 class="font-rajdhani font-bold text-4xl md:text-6xl mb-6">
                Solicita tu presupuesto sin compromiso
            </h2>
            
            <!-- Subtitle -->
            <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                Cuéntanos tu proyecto y te enviaremos un presupuesto detallado en menos de 24 horas. 
                Primera consulta técnica gratuita.
            </p>
            
            <!-- CTAs -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <a href="contacto.php" class="bg-multiwheel-red hover:bg-red-700 text-white px-8 py-4 rounded font-semibold transition flex items-center gap-2">
                    <i class="fas fa-clipboard-check"></i>
                    Solicitar presupuesto
                </a>
                <a href="tel:+34620531511" class="border-2 border-white hover:bg-white hover:text-multiwheel-blue text-white px-8 py-4 rounded font-semibold transition flex items-center gap-2">
                    <i class="fas fa-phone"></i>
                    Llamar ahora: 620 531 511
                </a>
                <a href="https://wa.me/34620531511?text=Hola,%20quiero%20solicitar%20un%20presupuesto%20para%20equipamiento%20de%20mi%20vehículo" 
                   target="_blank" 
                   class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded font-semibold transition flex items-center gap-2">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
            </div>
            
            <!-- Trust Elements -->
            <div class="flex flex-wrap justify-center gap-8 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fas fa-shield-check text-green-400 text-lg"></i>
                    <span>Presupuesto sin compromiso</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-clock text-multiwheel-orange text-lg"></i>
                    <span>Respuesta en 24h</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-tools text-blue-300 text-lg"></i>
                    <span>Consulta técnica gratis</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
