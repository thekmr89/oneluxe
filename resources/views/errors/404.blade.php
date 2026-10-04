<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title> 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #77a3ab;
            --eye-pupil-color: #050505;
            --bg-color: #f8f9fc;
            --text-color: #1a1a2e;
            --fs-heading: 36px;
            --fs-text: 26px;
            --fs-button: 18px;
            --fs-icon: 30px;
            --pupil-size: 30px;
            --eye-size: 80px;
            --button-padding: 15px 30px;
            --glass-bg: rgba(255, 255, 255, 0.7);
            --glass-border: rgba(255, 255, 255, 0.9);
        }

        @media only screen and (max-width: 567px) {
            :root {
                --fs-heading: 30px;
                --fs-text: 22px;
                --fs-button: 16px;
                --fs-icon: 24px;
                --button-padding: 12px 24px;
            }
        }

        body {
            display: flex;
            min-height: 100vh;
            background-image: url(https://oneluxe.in/public/images/home/Itineraries-Home-scaled.jpg);
            color: var(--text-color);
            overflow-x: hidden;
            position: relative;
            overflow-x: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Futura Book' !important;
        }

         

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 30px;
            text-align: center;
        }

        .error-page {
            margin: auto;
            position: relative;
            z-index: 1;
        }

        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 48px 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08);
            animation: cardIn 0.6s ease-out forwards;
        }
          


        @keyframes cardIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-code {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(0.25rem, 2vw, 0.5rem);
            font-size: clamp(4rem, 12vw, 5rem);
            font-weight: 700;
            letter-spacing: -0.03em;
            color: var(--primary-color);
            margin-bottom: 0px;
            opacity: 0;
            animation: fadeUp 0.5s ease-out 0.2s forwards;
        }

        .error-code__digit {
            line-height: 1;
        }

        .error-code .eyes {
            flex-shrink: 0;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-page__heading-title {
            text-transform: capitalize;
            font-size: var(--fs-heading);
            font-weight: 500;
            color: var(--text-color);
            opacity: 0;
            animation: fadeUp 0.5s ease-out 0.35s forwards;
        }

        .error-page__heading-description {
            margin-top: 10px;
            font-size: var(--fs-text);
            font-weight: 200;
            color: #64748b;
            opacity: 0;
            animation: fadeUp 0.5s ease-out 0.45s forwards;
        }

        .error-page__button {
            color: inherit;
            text-decoration: none;
            border: 2px solid var(--primary-color);
            font-size: var(--fs-button);
            font-weight: 500;
            padding: var(--button-padding);
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease, color 0.2s ease;
            text-transform: capitalize;
            opacity: 0;
            animation: fadeUp 0.5s ease-out 0.55s forwards;
        }

        .error-page__button:hover {
            background-color: var(--primary-color);
            color: #fff;
            transform: translateY(-2px);

        }

        .eyes {
            display: flex;
            justify-content: center;
            gap: 2px;
            opacity: 0;
            animation: fadeUp 0.5s ease-out 0.1s forwards;
        }

        .eye {
            width: var(--eye-size);
            height: var(--eye-size);
            background-color: var(--primary-color);
            border-radius: 50%;
            display: grid;
            place-items: center;
            position: relative;
            overflow: hidden;
        }

        .eye__pupil {
            width: var(--pupil-size);
            height: var(--pupil-size);
            background-color: var(--eye-pupil-color);
            border-radius: 50%;
            transform-origin: center center;
            transition: transform 0.08s ease-out;
            animation: movePupil 3s infinite ease-in-out;
        }

        .eyes--hover .eye__pupil {
            animation: none;
        }

        @keyframes movePupil {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(-10px, -10px); }
            50% { transform: translate(10px, 10px); }
            75% { transform: translate(-10px, 10px); }
        }

        .color-switcher {
            position: fixed;
            top: 40px;
            right: 40px;
            background-color: transparent;
            font-size: var(--fs-icon);
            cursor: pointer;
            color: var(--primary-color);
            border: 0;
        }
    </style>
</head>
<body>
    <main class="error-page">
        <div class="card">
          <div class="container">
          <div class="error-code">
            <span class="error-code__digit">4</span>
            <div class="eyes">
              <div class="eye">
                <div class="eye__pupil eye__pupil--left"></div>
              </div> 
            </div>
            <span class="error-code__digit">4</span>
          </div>
      
          <div class="error-page__heading">
            <h1 class="error-page__heading-title">Oops! Page Not Found</h1> 
          </div>
      
          <a class="error-page__button" href="./" aria-label="back to home" title="back to home">Back to home</a>
        </div>
        </div>
    </main>

    <script>
        (function () {
            var eyesEl = document.querySelector(".eyes");
            var eyes = document.querySelectorAll(".eye");
            var maxMove = 10;

            function setPupils(x, y) {
                eyes.forEach(function (eye) {
                    var rect = eye.getBoundingClientRect();
                    var cx = rect.left + rect.width / 2;
                    var cy = rect.top + rect.height / 2;
                    var dx = x - cx;
                    var dy = y - cy;
                    var dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist > maxMove) {
                        dx = (dx / dist) * maxMove;
                        dy = (dy / dist) * maxMove;
                    }
                    var pupil = eye.querySelector(".eye__pupil");
                    if (pupil) pupil.style.transform = "translate(" + dx + "px, " + dy + "px)";
                });
            }

            function resetPupils() {
                eyes.forEach(function (eye) {
                    var pupil = eye.querySelector(".eye__pupil");
                    if (pupil) pupil.style.transform = "";
                });
                eyesEl.classList.remove("eyes--hover");
            }

            eyesEl.addEventListener("mouseenter", function () {
                eyesEl.classList.add("eyes--hover");
            });
            eyesEl.addEventListener("mousemove", function (e) {
                setPupils(e.clientX, e.clientY);
            });
            eyesEl.addEventListener("mouseleave", function () {
                resetPupils();
            });
        })();
    </script>
</body>
</html>
