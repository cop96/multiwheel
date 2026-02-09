#!/bin/bash
#
# Generador de ZIP Limpio para Servidor
# Elimina archivos innecesarios y crea un ZIP listo para subir
#

# Colores
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}🗂️ Generando ZIP limpio para Hostinger...${NC}\n"

# Nombre del ZIP
ZIP_NAME="multiwheel-web-$(date +%Y-%m-%d).zip"

# Crear ZIP excluyendo archivos innecesarios
zip -r "$ZIP_NAME" . \
    -x "*.git*" \
    -x "*.DS_Store" \
    -x "Thumbs.db" \
    -x "# __PROMPT*" \
    -x "ADDON_*" \
    -x "README.md" \
    -x "plans/**" \
    -x "docs/**" \
    -x "logo550_nuevo.png" \
    -x "*.zip"

if [ -f "$ZIP_NAME" ]; then
    SIZE=$(du -h "$ZIP_NAME" | cut -f1)
    echo -e "${GREEN}✅ ZIP creado exitosamente: $ZIP_NAME${NC}"
    echo -e "${GREEN}📦 Tamaño: $SIZE${NC}\n"
    
    echo -e "${YELLOW}📁 Archivos incluidos:${NC}"
    echo "   - index.php"
    echo "   - servicios.php"
    echo "   - proyectos.php"
    echo "   - catalogo.php"
    echo "   - producto.php"
    echo "   - contacto.php"
    echo "   - aviso-legal.php"
    echo "   - politica-privacidad.php"
    echo "   - ley-cookies.php"
    echo "   - header.php"
    echo "   - footer.php"
    echo "   - css/"
    echo "   - js/"
    echo "   - catalogo/"
    echo "   - pdf/"
    echo "   - inc/"
    echo "   - images/"
    echo ""
    
    echo -e "${YELLOW}🗑️ Archivos eliminados:${NC}"
    echo "   - # __PROMPT*.md"
    echo "   - ADDON_*.md"
    echo "   - README.md"
    echo "   - plans/"
    echo "   - docs/"
    echo "   - .git/"
    echo "   - .DS_Store"
    echo ""
    
    echo -e "${GREEN}🎯 Listo para subir a Hostinger!${NC}"
else
    echo -e "${RED}❌ Error al crear el ZIP${NC}"
fi
