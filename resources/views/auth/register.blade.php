<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css" />

    <!-- jquery -->
    <script src="js/jquery.min.js"></script>

    <title>LegalKu</title>
  </head>
  <body>
    <section id="sign" class="login-regis">
      <div class="container menu">
        <div class="myCard">
          <div class="row">
            <div class="col">
              <div class="box-regis">
                <form class="myForm text-center" method="POST" action="{{ route('register') }}" enctype = "multipart/form-data">
                  @csrf
                  <header class="text-danger">Register</header>
                  <div class="form-group pb-3">
                    <i class="fas fa-user"></i>
                    <input class="myInput" placeholder="Name" type="text" id="Name" name="name" value="{{ old('name') }}" required />
                  </div>

                  <div class="form-group pb-3">
                    <i class="fas fa-envelope"></i>
                    <input class="myInput" placeholder="Email" type="text" id="email" name="email" value="{{ old('email') }}" required />
                  </div>

                  <!-- <div class="form-group pb-3">
                    <i class="fas fa-envelope"></i>
                    <input class="myInput" placeholder="Username" type="text" id="username" name="username" value="{{ old('username') }}" required />
                  </div> -->

                  <div class="form-group pb-3">
                    <i class="fas fa-lock"></i>
                    <input class="myInput" type="password" id="password" placeholder="Password" name="password" value="{{ old('password') }}" required />
                  </div>

                  <div class="form-group">
                    <i class="fas fa-lock"></i>
                    
                    <input class="myInput" type="password" id="password" placeholder="Password Confirmation" name="password_confirmation" required />
                  </div>
                  

                  <!-- <div class="avatar-upload py-5">
                    <div class="avatar-edit">
                      <div id="form-image">
                        <input type='file' id="photo" accept=".png, .jpg, .jpeg" />
                        <label for="photo"></label>
                      </div>
                    </div>
                    <div class="avatar-preview">
                      <img class="profile-user-img img-responsive img-circle" id="imagePreview" src="img/hdUser.png" alt="User profile picture">
                    </div>
                  </div> -->
                  <input type="hidden" name="photo" value="null">
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger mt-4">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- JS -->
    <script src="js/index.js"></script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/7f2ed2a5ac.js" crossorigin="anonymous"></script>
  </body>
</html>
