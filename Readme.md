# Practica Formativa - Catriel Escobar


## 1. Creación y configuración del repositorio

```bash
git init
git add .
git commit -m "Commit inicial con index.html y Readme.md"

git remote add origin https://github.com/Catriel-Escobar/practica-formativa.git
git branch -M main
git push -u origin main


```

## 2. Creación de ramas

```bash

git checkout -b feature/perfil-nuevo-ui
git add index.html
git commit -m "Agregado de datos personales (formulario usuario y contraseña)"
git push --set-upstream origin feature/perfil-nuevo-ui

git checkout -b feature/perfil-nuevo-backend
git add login.php
git commit -m "Recepción y validación de datos desde frontend"
git push --set-upstream origin feature/perfil-nuevo-backend
```

## 3. Conflicto y resolución

```bash
git pull origin main

Se produjo el siguiente conflicto:

Auto-merging index.html
CONFLICT (content): Merge conflict in index.html
Automatic merge failed; fix conflicts and then commit the result.


El conflicto fue resuelto con la herramienta de Git en Visual Studio Code, aceptando el cambio del frontend (UI).

git add index.html
git commit -m "Resolución de conflicto en index.html aceptando cambios de UI"
git push

```

## 4. Limpieza de ramas

```bash

# Eliminar ramas locales
git branch -d feature/perfil-nuevo-ui
git branch -d feature/perfil-nuevo-backend

# Eliminar ramas remotas
git push origin --delete feature/perfil-nuevo-ui
git push origin --delete feature/perfil-nuevo-backend

```


