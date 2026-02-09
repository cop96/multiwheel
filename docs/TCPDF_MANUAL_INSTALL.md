# Instalación Manual de TCPDF

## Método 1: Descarga Directa

1. Descarga el archivo TCPDF desde GitHub:
   https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.7.5.tar.gz

2. Extrae el archivo descargado:
   ```bash
   tar -xzf 6.7.5.tar.gz
   ```

3. La estructura extraída será:
   ```
   TCPDF-6.7.5/
   ├── config/
   ├── fonts/
   ├── htmlcolors.php
   ├── tcpdf.php
   ├── ...
   ```

4. Mueve el contenido de `TCPDF-6.7.5/` a la carpeta `inc/tcpdf/`:
   ```bash
   mv TCPDF-6.7.5/* inc/tcpdf/
   ```

5. Elimina los archivos temporales:
   ```bash
   rm -rf TCPDF-6.7.5 6.7.5.tar.gz
   ```

## Método 2: Usando wget (Linux/Mac)

```bash
cd /ruta/de/tu/proyecto
wget https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.7.5.tar.gz
tar -xzf 6.7.5.tar.gz
mv TCPPDF-6.7.5/* inc/tcpdf/
rm -rf TCPDF-6.7.5 6.7.5.tar.gz
```

## Método 3: Usando curl (Linux/Mac)

```bash
cd /ruta/de/tu/proyecto
curl -L -o tcpdf.tar.gz https://github.com/tecnickcom/TCPDF/archive/refs/tags/6.7.5.tar.gz
tar -xzf tcpdf.tar.gz
mv TCPDF-6.7.5/* inc/tcpdf/
rm -rf TCPDF-6.7.5 tcpdf.tar.gz
```

## Verificación

Después de la instalación, verifica que tienes los siguientes archivos en `inc/tcpdf/`:
- `tcpdf.php`
- `config/tcpdf_config.php`
- `fonts/`
- `htmlcolors.php`

## Estructura Final

```
inc/
└── tcpdf/
    ├── config/
    │   └── tcpdf_config.php
    ├── fonts/
    ├── htmlcolors.php
    ├── tcpdf.php
    └── ...
```

## Configuración Opcional

Si necesitas personalizar la configuración de TCPDF, edita el archivo:
`inc/tcpdf/config/tcpdf_config.php`

## Soporte

Para problemas con TCPDF, consulta la documentación oficial:
https://tcpdf.org/

Repositorio GitHub:
https://github.com/tecnickcom/TCPDF
