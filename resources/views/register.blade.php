<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50" >
            <div class="card-header bg-info d-flex justify-content-center">
                <strong>Form <span class="text-align text-light">Register</span></strong>
            </div>
            <div class="card-body">
                <form action="/simpan" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        {{-- <i class="bi bi-person-circle"></i> --}}
                        <input  type="text" name="name" class="form-control" placeholder="Masukan Nama" value=""  required>
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="" required>
                    </div>
                    <div class="form-group">
                        <label>Password </label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" value="" required>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                       <button class="btn btn-outline-primary" class="" type="submit">Sign-UP</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>