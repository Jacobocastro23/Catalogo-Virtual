<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras de Arte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://animate.style/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Efecto de desvanecimiento al cargar la página */
        body {
            opacity: 0;
            transition: opacity 2s ease-in;
            background: linear-gradient(to bottom, #1a1a1a, #333) no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            padding-top: 80px;
            margin: 0;
        }

        body.loaded {
            opacity: 1;
        }

        header {
            text-align: center;
            padding: 60px 0;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.8);
            position: relative;
            z-index: 1000;
            animation: headerAnimation 2s ease-in-out;
        }

        @keyframes headerAnimation {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        header h1 {
            font-size: 4.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 6px;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8);
            animation: textAnimation 2s ease-in-out;
        }

        @keyframes textAnimation {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        header i.art-icon {
            font-size: 6rem;
            color: #fff;
            margin-bottom: 20px;
            animation: pulse 2s infinite, fadeIn 3s ease-in;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .btn-home {
            position: fixed;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background-color: #ff6f61;
            border: none;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            transition: background-color 0.3s ease;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        .btn-home:hover {
            background-color: #e55b4e;
        }

        .btn-home i {
            font-size: 26px;
            color: #fff;
        }

        .container {
            max-width: 1200px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .col-md-4 {
            flex: 1 1 30%;
            max-width: 30%;
            margin-bottom: 30px;
            animation: zoomIn 1s ease-in;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .frame {
            background: #333;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.8);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            height: 100%;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s ease-in;
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .frame:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.9);
        }

        .card-img-wrapper {
            width: 100%;
            height: 300px;
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: 15px;
            position: relative;
            border: 2px solid #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
            transition: transform 0.5s ease;
        }

        .card-img-wrapper:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            transition: transform 0.5s ease-in-out;
            object-fit: cover;
        }

        .card-img-top:hover {
            transform: scale(1.1);
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 15px 0;
            color: #fff;
            text-transform: uppercase;
        }

        .card-description {
            font-size: 1.15rem;
            color: #ddd;
            margin-bottom: 10px;
        }

        footer {
            margin-top: 50px;
            padding: 40px 0;
            text-align: center;
            background-color: #111;
            color: #fff;
            border-top: 4px solid #ff6f61;
        }

        footer .social-icons a {
            color: #ff6f61;
            font-size: 28px;
            margin: 0 15px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        footer .social-icons a:hover {
            color: #fff;
            transform: scale(1.1);
        }

        .btn-primary {
            background-color: #ff6f61;
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.3rem;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e55b4e;
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <header>
        <a href="home.php" class="btn btn-home"><i class="fas fa-home"></i></a>
        <i class="fas fa-palette art-icon"></i>
        <h1>Obras de Arte</h1>
    </header>

    <main class="container">
        <div class="row">
            <?php if (empty($artworks)): ?>
                <div class="alert alert-info text-center" role="alert">
                    No hay obras disponibles.
                </div>
            <?php else: ?>
                <?php foreach ($artworks as $artwork): ?>
                    <div class="col-md-4">
                        <div class="frame animate__animated animate__fadeIn">
                            <div class="card-img-wrapper">
                                <img src="assets/img/<?php echo htmlspecialchars($artwork['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($artwork['name']); ?>">
                            </div>
                            <h5 class="card-title"><?php echo htmlspecialchars($artwork['name']); ?></h5>
                            <p class="card-description"><strong>Artista:</strong> <?php echo htmlspecialchars($artwork['artist']); ?></p>
                            <p class="card-description"><strong>Año:</strong> <?php echo htmlspecialchars($artwork['year']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="text-center mt-4">
            <a href="generate_pdf.php" class="btn btn-primary btn-lg"><i class="fas fa-download"></i> Descargar en PDF</a>
        </div>
    </main>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>

</html>
