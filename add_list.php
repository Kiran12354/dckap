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
   <div class="dropdown dropright">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Sort By Price
    </button>
    <div class="dropdown-menu">
        <form method="post" action="<?php echo base_url()?>filter">
            <?php 
            if(($get_filter->price)==1):?>
            <label>high</label>
            <input type="radio" name="price" value="1" checked="">
            <label>low</label>
            <input type="radio" name="price" value="0">
            <?php else:?>
            <label>high</label>
            <input type="radio" name="price" value="1">
            <label>low</label>
            <input type="radio" name="price" value="0" checked="">        
            <?php endif;?>
            
            <button class="btn btn-info" type="submit">filter</button>
        </form>
    </div>
       <a class="btn btn-info"  href="<?php echo base_url();?>add_create">Create add</a>
  </div>
      <h2 style="text-align: center; font-family: cursive; border-bottom: 2px solid">Add Lists</h2>
      
      <div class="row">
          <div class="col-md-12">
              <table class="table table-striped table-success table-hovered">
                  <thead>
                      <tr>
                          <th><h4>#</h4></th>
                          <th><h4>Seller Info</h4></th>
              <th><h4>Product Info</h4></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                       $k=1;
                       foreach ($get_posts as $row){
                       ?>
                      <tr>
                          <td><?php echo $k;?></td>
                          <td>
                              <h5><b>Name:</b> <?php echo $row->seller_name;?></h5>
                              <h5><b>address:</b> <?php echo $row->address;?></h5>
                              <h5><b>Phone:</b> <?php echo $row->phone;?></h5>
                          </td>
                          <td>
                              <h5><b>Product Name:</b> <?php echo $row->product_name;?></h5>
                              <h5><b>Price:</b> <?php echo $row->price;?></h5>
                              <h5><b>Brand:</b> <?php echo $row->brand;?></h5>
                              <h5><b>Type:</b> <?php echo $row->type;?></h5>
                          </td>
                      </tr>
                      <?php 
                        $k++;
                       }
                        ?>
                  </tbody>
              </table>
          </div>
      </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
