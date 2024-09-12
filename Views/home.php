<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Obras de Arte</title>
    <link rel="stylesheet" href="Assets/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Roboto', sans-serif;
            overflow-x: hidden;
        }
        .hero-section {
        position: relative;
        height: 100vh;
        background-image: url('Assets/img/image.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
        image-rendering: optimizeQuality; /* Añadido para priorizar calidad sobre velocidad */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Reducida la opacidad del overlay */
            z-index: 1;
        }
        .background-images img {
            opacity: 0.9; /* Se mantuvo la opacidad */
            filter: blur(1.5px); /* Se redujo el desenfoque */
            transition: transform 2s ease-in-out;
            animation: moveImage 5s infinite alternate ease-in-out;
        }
        .background-images img:hover {
            transform: scale(1.1);
        }
        @keyframes moveImage {
            0% {
                transform: scale(1) translate(0, 0);
            }
            100% {
                transform: scale(1.1) translate(10px, 10px);
            }
        }
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
        }
        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            animation: fadeInDown 1s ease-in-out;
        }
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-weight: 300;
            animation: fadeInUp 1s ease-in-out;
        }
        .cover-image {
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
            margin-bottom: 1rem;
            transition: transform 0.5s ease;
        }
        .cover-image:hover {
            transform: translateY(-10px);
        }
        .btn-custom {
            padding: 12px 36px;
            font-size: 1.2rem;
            background-color: #ff6f61;
            border: none;
            border-radius: 50px;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #ff856c;
            color: #ffffff;
        }
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header class="hero-section">
        <div class="hero-overlay"></div>
        <div class="background-images position-absolute w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="Assets/img/Concentricos.png" alt="Imagen 1" class="bg-image bg-image1" style="width: 18%; position: absolute; top: 15%; left: 15%;">
            <img src="Assets/img/Ondass.png" alt="Imagen 2" class="bg-image bg-image2" style="width: 18%; position: absolute; top: 15%; right: 15%;">
            <img src="Assets/img/espejo.png" alt="Imagen 3" class="bg-image bg-image3" style="width: 18%; position: absolute; bottom: 15%; left: 15%;">
            <img src="Assets/img/espejo.png" alt="Imagen 4" class="bg-image bg-image4" style="width: 18%; position: absolute; bottom: 15%; right: 15%;">
        </div>
        <div class="hero-content">
            <h1 class="hero-title animate__animated animate__fadeInDown">Catalgo de obras de arte</h1>
            <a href="index.php?action=catalog" class="cover-link">
                <img src="Assets/img/Caminoalabufa.png" alt="Portada del Catálogo" class="cover-image img-fluid animate__animated animate__zoomIn">
            </a>
            <p class="hero-subtitle animate__animated animate__fadeInUp">Explora una colección exclusiva de obras de arte destacadas.</p>
            
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
