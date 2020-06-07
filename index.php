<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- 1 -->
    <link href="inc/dropzone-5.7.0/dist/dropzone.css" type="text/css" rel="stylesheet" />
     
    <!-- 2 -->
    <script src="inc/dropzone-5.7.0/dist/min/dropzone.min.js"></script>

    <title>Dashboard</title>

    <style>

      html,body {
         height: 100%;
      }

    </style>
  </head>
  <body>

    <div class="container-fluid h-100" style="margin-top: 80px;" >

         <div class="row justify-content-between border border-danger " style="height: 90px;">
            <div class="col-2 border border-black">
              <form role="search" class="bd-search d-flex align-items-center mt-4">
                <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" 
                  class="form-control ds-input" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off"
                  spellcheck="false" role="combobox" style="position: relative; vertical-align: top;">
                </span>
         
              </form>
            </div>
           
            <div class="col-4 p-0 border border-black">
              <h3 style="margin-left: 2px;">Login</h3>
               <form class="form-inline">
                  
                    
                  <div class="form-group m-1">
                    <label for="loginEmail" class="sr-only">Email</label>
                    <input type="email" class="form-control" id="loginEmail" placeholder="example@example.com" required="true">
                  </div>
                  <div class="form-group m-1">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password" required="true">
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
        </div>


       <div class="row justify-content-center h-100">
         <div class="col-8 border border-danger">
            <h2>Article name</h2>
            <p>Abstract:
            this article is brought to you by me as a placeholder in these troublesome times</p>
            <hr>
            <h2>Another article name</h2>
            <p>Abstract:
            whatg do you know...this is another article brought to you by me</p>
            <hr>
          </div>
           <div class="col-4 border border-danger">
            <!-- add style="display: none;" to not show this part until logged in -->
            Toto nebude vidiet kym nebude niekto prihlaseny...
            <div class="custom-file mt-3">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>

            <div id="dropzone" style="margin-top: 30px;">
              <form action="upload.php" class="dropzone needsclick dz-clickable" id="dropzone">
                
                <div class="dz-message needsclick">
                  <button type="button" class="dz-button">
                    Drop files here if you want to live                    
                  </button>
                </div>

              </form>
            </div>


           </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="inc/dropzone-5.7.0/dist"></script>
  </body>
</html>