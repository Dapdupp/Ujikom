<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Jedag Jedug</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <style type="text/tailwindcss">
    @layer utilities {
      .shadow-neon {
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 102, 0, 0.8);
      }

      .animate-pop {
        animation: pop 0.5s ease-out forwards;
      }

      .animate-pulse-slow {
        animation: pulse 2s infinite;
      }

      @keyframes pop {
        0% {
          transform: scale(0.7);
          opacity: 0;
        }
        100% {
          transform: scale(1);
          opacity: 1;
        }
      }
    }

    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-orange-600 via-pink-500 to-yellow-400 min-h-screen flex items-center justify-center animate-pulse-slow">

  <div class="bg-white/90 backdrop-blur-lg p-8 rounded-3xl shadow-neon w-full max-w-md animate-pop text-center">
    <h2 class="text-3xl font-bold text-orange-600 mb-6 animate-bounce">🔥 Login Dulu Bro!</h2>

    <form action="/login" method="POST" class="space-y-5">

      <div>
        <input
          type="email"
          name="email"
          placeholder="Email kamu..."
          class="w-full px-4 py-3 rounded-xl border-2 border-orange-300 focus:ring-4 focus:ring-orange-500 focus:outline-none transition-all"
          required />
      </div>

      <div>
        <input
          type="password"
          name="password"
          placeholder="Password rahasia..."
          class="w-full px-4 py-3 rounded-xl border-2 border-orange-300 focus:ring-4 focus:ring-orange-500 focus:outline-none transition-all"
          required />
      </div>

      <button
        type="submit"
        class="w-full py-3 bg-gradient-to-r from-orange-500 to-pink-500 text-white font-semibold rounded-xl hover:scale-105 hover:shadow-neon transition-all duration-300 ease-in-out">
        💥 Login Sekarang
      </button>
    </form>
  </div>
</body>

</html>