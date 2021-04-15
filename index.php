<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator Umur PHP</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <main>
      <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom text-center">
          <img
            src="https://www.svgrepo.com/show/121039/calculator-variant-with-hands-and-feet.svg"
            alt=""
            height="40px"
          />
          <!-- &nbsp; -->
          <span class="h4 font-monospace">Mari Hitung Berapa Usia Kamu!</span>
        </header>

        <div class="p-4 mb-4 bg-light border rounded-3">
          <div class="container-fluid">
            <form action="" method="POST">
              <div class="row mb-3">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label"
                  >Silakan masukkan tanggal lahir kalian</label
                >
                <div class="col-sm-8">
                  <input
                    type="datetime-local"
                    name="tanggal_lahir"
                    class="form-control"
                    id="tanggal_lahir"
                    value=""
                  />
                  <!-- <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="formc"> -->
                </div>
              </div>
              <div class="row mb-3">
                <label for="tanggal_today" class="col-sm-4 col-form-label"
                  >Silakan masukkan tanggal hari ini</label
                >
                <div class="col-sm-8">
                  <input
                    type="datetime-local"
                    name="tanggal_today"
                    class="form-control"
                    id="tanggal_today"
                    value=""
                  />
                </div>
              </div>
              <div class="row mb-3 text-center">
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-dark" name="submit">
                    Menghitung!
                  </button>
                </div>
              </div>
            </form>
            <p class="col-md-8 fs-4"></p>
          </div>
        </div>

        <div class="row align-items-md-stretch">
          <div class="col-md">
            <div class="h-100 p-3 bg-light border rounded-3">
              <div class="frame text-center">
                <span class="text-uppercase">Usia Kamu</span>
              </div>
              <?php 
                // Process Data
                if(isset($_POST['submit'])){
                    $lahir = new DateTime($_POST['tanggal_lahir']);
                    $today = new DateTime($_POST['tanggal_today']);
                    $res = date_diff($lahir, $today);

              echo'<div class="row my-3 text-center">';
                echo'<div class="col-sm">';
                  echo'<div class="card h-100 bg-light border-0 font-weight-bold">';
                    echo'<img
                      src="img/approved-sign-on-calendar-page.svg"
                      alt=""
                      class="card-img-top"
                      height="50px"
                    />';
                    echo'<div class="card-body">';
                      echo"<p class='card-text'>$res->y Tahun</p>";
                    echo'</div>';
                  echo'</div>';
                echo'</div>';
                echo'<div class="col-sm">';
                  echo'<div class="card h-100 bg-light border-0 font-weight-bold">';
                    echo'<img
                      src="img/calendar-spring-and-squares-interface-symbol.svg"
                      alt=""
                      class="card-img-top"
                      height="50px"
                    />';
                    echo'<div class="card-body">';
                      echo"<p class='card-text'>$res->m Bulan</p>";
                    echo'</div>';
                  echo'</div>';
                echo'</div>';
                echo'<div class="col-sm">';
                  echo'<div class="card h-100 bg-light border-0 font-weight-bold">';
                    echo'<img
                      src="img/calendar-page-with-circular-clock-symbol.svg"
                      alt=""
                      class="card-img-top"
                      height="50px"
                    />';
                    echo'<div class="card-body">';
                      echo"<p class='card-text'>$res->d Hari</p>";
                    echo'</div>';
                  echo'</div>';
                echo'</div>';
                echo'<div class="col-sm">';
                  echo'<div class="card h-100 bg-light border-0 font-weight-bold">';
                    echo'<img
                      src="img/clock.svg"
                      alt=""
                      class="card-img-top"
                      height="50px"
                    />';
                    echo'<div class="card-body">';
                      echo"<p class='card-text'>$res->h Jam</p>";
                    echo'</div>';
                  echo'</div>';
                echo'</div>';
                echo'<div class="col-sm">';
                  echo'<div class="card h-100 bg-light border-0 font-weight-bold">';
                    echo'<img
                      src="img/hourglass.svg"
                      alt=""
                      class="card-img-top"
                      height="50px"
                    />';
                    echo'<div class="card-body">';
                      echo"<p class='card-text'>$res->i Menit</p>";
                    echo'</div>';
                  echo'</div>';
                echo'</div>';
              echo'</div>';
            echo'</div>';
          echo'</div>';
              }
?>

        <footer class="pt-3 mt-4 text-muted border-top text-center">Copyright &copy; Kyuoko - <?= date("Y")?></footer>
      </div>
    </main>
  </body>
</html>
