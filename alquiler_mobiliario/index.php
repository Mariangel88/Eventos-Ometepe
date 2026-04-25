<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Ometepe | Gestión de Mobiliario</title>
    <style>
        /* Paleta de colores de Eventos Ometepe */
        :root {
            --azul-lago: #0077b6; /* Representa el agua del Cocibolca */
            --verde-isla: #2d6a4f; /* Representa la naturaleza de Ometepe */
            --blanco-puro: #ffffff;
            --gris-claro: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--gris-claro);
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Navegación solicitada en el Entregable 2 */
        nav {
            background: var(--azul-lago);
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        nav a {
            color: var(--blanco-puro);
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #caf0f8;
        }

        .hero {
            background: linear-gradient(rgba(0,119,182,0.8), rgba(45,106,79,0.8));
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h1 { margin: 0; font-size: 2.8rem; }
        .hero p { font-size: 1.2rem; opacity: 0.9; }

        .dashboard {
            max-width: 1000px;
            margin: -40px auto 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 0 20px;
        }

        .opcion-card {
            background: var(--blanco-puro);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 5px solid var(--verde-isla);
        }

        .opcion-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .opcion-card h3 { color: var(--verde-isla); font-size: 1.5rem; }
        
        .btn-accion {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background-color: var(--azul-lago);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-accion:hover {
            background-color: var(--verde-isla);
        }

        footer { text-align: center; padding: 20px; color: #777; font-size: 0.9rem; }
    </style>
</head>
<body>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="registro_mobiliario.php">Registro de Datos</a>
        <a href="ver_mobiliario.php">Consulta de Registros</a>
    </nav>

    <div class="hero">
        <h1>🏝️ Eventos Ometepe</h1>
        <p>Sistema de Control de Inventario - Proyecto POO</p>
    </div>

    <div class="dashboard">
        <div class="opcion-card">
            <h3>Ingresar Mobiliario</h3>
            <p>Registra nuevas sillas, mesas o mantelería en la base de datos local.</p>
            <a href="registro_mobiliario.php" class="btn-accion">Nuevo Registro</a>
        </div>

        <div class="opcion-card">
            <h3>Ver Inventario</h3>
            <p>Consulta la tabla dinámica con todo el equipo disponible actualmente.</p>
            <a href="ver_mobiliario.php" class="btn-accion">Ver Registros</a>
        </div>
    </div>

    <footer>
        UNAN-León | Ingeniería en Tecnología de la Información<br>
        47/19: Nicaragua, Cristiana, Socialista, Solidaria!
    </footer>

</body>
</html>