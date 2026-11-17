# Syntax Sanctuary — Núcleo Base Web & Portafolio

Este repositorio contiene el **Núcleo** seleccionado por **Ramiro G Glez (`radaptow`)** como arquitectura y base web oficial para el ecosistema **Syntax Sanctuary** y portafolio profesional.

## Estructura del Proyecto

- **`src/nucleo/`**: Motor principal y módulos centrales del sistema.
- **`src/index.php`**: Punto de entrada monolítico de la aplicación web.
- **`Dockerfile` & `docker-compose.ejemplo.yml`**: Orquestación de contenedores (Apache/PHP + MariaDB 10.11 + integración con nodo Ollama).

## Despliegue

1. Copia los archivos de configuración de ejemplo:

    cp .env.ejemplo .env
    cp docker-compose.ejemplo.yml docker-compose.yml

2. Configura tus contraseñas en `.env` y `docker-compose.yml`.
3. Inicia la infraestructura:

    docker compose up -d --build

## Licencia

Distribuido bajo la licencia **Apache 2.0**. Consulta el archivo `LISENCE` para más detalles.
