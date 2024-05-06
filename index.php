<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="my-bg">
    <div id="app">
    <nav class="navbar">
            <a class="navbar-brand" href="#">
                <img src="img/Spotify_logo_without_text.svg.png" alt="Bootstrap" width="50" height="50">
            </a>
    </nav>
        <div class="container">

            <div class="row row-cols-3 lg-3">
                <div v-for="disk in disks">
                    <div class="card my-2" style="width: 19rem;">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ disk.title }}</h5>
                            <p class="card-text">{{disk.author}}</p>
                            <p class="card-text fw-bolder">{{disk.year}}</p> 
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    
    <script src="js/script.js"></script>
</body>
</html>