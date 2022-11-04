<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ministerio de Asienda</title>
  </head>
  <body style="background-color: rgb(30, 29, 29)" >
    <div class="container my-5">
      <h1 class="text-white">Paquetes de aduana</h1>
      <div id="sensores my-5">
        {{-- CONTENIDO AQUI --}}
      </div>
      <table id="wilkin" class="table table-dark table-striped">
          <thead>
              <tr>
                  <td>id</td>
                  <td>Tamaño</td>
                  <td>Peso</td>
                  <td>Sensor</td>
                  <td>Origen</td>
                  <td>Destino</td>
                  <td>Fecha</td>
                  <td>Hora - actualizada</td>
              </tr>
          </thead>
          <tbody id="filas">
          </tbody>
      </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<script>const base_url = "{!! env('APP_URL') !!}" </script>
    <script src="{{asset('js/paquetes.js')}}"></script>
  </body>
</html>