# Proyecto de Estructuras de Datos en PHP

Este proyecto incluye una implementación básica de una lista enlazada en PHP. El proyecto está compuesto por tres archivos principales:

1. **Node.php**: Define la clase `Node`, que representa un nodo en una lista enlazada. Cada nodo contiene datos y referencias al nodo siguiente y anterior.

2. **MyList.php**: Define la clase `MyList`, que proporciona métodos para añadir, eliminar, verificar la existencia y verificar si la lista está vacía. Utiliza la clase `Node` para gestionar la lista enlazada.

3. **run.php**: Archivo principal para ejecutar el script. Demuestra cómo agregar y eliminar elementos de la lista y cómo imprimir la lista actual.

## Instalación y Ejecución

### Requisitos

- PHP instalado en tu sistema.
- Visual Studio Code (VS Code) (opcional, para facilitar la ejecución).

### Instalación de PHP

#### En Windows

1. **Descargar PHP**:
   - Visita [el sitio web oficial de PHP](https://windows.php.net/download/).
   - Descarga el archivo ZIP de la versión deseada.

2. **Instalar PHP**:
   - Extrae el contenido del archivo ZIP en una carpeta, por ejemplo, `C:\php`.
   - Agrega la carpeta PHP a tu variable de entorno `PATH`:
     - Abre el **Panel de Control** y selecciona **Sistema**.
     - Haz clic en **Configuración avanzada del sistema**.
     - En la pestaña **Avanzado**, haz clic en **Variables de entorno**.
     - Encuentra y selecciona la variable `Path` en **Variables del sistema** y haz clic en **Editar**.
     - Agrega la ruta a la carpeta PHP (por ejemplo, `C:\php`) y guarda los cambios.

3. **Verificar la Instalación**:
   - Abre una nueva ventana de **Símbolo del sistema** y ejecuta `php -v` para verificar que PHP esté instalado correctamente.

#### En macOS

1. **Instalar PHP usando Homebrew** (si no tienes Homebrew, instálalo desde [aquí](https://brew.sh/)):

   ```bash
   brew install php
   ```
2.	**Verificar la Instalación:**
	•	Abre la terminal y ejecuta php -v para asegurarte de que PHP está instalado correctamente.

**Uso de Visual Studio Code**

1.	Instalar la Extensión Code Runner:
	•	Abre VS Code.
	•	Ve al panel de Extensiones (Ctrl + Shift + X o Command + Shift + X en Mac).
	•	Busca e instala la extensión Code Runner.
2.	Ejecutar el Script PHP:
	•	Abre el archivo run.php en VS Code.
	•	Haz clic derecho en el archivo y selecciona Run Code o usa el atajo Ctrl + Alt + N (o Command + Option + N en Mac) para ejecutar el archivo.

## Ejecución desde la Consola

1.	Abrir la Terminal:
	•	Navega al directorio donde se encuentran los archivos PHP (Node.php, MyList.php, y run.php).
2.	Ejecutar el Archivo PHP:
   ```bash
   php run.php
   ```
Esto ejecutará el script run.php y mostrará los resultados en la terminal.

## Estructura de Archivos

•	Node.php: Define la estructura del nodo de la lista.
•	MyList.php: Implementa la lista enlazada y sus operaciones.
•	run.php: Script principal para probar la funcionalidad de MyList.
