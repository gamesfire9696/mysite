<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en" class="">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies and Lives</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/tailwind.output.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer=""></script>
        <script src="/assets/js/init-alpine.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer=""></script>
        <script src="/assets/js/charts-lines.js" defer=""></script>
        <script src="/assets/js/charts-pie.js" defer=""></script>
        <script src="/assets/js/charts-bars.js" defer=""></script>
        <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        @livewireStyles
  </head>

  <body>

    {{$slot}}
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming/dist/videojs-http-streaming.js"></script>
    
    <script>
      var player = videojs('my_video_1');
    </script>
    @livewireScripts
  </body>
</html>