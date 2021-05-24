<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title><?php echo $title?></title>
  </head>
  <body class="jumbotron" style="background-color: whitesmoke" >
      <h2 style="text-align: center; font-family: cursive; border-bottom: 2px solid">Create Add<a class="btn btn-info" style="float: right; margin-right: 10px" href="<?php echo base_url();?>">Add List</a></h2>
      <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
              <form method="post" action="<?php echo base_url()?>post_add">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                          <h3>Seller Info</h3>
                          <label>Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter Seller Name" required="">
                          <label>Address</label>
                          <textarea class="form-control" name="address" required="">Enter Address</textarea>
                          <label>Phone</label>
                          <input type="tel" maxlength="10" class="form-control" name="phone" placeholder="Enter Phone Number" required="">
                      </div>
                      <div class="col-md-4">
                          <h3>Product Info</h3>
                          <label>Name</label>
                          <input type="text" class="form-control" name="pname" placeholder="Enter Product Name" required="">
                          <label>Price</label>
                          <input type="text" maxlength="10" class="form-control" name="price" placeholder="Enter Product Price" required="">
                          <label>Brand</label>
                          <input type="text" maxlength="10" class="form-control" name="brand" placeholder="Enter Product Price" required="">
                          <label>Type</label>
                          <select class="form-control" name="type">
                              <option>Select one</option>
                              <option>New</option>
                              <option>Used</option>
                          </select>
                      </div>
                  </div>
                  <br>
                  <div class="row"> 
                      <div class="col-md-10">
                          <button type="submit" style="float: right" class="btn btn-info">Submit</button>
                      </div>
                  </div>
              </form>
          </div>
          <div class="col-md-1"></div>
      </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
