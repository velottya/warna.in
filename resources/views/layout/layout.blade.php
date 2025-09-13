<!DOCTYPE html>
<html lang="en">
<head>
	<title>Netral.in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    {{-- <script type="text/javascript">
        // Fungsi untuk menambahkan produk ke keranjang
        function addCart(id) {
            console.log('Product ID:', id); // Periksa apakah ID produk benar

            // Jalankan AJAX untuk menambahkan produk ke keranjang
            $.ajax({
                url: '{{ route("sentra.addCart") }}',
                type: 'post',
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {
                        window.location.href = '{{ route("sentra.cart") }}';
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = "Error: " + xhr.responseText;
                    alert(errorMessage);
                    // Menyalin pesan kesalahan ke clipboard
                    var tempInput = document.createElement("textarea");
                    tempInput.value = errorMessage;
                    document.body.appendChild(tempInput);
                    tempInput.select();
                    document.execCommand("copy");
                    document.body.removeChild(tempInput);
                    alert("Pesan kesalahan telah disalin ke clipboard.");
                }
            });
        }

        // Konfigurasi AJAX untuk menetapkan CSRF token
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script> --}}

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">Netral.in<span></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<szpan class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
                    @guest
					<li class="nav-item scrollto @yield('home')"> <a href="{{ route('guest.home') }}" class="nav-link">Home</a></li>
					<li class="nav-item scrollto @yield('materi')"> <a href="{{ route('guest.materi') }}" class="nav-link">Materi</a></li>
					<li class="nav-item scrollto @yield('quiz')"> <a href="{{ route('guest.quiz') }}" class="nav-link">Quiz</a></li>
					<li class="nav-item scrollto @yield('lab')"><a href="{{ route('guest.lab') }}" class="nav-link">Lab</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    @endguest

                    @if (Auth::check() && Auth::user()->role == 'user')
                    <li class="nav-item scrollto @yield('home')"> <a href="{{ route('home') }}" class="nav-link">Home</a></li>
					<li class="nav-item scrollto @yield('materi')"> <a href="{{ route('materi') }}" class="nav-link">Materi</a></li>
					<li class="nav-item scrollto @yield('quiz')"> <a href="{{ route('quiz') }}" class="nav-link">Quiz</a></li>
					<li class="nav-item scrollto @yield('lab')"><a href="{{ route('lab') }}" class="nav-link">Lab</a></li>
                    <li class="nav-item scrollto @yield('profile')"><a href="{{ route('profile.show') }}" class="nav-link">Account </a></li>
                    <li class="nav-item scrollto"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                    @endif

                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item scrollto"><a href="{{ route('dashboard') }}" class="nav-link">Admin</a></li>
                    @endif
                    </ul>
                </div>
		</div>
	</nav>

<!-- Floating Chatbot Button -->
<div id="chatbot-btn"
     style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;
            background: #FEC435; border-radius: 50%; width: 60px; height: 60px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; box-shadow: 0px 4px 6px rgba(0,0,0,0.2); overflow: hidden;">
    <img src="{{ asset('images/Frame2108.png') }}"
        alt="Chatbot"
        style="width: 70%; height: 70%; object-fit: contain; margin-top: 5px;">
</div>

<!-- Chatbot Overlay -->
<div id="chatbot-overlay"
     style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.6); display: none; z-index: 10000;
            align-items: center; justify-content: center;">

    <div style="background: #fff; width: 400px; height: 600px; border-radius: 12px;
                display: flex; flex-direction: column; overflow: hidden;">

        <!-- Header -->
        <div style="background: #FEC435; color: black; padding: 10px;
                    font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span>Chatbot</span>
            <button onclick="closeChatbot()" style="background: none; border: none; color: black; font-size: 18px; cursor: pointer;">✖</button>
        </div>

        <!-- Chat Messages -->
        <div id="chat-messages" style="flex: 1; padding: 10px; overflow-y: auto; background: #f5f5f5;">
            <!-- Chat content muncul disini -->
        </div>

        <!-- Input -->
        <div style="display: flex; border-top: 1px solid #ddd;">
            <input id="chat-input" type="text" placeholder="Tulis pesan..."
                   style="flex: 1; padding: 10px; border: none; outline: none;">
            <button onclick="sendMessage()"
                    style="padding: 10px 20px; background: #FEC435; color: black; border: none; cursor: pointer; font-weight: bold;">
                ➤
            </button>
        </div>
    </div>
</div>

<script>
    const chatbotBtn = document.getElementById('chatbot-btn');
    const chatbotOverlay = document.getElementById('chatbot-overlay');

    chatbotBtn.addEventListener('click', () => {
        chatbotOverlay.style.display = 'flex';
    });

    function closeChatbot() {
        chatbotOverlay.style.display = 'none';
    }

    function sendMessage() {
        let input = document.getElementById('chat-input');
        let message = input.value.trim();
        if (message === '') return;

        let messagesDiv = document.getElementById('chat-messages');

        // tampilkan pesan user (bubble kanan)
        messagesDiv.innerHTML += `
            <div style="display: flex; justify-content: flex-end; margin: 5px 0;">
                <div style="background: #FEC435; color: black; padding: 10px 15px; border-radius: 15px 15px 0 15px; max-width: 70%; word-wrap: break-word;">
                    ${message}
                </div>
            </div>
        `;
        input.value = '';
        messagesDiv.scrollTop = messagesDiv.scrollHeight;

        // panggil API Gemini di backend Laravel
        fetch('/chatbot', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ message })
        })
        .then(res => res.json())
        .then(data => {
            // parse markdown ke HTML
            let botReply = marked.parse(data.reply);

            messagesDiv.innerHTML += `
                <div style="display: flex; justify-content: flex-start; margin: 5px 0;">
                    <div style="background: #e0e0e0; color: black; padding: 10px 15px;
                                border-radius: 15px 15px 15px 0; max-width: 70%;
                                word-wrap: break-word;">
                        ${botReply}
                    </div>
                </div>
            `;
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>



	<!-- END nav -->

    @section('content')
    @show

<footer class="custom-footer">
  <div class="container footer-content">
    <!-- Kiri -->
    <div class="footer-left">
      <h2>Netral.in</h2>
      <p>
        Netral.in adalah platform belajar mata pelajaran Kimia khusus untuk materi Netralisasi.
        Siswa bisa belajar secara interaktif dan menyenangkan.
      </p>
    </div>

    <!-- Kanan -->
    <div class="footer-right">
      <h3>Menu</h3>
      <ul class="footer-menu">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('materi')}}">Materi</a></li>
        <li><a href="{{route('quiz')}}">Quiz</a></li>
        <li><a href="{{route('lab')}}">Lab</a></li>
      </ul>
    </div>
  </div>

  <!-- Copyright -->
  <br>
  <div class="footer-bottom">
    <p>© 2025 Theta. All Rights Reserved.</p>
  </div>

  <!-- Curve balok -->
  <div class="footer-curve"></div>
</footer>


        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/scrollax.min.js') }}"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->

    </body>
    </html>
