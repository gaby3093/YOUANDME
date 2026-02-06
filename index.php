<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para Mi Persona Favorita ❤️</title>
    <style>
        :root {
            --color-primario: #ff4d6d;
            --color-secundario: #ff85a1;
            --color-fondo: #fff0f3;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            background: url("https://i.pinimg.com/1200x/0c/1c/ea/0c1cea77cbf48ec3d78e2f232124a88e.jpg") no-repeat center center fixed;

            background-size: cover;

            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .contenedor {
            text-align: center;
            /* Fondo blanco con transparencia (0.85) para que el paisaje se asome */
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            z-index: 10;
            position: relative;
            margin: 20px;
            backdrop-filter: blur(5px);
            /* Esto hace un efecto de vidrio empañado muy elegante */
        }

        /* CORAZONES FLOTANTES (NO AFECTAN EL LAYOUT) */
        .bg-corazon {
            position: fixed;
            /* 🔑 CLAVE */
            bottom: -30px;
            font-size: 24px;
            pointer-events: none;
            z-index: 1;
            animation: flotar linear forwards;
        }

        @keyframes flotar {
            from {
                transform: translateY(0);
                opacity: 1;
            }

            to {
                transform: translateY(-110vh);
                opacity: 0;
            }
        }

        /* TITULO */
        h1 {
            color: var(--color-primario);
            font-size: 32px;
            margin-bottom: 20px;
        }

        /* IMAGEN */
        .foto-placeholder img {
            width: 100%;
            max-width: 280px;
            border-radius: 15px;
            margin: 15px auto;
            display: block;
        }

        /* TEXTO */
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            margin-top: 20px;
            white-space: pre-line;
            /* respeta saltos de línea */
        }

        /* FIRMA */
        .contenedor div:last-child {
            font-weight: bold;
            color: var(--color-primario);
            margin-top: 25px;
        }

        /* MODAL */
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-contenido {
            background: white;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            max-width: 300px;
            width: 90%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            animation: aparecer 0.4s ease;
        }

        .modal-contenido h2 {
            color: var(--color-primario);
            margin-bottom: 10px;
        }

        .modal-contenido p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .modal-contenido button {
            background: var(--color-primario);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
        }

        .modal-contenido button:hover {
            background: var(--color-secundario);
        }

        @keyframes aparecer {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div id="modal-amor" class="modal">
        <div class="modal-contenido">
            <h2>💖 Pregunta importante 💖</h2>
            <p>¿Me amas mucho?</p>
            <button id="btn-si">Sí ❤️</button>
        </div>
    </div>

    <div class="contenedor">
        <div class="corazon">❤️</div>
        <h1>¡Feliz Día, Amor!</h1>

        <div class="foto-placeholder">
            <img src="/foto.jpg" alt="Nuestra Foto">
        </div>

        <p>
            Mi querido amor,

            En este 14 de febrero, quiero recordarte lo mucho que significas para mí. Aunque intento demostrarlo cada día, quiero aprovechar este momento para poner en palabras lo que a veces es difícil de decir con la profundidad que siento.

            Eres esa persona que llegó a mi vida y la llenó de colores, de sonrisas y de amor. Desde que te conocí, todo ha sido más hermoso, más brillante y tiene más significado. A tu lado, cada día se convierte en una aventura, y cada instante se vuelve único y especial.

            Quiero agradecerte por ser tú, por todas las pequeñas cosas que haces y que quizás no siempre menciono. Gracias por cada abrazo, cada palabra de apoyo y cada risa compartida. Eres mi refugio y mi alegría, y no hay lugar en el mundo donde prefiera estar que a tu lado.

            ¡Te amo! ¡Feliz San Valentín!
        </p>

        <div style="font-weight: bold; color: #ff4d6d; margin-top: 20px;">
            Atentamente: Gabriela
        </div>
    </div>

    <audio id="musica" loop preload="auto">
        <source src="/eres-mi-sueño.mp3" type="audio/mpeg">
    </audio>

    <script>
        // Generador de corazones flotantes
        function crearCorazon() {
            const corazon = document.createElement('div');
            corazon.classList.add('bg-corazon');
            corazon.innerHTML = '❤️';
            corazon.style.left = Math.random() * 100 + 'vw';
            corazon.style.animationDuration = Math.random() * 3 + 2 + 's';
            corazon.style.opacity = Math.random();
            document.body.appendChild(corazon);

            setTimeout(() => {
                corazon.remove();
            }, 5000);
        }

        setInterval(crearCorazon, 300);
    </script>
    <script>
        const modal = document.getElementById("modal-amor");
        const botonSi = document.getElementById("btn-si");
        const musica = document.getElementById("musica");

        botonSi.addEventListener("click", () => {
            modal.style.display = "none";
            musica.volume = 0.1; // volumen suave
            musica.play().catch(error => {
                console.log("El navegador bloqueó el audio:", error);
            });
        });
    </script>
    <script>
        botonSi.addEventListener("click", () => {
            modal.style.display = "none";
            musica.volume = 0;
            musica.play();

            let vol = 0;
            const fade = setInterval(() => {
                if (vol < 0.3) {
                    vol += 0.02;
                    musica.volume = vol;
                } else {
                    clearInterval(fade);
                }
            }, 200);
        });
    </script>

</body>


</html>
