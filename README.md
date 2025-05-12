# PHP + MySQL con Docker

Este proyecto muestra cómo conectar una aplicación web PHP con una base de datos MySQL usando Docker.

## 🚀 Cómo ejecutar

1. Cloná el repositorio:
   ```bash
   git clone https://github.com/cleugenia/mi-proyecto.git
   cd mi-proyecto
   ```

2. Levantá los servicios:
   ```bash
   docker compose up -d
   ```

3. Accedé a la app en:
   - Web: [http://localhost:8081](http://localhost:8081)
   - MySQL: puerto `3307`, usuario `root`, contraseña `1234`

## 📁 Estructura del proyecto

- `app/index.php`: Código PHP que se conecta a MySQL.
- `app/Dockerfile`: Imagen PHP personalizada con mysqli.
- `docker-compose.yml`: Orquestación de servicios.

## 🛠️ Requisitos

- Docker
- MySQL Workbench (opcional, para cargar la base)

## ✅ Base de datos

Conectarse a MySQL (`localhost:3307`) y ejecutar:

```sql
CREATE DATABASE ejemplo;
USE ejemplo;
CREATE TABLE personas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50)
);
INSERT INTO personas (nombre) VALUES ('M Eugenia'), ('Juan');
```
