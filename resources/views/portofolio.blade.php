<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Press+Start+2P&display=swap" rel="stylesheet">
    

</head>
<body>
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div>
                <h1 class="hero-title">
                    <span class="script-letter">M</span><span class="pixel-text">eet the Artist</span>
                     <span class="kaomoji">(˶˃ ᵕ ˂˶)</span>
                </h1>

            <p>HIIII, my name is kell. im a self taught artist :0. ipx user since 2017!!!</p>
        </div>
                
        
    </section>

    <!-- Artwork Showcase -->
    <section id="showcase" class="showcase">
        <div class="container">
            <h2>Artwork Showcase</h2>
            <div class="category-nav">
                <button class="category-btn active" data-category="all">All</button>
                <button class="category-btn" data-category="Fanart">Fanart</button>
                <button class="category-btn" data-category="Original Characters">Original Characters</button>
                <button class="category-btn" data-category="3D Assets / Environment">3D Assets / Environment</button>
            </div>
            <div class="artwork-grid">
                @foreach($artworks as $artwork)
                <div class="artwork-item" data-id="{{ $artwork['id'] }}" data-title="{{ $artwork['title'] }}" data-description="{{ $artwork['description'] }}" data-year="{{ $artwork['year'] }}" data-tools="{{ $artwork['tools'] }}" data-img="{{ $artwork['img'] }}" data-category="{{ $artwork['category'] }}">
                    <div class="artwork-placeholder">
                        <img src="{{ asset($artwork['img']) }}" alt="{{ $artwork['title'] }}">
                    </div>

                    <h3>{{ $artwork['title'] }}</h3>
                </div>
                @endforeach
            </div>
           
        </div>
    </section>

    <!-- Modal for Artwork Details -->
    <div id="artwork-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modal-image" src="" alt="Artwork">
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
            <p><strong>Year:</strong> <span id="modal-year"></span></p>
            <p><strong>Tools:</strong> <span id="modal-tools"></span></p>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="contact-list">
                <div class="contact-item">
                    <a href="https://www.instagram.com/scarawrmouche?igsh=cmZpMWExOXVvdmQ1" target="_blank">📁 Instagram</a>
                </div>
                <div class="contact-item">
                    <a href="https://x.com/Shiinakitchen" target="_blank">📁 Twitter/X</a>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
