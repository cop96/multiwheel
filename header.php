<?php require_once 'inc/wp-compat.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?>Multiwheel - Equipamiento Profesional de Vehículos</title>

    <!-- Meta Description -->
    <meta name="description"
        content="Multiwheel - Especialistas en equipamiento profesional de furgonetas y reparación de grúas en Sevilla. Desde 2011 ofreciendo soluciones técnicas para profesionales del auxiliary en carretera y talleres móviles.">

    <!-- Open Graph -->
    <meta property="og:title" content="Multiwheel - Equipamiento Profesional de Vehículos">
    <meta property="og:description"
        content="Especialistas en equipamiento de furgonetas y reparación de grúas en Sevilla">
    <meta property="og:type" content="website">

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'multiwheel-blue': '#1e3a5f',
                        'multiwheel-red': '#c8102e',
                        'multiwheel-orange': '#f05a28',
                        'industrial-gray': '#3a3a3a',
                        'steel-gray': '#6b7280',
                        'workshop-white': '#f9fafb',
                    },
                    fontFamily: {
                        'rajdhani': ['Rajdhani', 'sans-serif'],
                        'opensans': ['Open Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Rajdhani:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome 6 via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Rajdhani', sans-serif;
        }

        .font-rajdhani {
            font-family: 'Rajdhani', sans-serif;
        }

        .font-opensans {
            font-family: 'Open Sans', sans-serif;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e3a5f;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #c8102e;
        }

        /* Mobile menu transition */
        .mobile-menu {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .mobile-menu.hidden {
            transform: translateX(-100%);
            opacity: 0;
        }

        .mobile-menu.visible {
            transform: translateX(0);
            opacity: 1;
        }
    </style>
</head>

<body class="bg-white text-industrial-gray antialiased">
    <!-- Header Sticky -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
        <!-- Top Bar -->
        <div class="bg-multiwheel-blue text-white py-2 hidden lg:block">
            <div class="container mx-auto px-4 flex justify-between items-center text-sm">
                <div class="flex items-center gap-4">
                    <span><i class="fas fa-map-marker-alt mr-2"></i>Pol. Ind. La Red, Calle 12 Nave 14, 41500 Alcalá de
                        Guadaíra, Sevilla</span>
                </div>
                <div class="flex items-center gap-4">
                    <span><i class="fas fa-clock mr-2"></i>Lun-Vie 8:00-18:00h / Sáb 9:00-14:00h</span>
                    <a href="tel:+34620531511" class="hover:text-multiwheel-orange transition"><i
                            class="fas fa-phone mr-2"></i>620 531 511</a>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-multiwheel-blue rounded flex items-center justify-center">
                        <span class="text-white font-rajdhani font-bold text-xl">MW</span>
                    </div>
                    <div class="hidden sm:block">
                        <span class="font-rajdhani font-bold text-2xl text-multiwheel-blue">MULTIWHEEL</span>
                        <p class="text-xs text-steel-gray">Desde 2011 / Equipamiento Profesional</p>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="index.php"
                        class="text-industrial-gray hover:text-multiwheel-red font-semibold transition">Inicio</a>
                    <a href="servicios.php"
                        class="text-industrial-gray hover:text-multiwheel-red font-semibold transition">Servicios</a>
                    <a href="proyectos.php"
                        class="text-industrial-gray hover:text-multiwheel-red font-semibold transition">Proyectos</a>
                    <a href="catalogo.php"
                        class="text-industrial-gray hover:text-multiwheel-red font-semibold transition">Catálogo</a>
                    <a href="contacto.php"
                        class="text-industrial-gray hover:text-multiwheel-red font-semibold transition">Contacto</a>
                </nav>

                <!-- Quick Contact -->
                <div class="hidden lg:flex items-center gap-4">
                    <a href="tel:+34620531511"
                        class="flex items-center gap-2 text-multiwheel-blue hover:text-multiwheel-red transition">
                        <i class="fas fa-phone text-xl"></i>
                        <span class="font-semibold">620 531 511</span>
                    </a>
                    <a href="https://wa.me/34620531511" target="_blank"
                        class="bg-multiwheel-red hover:bg-red-700 text-white px-4 py-2 rounded font-semibold transition flex items-center gap-2">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                    class="lg:hidden p-2 text-multiwheel-blue hover:text-multiwheel-red transition">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-40 lg:hidden hidden"></div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="mobile-menu hidden lg:hidden fixed top-0 left-0 w-80 h-full bg-white z-50 shadow-2xl">
            <div class="p-4">
                <div class="flex justify-between items-center mb-6 pb-4 border-b">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-multiwheel-blue rounded flex items-center justify-center">
                            <span class="text-white font-rajdhani font-bold">MW</span>
                        </div>
                        <span class="font-rajdhani font-bold text-xl text-multiwheel-blue">MULTIWHEEL</span>
                    </div>
                    <button id="mobile-menu-close" class="p-2 text-steel-gray hover:text-multiwheel-red transition">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <!-- Mobile Navigation Links -->
                <nav class="space-y-2 mb-6">
                    <a href="index.php"
                        class="block py-3 px-4 text-industrial-gray hover:bg-workshop-white hover:text-multiwheel-red rounded font-semibold transition">
                        <i class="fas fa-home w-6"></i> Inicio
                    </a>
                    <a href="servicios.php"
                        class="block py-3 px-4 text-industrial-gray hover:bg-workshop-white hover:text-multiwheel-red rounded font-semibold transition">
                        <i class="fas fa-cogs w-6"></i> Servicios
                    </a>
                    <a href="proyectos.php"
                        class="block py-3 px-4 text-industrial-gray hover:bg-workshop-white hover:text-multiwheel-red rounded font-semibold transition">
                        <i class="fas fa-images w-6"></i> Proyectos
                    </a>
                    <a href="catalogo.php"
                        class="block py-3 px-4 text-industrial-gray hover:bg-workshop-white hover:text-multiwheel-red rounded font-semibold transition">
                        <i class="fas fa-box w-6"></i> Catálogo
                    </a>
                    <a href="contacto.php"
                        class="block py-3 px-4 text-industrial-gray hover:bg-workshop-white hover:text-multiwheel-red rounded font-semibold transition">
                        <i class="fas fa-envelope w-6"></i> Contacto
                    </a>
                </nav>

                <!-- Mobile Contact Info -->
                <div class="border-t pt-4 space-y-3">
                    <a href="tel:+34620531511"
                        class="flex items-center gap-3 text-multiwheel-blue hover:text-multiwheel-red transition">
                        <i class="fas fa-phone w-6"></i>
                        <span>620 531 511</span>
                    </a>
                    <a href="mailto:info@multiwheel.es"
                        class="flex items-center gap-3 text-steel-gray hover:text-multiwheel-red transition">
                        <i class="fas fa-envelope w-6"></i>
                        <span>info@multiwheel.es</span>
                    </a>
                    <div class="flex items-center gap-3 text-steel-gray">
                        <i class="fas fa-map-marker-alt w-6"></i>
                        <span class="text-sm">Alcalá de Guadaíra, Sevilla</span>
                    </div>
                    <div class="flex items-center gap-3 text-steel-gray">
                        <i class="fas fa-clock w-6"></i>
                        <span class="text-sm">Lun-Vie 8:00-18:00h / Sáb 9:00-14:00h</span>
                    </div>
                </div>

                <!-- WhatsApp Button -->
                <div class="mt-6">
                    <a href="https://wa.me/34620531511" target="_blank"
                        class="block w-full bg-multiwheel-red hover:bg-red-700 text-white text-center py-3 rounded font-semibold transition">
                        <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                    </a>
                </div>

                <!-- Social Icons -->
                <div class="mt-6 flex justify-center gap-4 border-t pt-4">
                    <a href="#"
                        class="w-10 h-10 bg-multiwheel-blue/10 rounded-full flex items-center justify-center text-multiwheel-blue hover:bg-multiwheel-blue hover:text-white transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-multiwheel-blue/10 rounded-full flex items-center justify-center text-multiwheel-blue hover:bg-multiwheel-blue hover:text-white transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-multiwheel-blue/10 rounded-full flex items-center justify-center text-multiwheel-blue hover:bg-multiwheel-blue hover:text-white transition">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Spacer for fixed header -->
    <div class="h-24 lg:h-20"></div>

    <!-- Main Content Start -->
    <main>