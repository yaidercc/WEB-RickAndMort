

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Rick And Morty</title>
</head>
<body>
    <header class="site-header">
        <div class="container menu">
            <div class="logo">
                <h2>YCC</h2>
            </div>
            <div class="links">
                <a href="#" id="link-rick" class="lnk-api breadCumb">Rick & Morty</a>
                <a href="#" id="link-pokemon" class="lnk-api">Pokemon</a>
                <a href="#" class="lnk-api">Spotify</a>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="card-header">
            <h2 class="title">rick & morty</h2>
            <input type="search" placeholder="Buscar">
        </div>
        <div class="cards-container chargin"id="cards-container">
            <img src="loading.gif" alt="loading" id="loading">
        </div>
    </main>
    <script src="main.js"></script>
</body>
</html>