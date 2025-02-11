<!doctype html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--title of the web page on the tab of the browser--}}
    <title>My Portfolio</title>

    {{--asset binding--}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

{{--start of the navbar --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">I</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{--end of the navbar--}}

{{--header of the page with photo--}}
<header class="container">
    <h1 class="text-center">My Portfolio</h1>
    <div class="row">
        <div class="col-12 d-flex justify-center">
            <div class="">
                <img src="./images/ME.jpeg" class="img-me">
            </div>
            <div class="ms-2 mt-1 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur cumque dolorem doloribus ex illum impedit laborum necessitatibus, neque provident qui quibusdam recusandae sed sit tempora. Maiores non officia vel.
                </p>
            </div>
        </div>
    </div>
</header>
{{--end of the header page--}}

{{--start of the main section of the website, with header, content and footer--}}
<div class="timeline">
    <div class="event" data-year="2025">
        <div class="event-content">
            <h3>2025</h3>
            <p>Descrizione dell'evento per l'anno 2025.</p>
        </div>
    </div>
    <div class="event" data-year="2024">
        <div class="event-content">
            <h3>2024</h3>
            <p>Descrizione dell'evento per l'anno 2024.</p>
        </div>
    </div>
    <div class="event" data-year="2023">
        <div class="event-content">
            <h3>2023</h3>
            <p>Descrizione dell'evento per l'anno 2023.</p>
        </div>
    </div>
    <!-- Aggiungi più eventi qui per testare -->
</div>
</body>

</html>

