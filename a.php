
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping Cart</title>


    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
  
</head>
<body style="background-color:lightpink;">
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">Women's Health Hub</label>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#">Complaints</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Reviews</a></li>
    </ul>
</nav>
  
<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./img/a.png" alt="image1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product1</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example to build on the card.
                        </p>
                        <h5>
                        <span style="text-decoration:line-through;">₹449</span>
                            <span class="price">₹399</span>
                        </h5>

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
    
                    </body>
                </div>
            </form>

        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./img/b.png" alt="image2" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product2</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example to build on the card.
                        </p>
                        <h5>
                            <!-- <small><s style="color black:">₹359</s></small> -->
                            <span style="text-decoration:line-through;">₹359</span>
                            <span class="price">₹289</span>
                        </h5>

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
    
                    </body>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./img/c.png" alt="image3" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product3</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example to build on the card.
                        </p>
                        <h5>
                        <span style="text-decoration:line-through;">₹249</span>
                            <span class="price">₹219</span>
                        </h5>

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
    
                    </body>
                </div>
            </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
                <div class="card shadow">
                    <div>
                        <img src="./img/d.png" alt="image4" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product4</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text">
                            Some quick example to build on the card.
                        </p>
                        <h5>
                        <span style="text-decoration:line-through;">₹1499</span>
                            <span class="price">₹1099</span>
                        </h5>

                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
    
                    </body>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>