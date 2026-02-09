# Guía para Subir el Proyecto a GitHub

## Opción 1: Usando Git desde la Terminal

### 1. Inicializar repositorio Git
```bash
cd /Users/cesaroliveros/Documents/Multiwheel
git init
```

### 2. Crear archivo .gitignore
Crear archivo `.gitignore` con:
```
.DS_Store
.vscode/
*.log
.env
uploads/
inc/tcpdf/
```

### 3. Añadir archivos
```bash
git add .
```

### 4. Hacer primer commit
```bash
git commit -m "Initial commit: Multiwheel website - 5 pages + PDF catalog system"
```

### 5. Crear repositorio en GitHub
1. Ir a: https://github.com/new
2. Nombre del repositorio: `multiwheel`
3. Descripción: "Sitio web profesional para Multiwheel - Equipamiento de furgonetas y reparación de grúas"
4. Público/Privado según prefieras
5. No initializar con README (ya tenemos archivos)

### 6. Conectar y subir
```bash
git remote add origin https://github.com/TU_USUARIO/multiwheel.git
git branch -M main
git push -u origin main
```

---

## Opción 2: Usando GitHub Desktop

### 1. Descargar GitHub Desktop
https://desktop.github.com/

### 2. Añadir repositorio local
1. Abrir GitHub Desktop
2. File → Add Local Repository
3. Seleccionar: `/Users/cesaroliveros/Documents/Multiwheel`

### 3. Crear commit
1. Escribir resumen de cambios
2. Descripción (opcional)
3. Click "Commit to main"

### 4. Publicar repositorio
1. Click "Publish repository"
2. Nombre: "multiwheel"
3. Descripción: "Sitio web profesional para Multiwheel"
4. Opciones según prefieras
5. Click "Publish"

---

## Comandos Git Útiles

### Ver estado
```bash
git status
```

### Ver cambios
```bash
git diff
```

### Añadir cambios específicos
```bash
git add archivo-especifico.php
```

### Commit con mensaje
```bash
git commit -m "Tu mensaje aquí"
```

### Subir cambios
```bash
git push origin main
```

### Descargar cambios del servidor
```bash
git pull origin main
```

### Ver historial
```bash
git log --oneline
```

---

## Estructura Recomendada para GitHub

```
multiwheel/
├── .gitignore
├── README.md
├── index.php
├── servicios.php
├── proyectos.php
├── catalogo.php
├── producto.php
├── contacto.php
├── aviso-legal.php
├── politica-privacidad.php
├── ley-cookies.php
├── header.php
├── footer.php
├── docs/
│   ├── TCPDF_MANUAL_INSTALL.md
│   └── GITHUB_GUIDE.md
├── catalogo/
│   ├── data/
│   │   └── productos.json
│   └── productos/
├── pdf/
│   └── *.php
└── images/
```

---

## Notas Importantes

1. **No subir archivos grandes** - Las imágenes deben optimizarse antes
2. **No subir TCPDF** - Incluir en .gitignore e instalar vía Composer o manualmente
3. **Datos sensibles** - Nunca subir archivos con contraseñas o APIs keys
4. **README.md** - Incluir descripción del proyecto e instrucciones

---

## Alternativa: GitLab o BitBucket

Si prefieres otras plataformas:
- **GitLab**: https://gitlab.com/projects/new
- **BitBucket**: https://bitbucket.org/repo/create

Los comandos son similares a GitHub.
