<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
<!--batas-->
<div class="page-content">
    	<div class="row">
<div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="categories"><i class="glyphicon glyphicon-calendar"></i> Categories</a></li>
                    <li><a href="customers"><i class="glyphicon glyphicon-stats"></i>  customers</a></li>
                    <li><a href="employess"><i class="glyphicon glyphicon-list"></i> employess</a></li>
                    <li><a href="orders"><i class="glyphicon glyphicon-record"></i> orders</a></li>
                    <li><a href="order_details"><i class="glyphicon glyphicon-pencil"></i> order_details</a></li>
                    <li><a href="products"><i class="glyphicon glyphicon-tasks"></i> products</a></li>
					 <li><a href="shippers"><i class="glyphicon glyphicon-tasks"></i> shippers</a></li>
					  <li><a href="suppliers"><i class="glyphicon glyphicon-tasks"></i> suppliers</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>          
		<?php 
			$jumlahProduk = $listProducts->num_rows(); //$listProduct berasal dari data yang dilempar dari controller, yaitu $data['listProducts']. num_rows() digunakan untuk menghitung jumlah baris yang dimiliki ketika kita melakukan select dari database

			if($jumlahProduk == 0){
		?>
			<!-- Kalau datanya masih kosong, kita harus melakukan add product -->
			<a href="<?= base_url() ?>index.php/products/addProduct">Add</a>
		<?php
			}
			else {
		?>
			<!-- Kalau ada datanya, maka kita akan tampilkan dalam table -->
			<h1>Product List</h1>
			<table border="1">
				<thead>
					<tr>
						<th>No. </th>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Supplier ID</th>
						<th>Category ID</th>
						<th>Quantity Per Unit</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						//Kita akan melakukan looping sesuai dengan data yang dimiliki
						$i = 1; //nantinya akan digunakan untuk pengisian Nomor
						foreach ($listProducts->result() as $row) {
					?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $row->ProductID ?></td> <!-- karena berbentuk objek, maka kita menggunakan panah (->) untuk menunjuk field yang ada di database -->
						<td><?= $row->ProductName ?></td>
						<td><?= $row->SupplierID ?></td>
						<td><?= $row->CategoryID ?></td>
						<td><?= $row->QuantityPerUnit ?></td>
						
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		<?php
			}
		?>
				   
                </div>
            <!--foooteerrrr-->
			 <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright @ <a href='#'>rahmad</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
  </body>
</html>          

		
		