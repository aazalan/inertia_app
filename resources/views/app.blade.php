<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    <section class="p-8">
      <div id="app" data-page="{{ json_encode($page) }}"></div>
    </section>
  </body>
</html>
