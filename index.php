

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My little Flower Shop</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  
    </head>
  <body>
  
 <!-- Start nav -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#"> My Little Flower Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">All</a>
          <a class="dropdown-item" href="#">Holiday Selections</a>
          <a class="dropdown-item" href="#">Limtied Time Selection</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>

        <!-- end nav-->

        <!-- Inserting images -->
        
        <div id="background-image">
          
        </div>
        <div class="container">
          <div class="row">

            <div class="col-md-2"></div>

       

              <div class=" card col-md-3 mt-4">
                  <div style="height: 170px; overflow:hidden;">
                  
                    <img src="images/rose.jpg" alt="red rose" id="images"  />
                  </div>
                
                  <div class="card-body">
                 
                   
                    <p class="list-price text-data-danger">List Price: <s>$24.99</s></p>
                    <p class="price">Our Price: $19.99</p>
                
                    <h4>Red Roses</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/yellowrose.jpg" alt="yellow rose" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Yellow Rose</h2>
                    <p class="list-price text-data-danger">List Price: <s>$49.99</s></p>
                    <p class="price">Our Price: $39.99</p>
                
                    <h4>Yellow Roses</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/pinkrose.jpg" alt="yellow rose" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">PinkRose</h2>
                    <p class="list-price text-data-danger">List Price: <s>$49.99</s></p>
                    <p class="price">Our Price: $29.99</p>
                
                    <h4>Pink Roses</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
                  </div>

              </div>
              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/lily.jpg" alt="yellow rose" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Lily</h2>
                    <p class="list-price text-data-danger">List Price: <s>$14.99</s></p>
                    <p class="price">Our Price: $12.99</p>
                
                    <h4>Lily</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/vase1.jpg" alt="vase" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Vase</h2>
                    <p class="list-price text-data-danger">List Price: <s>$32.99</s></p>
                    <p class="price">Our Price: $29.99</p>
                
                    <h4>Vase</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/vase2.jpg" alt="vase2" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Vase 2</h2>
                    <p class="list-price text-data-danger">List Price: <s>$59.99</s></p>
                    <p class="price">Our Price: $49.99</p>
                
                    <h4>Vase 2</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/vase3.jpg" alt="vase3" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Vase 3</h2>
                    <p class="list-price text-data-danger">List Price: <s>$19.99</s></p>
                    <p class="price">Our Price: $10.99</p>
                
                    <h4>Vase 3</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
                  </div>

              </div>

              <div class="card col-md-3 mt-4">
                  <div style="height: 170px;">
                    <img src="images/vase4.jpg" alt="vase 4" id="images"  />
                  </div>
                
                  <div class="card-body">
                    <h2 class="text-center">Vase 4</h2>
                    <p class="list-price text-data-danger">List Price: <s>$37.99</s></p>
                    <p class="price">Our Price: $24.99</p>
                
                    <h4>Vase 4</h4>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
                  </div>

              </div>
              



          </div>
        </div>
          


        <!-- <div class ="col-md-3">
          <h4> Roses </h4>
          <img src="images/rose.jpg" alt="Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$40.99</s></p>
          <p class ="price">Our Price:$25.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          

          <div class ="col-md-3">
          <h4> Yellow Roses </h4>
          <img src="images/yellowrose.jpg" alt="Yellow Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$44.99</s></p>
          <p class ="price">Our Price:$26.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          
          <div class ="col-md-3">
          <h4> Pink Roses </h4>
          <img src="images/pinkrose.jpg" alt="Pink Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$9.99</s></p>
          <p class ="price">Our Price:$5.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          </div>

          <div class ="col-md-3">
          <h4> Lily </h4>
          <img src="images/lily.jpg" alt="Lily's" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$15.99</s></p>
          <p class ="price">Our Price:$9.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          </div>

          <div class ="col-md-3">
          <h4> Vase 1 </h4>
          <img src="images/vase1.jpg" alt="Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$40.99</s></p>
          <p class ="price">Our Price:$25.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          </div>

          <div class ="col-md-3">
          <h4> Vase 2 </h4>
          <img src="images/vase2.jpg" alt="Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$40.99</s></p>
          <p class ="price">Our Price:$25.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          </div>

          <div class ="col-md-3">
          <h4> Vase 3 </h4>
          <img src="images/vase3.jpg" alt="Roses" id="images"/>
          <p class="list-price text-danger">>List Price: <s>$40.99</s></p>
          <p class ="price">Our Price:$25.99</p>
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
          </div>
          </div> -->

<footer class="text-center" id="footer">&copy; Copyright 2019-2020 My Little Flower Shop</footer>



  <?php include 'details-modal-rose.php';
        include 'details-modal-yellowrose.php';
        include 'details-modal-pinkrose.php';
        include 'details-modal-lily.php';
        include 'details-modal-vase1.php';
        include 'details-modal-vase2.php';
        include 'details-modal-vase3.php';
        include 'details-modal-vase4.php';

        ?>
  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
 


