 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container" style="margin-top: 100px; margin-left: 50px;">

        <h1 align="center">Register</h1>
      
      <div class="row justify-content-around">

        <div class="col-4">
          <form class="mt-3">

            <div class="form-group">
              <label for="registerEmail">Email address</label>
              <input type="email" class="form-control" id="registerEmail" placeholder="name@example.com" required="true">
            </div>

            <div class="form-group mt-2">
              <label for="registerPassword">Password</label>
              <input type="password" class="form-control" id="registerPassword" aria-describedby="passwordHelpBlock" required="true">
              <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
            </div>

            <div class="form-group mt-2">
              <label for="repeatPassword">Repeat password</label>
              <input type="password" class="form-control" id="repeatPassword" required="true">
            </div>
            
            <button type="submit" class="btn btn-primary" id="registerButton">Submit</button>
        </form>
      
        </div>    
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>