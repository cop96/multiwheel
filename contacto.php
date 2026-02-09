<?php include 'header.php'; ?>

<!-- HERO SECTION -->
<section class="bg-multiwheel-blue py-16 md:py-24">
    <div class="container mx-auto px-4 text-center">
        <h1 class="font-rajdhani font-bold text-4xl md:text-6xl text-white mb-4">
            Contacto
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Estamos aquí para ayudarte. Cuéntanos tu proyecto y te responderemos en menos de 24 horas.
        </p>
    </div>
</section>

<!-- CONTACTO CONTENT -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Columna Izquierda: Información de Contacto -->
            <div>
                <h2 class="font-rajdhani font-bold text-3xl text-multiwheel-blue mb-6">
                    <i class="fas fa-headset mr-2"></i>Información de contacto
                </h2>
                
                <!-- Address -->
                <div class="flex items-start gap-4 mb-6 p-4 bg-workshop-white rounded-lg">
                    <div class="flex-shrink-0 w-12 h-12 bg-multiwheel-blue/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-xl text-multiwheel-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-1">Dirección</h3>
                        <p class="text-industrial-gray">
                            Pol. Ind. La Red<br>
                            Calle 12 Nave 14<br>
                            41500 Alcalá de Guadaíra<br>
                            Sevilla, Andalucía
                        </p>
                    </div>
                </div>
                
                <!-- Phone -->
                <div class="flex items-start gap-4 mb-6 p-4 bg-workshop-white rounded-lg">
                    <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-phone text-xl text-multiwheel-red"></i>
                    </div>
                    <div>
                        <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-1">Teléfono</h3>
                        <p class="text-industrial-gray">
                            <a href="tel:+34620531511" class="hover:text-multiwheel-red transition font-semibold">
                                620 531 511
                            </a>
                        </p>
                        <p class="text-steel-gray text-sm">Llamada gratuita</p>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="flex items-start gap-4 mb-6 p-4 bg-workshop-white rounded-lg">
                    <div class="flex-shrink-0 w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-envelope text-xl text-multiwheel-orange"></i>
                    </div>
                    <div>
                        <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-1">Email</h3>
                        <p class="text-industrial-gray">
                            <a href="mailto:info@multiwheel.es" class="hover:text-multiwheel-red transition">
                                info@multiwheel.es
                            </a>
                        </p>
                        <p class="text-steel-gray text-sm">Respondemos en 24h</p>
                    </div>
                </div>
                
                <!-- WhatsApp -->
                <div class="flex items-start gap-4 mb-6 p-4 bg-green-50 rounded-lg">
                    <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fab fa-whatsapp text-xl text-green-600"></i>
                    </div>
                    <div>
                        <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-1">WhatsApp</h3>
                        <p class="text-industrial-gray">
                            <a href="https://wa.me/34620531511" target="_blank" class="hover:text-green-600 transition font-semibold">
                                620 531 511
                            </a>
                        </p>
                        <p class="text-steel-gray text-sm">Respuesta rápida</p>
                    </div>
                </div>
                
                <!-- Horario -->
                <div class="flex items-start gap-4 mb-6 p-4 bg-workshop-white rounded-lg">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-clock text-xl text-multiwheel-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-rajdhani font-bold text-lg text-multiwheel-blue mb-1">Horario</h3>
                        <div class="text-industrial-gray">
                            <p><strong>Lunes - Viernes:</strong> 8:00 - 18:00h</p>
                            <p><strong>Sábado:</strong> 9:00 - 14:00h</p>
                            <p><strong>Domingo:</strong> Cerrado</p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="flex flex-wrap gap-3 mt-8">
                    <a href="tel:+34620531511" class="flex-1 min-w-[150px] bg-multiwheel-red hover:bg-red-700 text-white py-3 px-4 rounded font-semibold transition text-center">
                        <i class="fas fa-phone mr-2"></i>Llamar
                    </a>
                    <a href="https://wa.me/34620531511" target="_blank" class="flex-1 min-w-[150px] bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded font-semibold transition text-center">
                        <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                    </a>
                    <a href="https://maps.google.com/?q=Pol.+Ind.+La+Red,+Calle+12+Nave+14,+41500+Alcal%C3%A1+de+Guada%C3%ADra,+Sevilla" 
                       target="_blank" 
                       class="flex-1 min-w-[150px] bg-multiwheel-blue hover:bg-blue-800 text-white py-3 px-4 rounded font-semibold transition text-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>Cómo llegar
                    </a>
                </div>
            </div>
            
            <!-- Columna Derecha: Formulario de Contacto -->
            <div>
                <h2 class="font-rajdhani font-bold text-3xl text-multiwheel-blue mb-6">
                    <i class="fas fa-paper-plane mr-2"></i>Envíanos un mensaje
                </h2>
                
                <form class="space-y-4" action="#" method="POST">
                    <!-- Nombre -->
                    <div>
                        <label for="nombre" class="block text-sm font-semibold text-industrial-gray mb-1">
                            <i class="fas fa-user mr-1 text-multiwheel-orange"></i>Nombre completo *
                        </label>
                        <input type="text" id="nombre" name="nombre" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-multiwheel-blue focus:border-transparent transition"
                               placeholder="Tu nombre">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-industrial-gray mb-1">
                            <i class="fas fa-envelope mr-1 text-multiwheel-orange"></i>Email *
                        </label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-multiwheel-blue focus:border-transparent transition"
                               placeholder="tu@email.com">
                    </div>
                    
                    <!-- Teléfono -->
                    <div>
                        <label for="telefono" class="block text-sm font-semibold text-industrial-gray mb-1">
                            <i class="fas fa-phone mr-1 text-multiwheel-orange"></i>Teléfono *
                        </label>
                        <input type="tel" id="telefono" name="telefono" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-multiwheel-blue focus:border-transparent transition"
                               placeholder="600 123 456">
                    </div>
                    
                    <!-- Tipo de servicio -->
                    <div>
                        <label for="servicio" class="block text-sm font-semibold text-industrial-gray mb-1">
                            <i class="fas fa-cogs mr-1 text-multiwheel-orange"></i>Servicio de interés
                        </label>
                        <select id="servicio" name="servicio" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-multiwheel-blue focus:border-transparent transition">
                            <option value="">Selecciona un servicio...</option>
                            <option value="equipamiento">Equipamiento de furgonetas</option>
                            <option value="gruas">Reparación de grúas</option>
                            <option value="rescate">Sistemas de rescate</option>
                            <option value="compra-venta">Compra-venta de carrocerías</option>
                            <option value="presupuesto">Presupuesto general</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    
                    <!-- Mensaje -->
                    <div>
                        <label for="mensaje" class="block text-sm font-semibold text-industrial-gray mb-1">
                            <i class="fas fa-comment mr-1 text-multiwheel-orange"></i>Mensaje *
                        </label>
                        <textarea id="mensaje" name="mensaje" rows="5" required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-multiwheel-blue focus:border-transparent transition"
                                  placeholder="Cuéntanos tu proyecto o necesidad..."></textarea>
                    </div>
                    
                    <!-- Privacidad -->
                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="privacidad" name="privacidad" required 
                               class="mt-1 w-4 h-4 text-multiwheel-blue rounded border-gray-300 focus:ring-multiwheel-blue">
                        <label for="privacidad" class="text-sm text-steel-gray">
                            He leído y acepto la <a href="politica-privacidad.php" class="text-multiwheel-blue hover:underline">Política de Privacidad</a> 
                            y consiento el tratamiento de mis datos para responder a mi consulta. *
                        </label>
                    </div>
                    
                    <!-- Submit -->
                    <button type="submit" 
                            class="w-full bg-multiwheel-red hover:bg-red-700 text-white py-4 rounded-lg font-bold text-lg transition flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        Enviar mensaje
                    </button>
                    
                    <p class="text-xs text-steel-gray text-center">
                        <i class="fas fa-shield-alt mr-1"></i>Sus datos están seguros. No compartiremos su información.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="py-12 bg-workshop-white">
    <div class="container mx-auto px-4">
        <h2 class="font-rajdhani font-bold text-2xl text-multiwheel-blue mb-6 text-center">
            <i class="fas fa-map-marked-alt mr-2"></i>Nuestra ubicación
        </h2>
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.7162899999997!2d-5.839999999999999!3d37.333333333333336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126f1234567890%3A0x1234567890abcdef!2sPol%C3%ADgono%20Industrial%20La%20Red!5e0!3m2!1ses!2ses!4v1600000000000!5m2!1ses!2ses" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-[400px]">
            </iframe>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
