<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Reservasi Hotel | Admin</title>
        <link
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet"
        />
        <link rel="stylesheet" href="{{'./assets/css/tailwind.output.css'}}" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{'./assets/js/init-alpine.j'}}s"></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
        />
        <script
          src="{{'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js'}}"
          defer
        ></script>
        <script src="{{'./assets/js/charts-lines.js'}}" defer></script>
        <script src="{{'./assets/js/charts-pie.js'}}" defer></script>
        @vite('assets/css/app.css')
    </head>
  <body>
    <div class="flex h-full h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen}">
    