<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Password</title>
</head>
<body>
  <main>
    <div class="container rounded p-5">
        <div class="text-center text-light">
            <h1>Strong Password Generator</h1>
            <h3>Genera una password sicura</h3>
        </div class="text-center">
          <form>
            <div class="m-5 text-info text-info">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nessun parametro valido inserito" >
            </div>
          </form>
          <div class="container-small d-flex  ">
            <div class="left-side bg-light  p-3">
              <p>Lunghezza password</p>
              <p>Consenti ripetizioni di uno o piu caratteri:</p>
              <div class="mt-5 mb-3">
                <button type="button" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Anulla</button>

              </div>

            </div>
            <div class="right-side bg-light p-3 ">
              <input type="text mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                   SI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    NO
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Letteri
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Numeri
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                      Simboli
                  </label>
                </div>
                

            </div>
          </div>
        </div>
      </main>
    </body>
    </html>
          
            
            
  
