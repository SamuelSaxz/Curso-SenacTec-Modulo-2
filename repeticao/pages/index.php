<?php
require_once ('../class/Calc.php');
$calc = new Calc();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Repetição</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container m-5">
      <div class="row justify-content-center">
        <div class="col-8">

          <table class="table table-hover">
            <h1>Tabuada</h1>
            <thead class="table-primary">
              <tr>
                <th class='border border-white text-center table-primary'></th>
                <?php $calc->header(1, 10) ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class='text-center border table-primary'>1</td>
                <?php $calc->cols(1, 10, 1) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>2</td>
                <?php $calc->cols(1, 10, 2) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>3</td>
                <?php $calc->cols(1, 10, 3) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>4</td>
                <?php $calc->cols(1, 10, 4) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>5</td>
                <?php $calc->cols(1, 10, 5) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>6</td>
                <?php $calc->cols(1, 10, 6) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>7</td>
                <?php $calc->cols(1, 10, 7) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>8</td>
                <?php $calc->cols(1, 10, 8) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>9</td>
                <?php $calc->cols(1, 10, 9) ?>
              </tr>
              <tr>
              <td class='text-center border table-primary'>10</td>
                <?php $calc->cols(1, 10, 10) ?>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>