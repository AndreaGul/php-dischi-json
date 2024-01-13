<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dischi</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- foglio di stile -->
  <link rel="stylesheet" href="src/css/style.css" />
</head>

<body class="ag-bg-color">
  <div id="app">
    <main>
      <div class="container text-white">
        <ul class=" list-disc row g-5  m-2 list-unstyled ">
          <li class="col-12 col-sm-6 col-lg-4  text-center " v-for="(disc, idex) in discs">
            <div class="ag-bg-card-color py-3 px-4 h-100 rounded">
              <img v-bind:src="disc.img" class="container-fluid" alt="">
              <h3 class="mt-3">{{disc.title}}</h3>

            </div>

          </li>
        </ul>

      </div>
    </main>


  </div>

  <!-- vue js -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <!-- main js -->
  <script src="src/js/main.js"></script>
</body>

</html>