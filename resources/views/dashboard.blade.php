<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        {
    margin: 0;
    padding: 0;
}

body{
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(120deg, #5b447c 40%, #3a506b 100%);
    font-family: 'Segoe UI', Verdana, Geneva, Tahoma, sans-serif;
}

.container{
    display: flex;
    background-color: rgba(91, 68, 124, 0.95);
    justify-content: space-between;
    align-items: center;
    color: white;
    padding: 1.2rem 2rem;
    border-radius: 0 0 18px 18px;
    box-shadow: 0 4px 18px rgba(44,62,80,0.13);
}

nav ul{
    padding: 1rem;
    gap: 2rem;
    align-items: center;
    display: flex;
    text-align: center;
    list-style: none;
    text-decoration: none;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    font-size: 1.1rem;
    padding: 8px 18px;
    border-radius: 8px;
    transition: background 0.2s, color 0.2s;
}

nav ul li a:hover {
    background: #fff;
    color: #5b447c;
    box-shadow: 0 2px 8px rgba(44,62,80,0.09);
}

a{
    color: white;
    transition: color 0.2s;
}

a:hover {
    color: #f7b32b;
}

.menu-toggle {
    position: fixed;
    top: 18px;
    left: 18px;
    font-size: 2.2rem;
    color: #fff;
    background: #5b447c;
    border-radius: 8px;
    padding: 6px 14px;
    cursor: pointer;
    z-index: 100;
    box-shadow: 0 2px 8px rgba(44,62,80,0.09);
    transition: background 0.2s;
}
.menu-toggle:hover {
    background: #f7b32b;
    color: #5b447c;
}

nav.show {
    left: 0;
    transition: left 0.3s;
}

.gambar {
    margin-left: 33px;
    width: 440px;
    max-width: 90vw;
    height: auto;
    border-radius: 18px;
    box-shadow: 0 4px 18px rgba(44,62,80,0.18);
    position: absolute;
    top: 120px;
    left: 40px;
}

.paragraft {
    position: absolute;
    right: 50px;
    top: 150px;
    background-color: rgba(84, 101, 115, 0.95);
    width: 340px;
    max-width: 90vw;
    padding: 1.2rem 1.5rem;
    color: aliceblue;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 1.05rem;
    text-align: right;
    border-radius: 14px;
    box-shadow: 0 2px 12px rgba(44,62,80,0.13);
}

@media (max-width: 900px) {
    .gambar {
        position: static;
        display: block;
        margin: 2rem auto 1rem auto;
        left: unset;
        top: unset;
        width: 80vw;
        max-width: 400px;
    }
    .paragraft {
        position: static;
        margin: 2rem auto;
        width: 90vw;
        text-align: justify;
        font-size: 0.98rem;
    }
    .container {
        flex-direction: column;
        gap: 0.5rem;
        text-align: center;
    }
}

@media (max-width: 600px) {
    .container {
        padding: 0.7rem 0.5rem;
    }
    .menu-toggle {
        font-size: 1.5rem;
        padding: 4px 10px;
    }
    .paragraft {
        padding: 0.7rem 0.7rem;
        font-size: 0.92rem;
    }
}



    </style>
</head>
<body>
     <nav id="nav-menu">
        <div class="container">
            <h1>Scarawrmouche</h1>
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">More Info</a></li>
                <li><a href="#">Merchandise</a></li>
            </ul>
        </div>
    </nav>

     <main>
      <section class="hero-section">
        <img src="{{ asset('img/wawan.png') }}"class="gambar" alt="Scaramouche">
        <div class="paragraft">
            <p><strong>Scaramouche</strong>, also known as <em>Kunikuzushi</em> (Japanese: 国崩) and by his codename <b>The Balladeer</b>, was the Sixth of the Eleven Fatui Harbingers.</p>
            <p>Scaramouche is a puppet created by Raiden Ei who appears as a minor antagonist throughout the game, becoming a major antagonist in Sumeru as Shouki no Kami.</p>
            <p>Following his defeat and learning the truth of the Tatarasuna Incident, he erases his existence from the Irminsul and becomes the Wanderer.</p>
        </div>
      </section>
    </main>

</body>
</html>