<title>{{ env('APP_NAME') . ' - '  . ($page_title ?? '') }} </title>
    <meta charset="utf-8">
    <meta name="description"
        content="A minimal and responsive HTML5 landing page built on lightweight, clean and customizable code.">
    <meta name="viewport" content="width=device-width">
    <link rel="apple-touch-icon-precomposed" href="media/favicon.png">
    <link rel="icon" href="media/favicon.png">
    <link rel="mask-icon" href="media/favicon.svg" color="rgb(36,38,58)">
    <link rel="shortcut icon" href="media/favicon.png">
    <link rel="stylesheet" href="css/main.css">
    @yield('style.css')