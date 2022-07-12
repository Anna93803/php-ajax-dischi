
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <title>Disk2</title>
    </head>
    <body>
        <div id="app">
            <nav>
                <div class="logo">
                    <img src="../img/logo-small.svg" alt="">
                </div>
            </nav>
            <main>
                <div class="bg-main">
                    <div class="container">
                        <div class="bg-card">
                            <div class="card" v-for="disco in arrayList">
                                <img src="disco.poster" alt="">
                                <h4>{{ disco.title }}</h4>
                                <p>{{ disco.author }}</p>
                                <p>{{ disco.genre }}</p>
                                <small>{{ disco.year }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script src="./main.js"></script>
    </body>
</html>