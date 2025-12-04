<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sessión</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('/assets/img/fondo.jpg') no-repeat center center/cover;
      position: relative;
      overflow: hidden;
    }

    /* Animación de entrada */
    @keyframes slideIn {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Caja vidrio */
    .glass {
      background: rgba(255, 255, 255, 0.1);
      border: 2px solid rgba(255, 255, 255, 0.3);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      padding: 40px 30px;
      width: 350px;
      color: #fff;
      box-shadow: 0 8px 32px rgba(0,0,0,0.37);
      text-align: center;
      animation: slideIn 0.8s ease-out;
    }

    .user-logo {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: block;
      border: 2px solid rgba(255, 255, 255, 0.5);
      padding: 5px;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      background: rgba(255,255,255,0.2);
    }

    .glass h2 {
      margin-bottom: 20px;
      font-size: 1.8rem;
      color: #fff;
    }

    .glass label {
      display: block;
      margin-bottom: 5px;
      font-weight: 500;
      text-align: left;
    }

    .input-box {
      position: relative;
      width: 100%;
    }

    .input-box svg {
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto 0;
      left: 12px;
      width: 22px;
      height: 22px;
      fill: white;
      opacity: 0.85;
      pointer-events: none;
    }

    .glass input {
      width: 100%;
      height: 45px;
      padding-left: 48px;
      padding-right: 12px;
      background: rgba(255, 255, 255, 0.2);
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 1rem;
      margin-bottom: 20px;
      display: block;
      line-height: 45px;
    }

    .glass input::placeholder {
      color: #eee;
    }

    /* Botón con efecto de onda */
    .glass button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.3);
      color: #fff;
      font-size: 1rem;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: background 0.3s ease;
    }

    .glass button:hover {
      background: rgba(255, 255, 255, 0.5);
    }

    .glass button::after {
      content: '';
      position: absolute;
      width: 20px;
      height: 20px;
      background: rgba(255, 255, 255, 0.4);
      border-radius: 50%;
      transform: scale(0);
      opacity: 0;
      pointer-events: none;
      animation: ripple 0.6s linear;
    }

    @keyframes ripple {
      to {
        transform: scale(10);
        opacity: 0;
      }
    }

    .errors {
      color: #ffcccc;
      margin-bottom: 15px;
      text-align: left;
    }
  </style>
</head>
<body>
  <div class="glass">

    <img src="assets/img/user.jpg" class="user-logo" alt="Usuario">

    <h2>Iniciar Sesión</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      @if ($errors->any())
        <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <label for="username">Usuario:</label>
      <div class="input-box">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="7" r="5"/>
          <path d="M12 14c-5 0-9 2.5-9 5v2h18v-2c0-2.5-4-5-9-5z"/>
        </svg>
        <input type="text" id="username" name="username" required placeholder="Ingresa tu usuario">
      </div>

      <label for="password">Contraseña:</label>
      <div class="input-box">
        <svg viewBox="0 0 24 24">
          <path d="M17 9h-1V7a4 4 0 10-8 0v2H7a2 2 0 00-2 2v9a2 2 0 002 2h10a2 2 0 002-2v-9a2 2 0 00-2-2zm-6 7a1 1 0 112 0 1 1 0 01-2 0zm3-7H10V7a2 2 0 114 0v2z"/>
        </svg>
        <input type="password" id="password" name="password" required placeholder="••••••••">
      </div>

      <button type="submit">Iniciar sesión</button>

    </form>
  </div>

  <script>
    // Efecto de "clic de cristal" para el botón
    const button = document.querySelector('.glass button');
    button.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      ripple.style.left = `${e.offsetX}px`;
      ripple.style.top = `${e.offsetY}px`;
      ripple.style.position = 'absolute';
      ripple.style.width = '20px';
      ripple.style.height = '20px';
      ripple.style.background = 'rgba(255,255,255,0.4)';
      ripple.style.borderRadius = '50%';
      ripple.style.transform = 'scale(0)';
      ripple.style.opacity = '1';
      ripple.style.pointerEvents = 'none';
      ripple.style.transition = 'transform 0.6s ease, opacity 0.6s ease';
      this.appendChild(ripple);

      requestAnimationFrame(() => {
        ripple.style.transform = 'scale(10)';
        ripple.style.opacity = '0';
      });

      setTimeout(() => ripple.remove(), 600);
    });
  </script>
</body>
</html>
