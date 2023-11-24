<header class="page-header">
	<div class="container-fluid">
	  	<h2 class="panel-title">Dashboard</h2>
	</div>
</header> 
<div class="main-content">
	<?php 
        if ($this->session->userdata('level') == 'admin') { ?>
	<section class="dashboard-counts no-padding-bottom">
	    <div class="container-fluid">
	      <div class="row py-1">
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-violet"><i class="fa fa-book"></i></div>
							<a href="<?php echo base_url('index.php/book') ?>" class="text-secondary">
							<div class="title"><span>Total Book</span></div>
							</a>
							<span class="number"><?php echo $jml_book->jml_book; ?></span>
						</div>
					</div>
				</div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-green"><i class="fa fa-dollar"></i></div>
							<a href="<?php echo base_url('index.php/history') ?>" class="text-secondary">
							<div class="title"><span>Earnings</span></div>
							</a>
							<span class="number"><?php echo '$'.$jml_transaction->jml_transaction; ?></span>
						</div>
					</div>
				</div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-red"><i class="fa fa-exchange"></i></div>
							<a href="<?php echo base_url('index.php/history') ?>" class="text-secondary">
							<div class="title"><span>Total Transaction</span></div>
							</a>
							<span class="number"><?php echo $jml_pengguna->jml_pengguna; ?></span>
						</div>
					</div>
				</div>
	        </div>
		  </div>

		  <div class="row py-1">
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-warning"><i class="fa fa-bookmark" style="color: white;"></i></div>
							<a href="<?php echo base_url('index.php/category') ?>" class="text-secondary">
							<div class="title"><span>Categories</span></div>
							</a>
							<span class="number"><?php echo $book_cat->book_cat; ?></span>
						</div>
					</div>
				</div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-gray"><i class="fa fa-user-secret"></i></div>
							<a href="<?php echo base_url('index.php/user') ?>" class="text-secondary">
							<div class="title"><span>System Users</span></div>
							</a>
							<span class="number"><?php echo $sys_user->sys_user; ?></span>
						</div>
					</div>
				</div>
	        </div>
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="item d-flex align-items-center">
							<div class="icon bg-info"><i class="fa fa-th-large" style="color: white;"></i></div>
							<a href="<?php echo base_url('index.php/book') ?>" class="text-secondary">
								<div class="title"><span>Stocks</span></div>
							</a>
							<span class="number"><?php echo $book_stock->book_stock; ?></span>
						</div>
					</div>
				</div>
			  </div>
		  </div>

		  <div class="row py-1">
	        
	        <!-- Item -->
	        <div class="col-xl-4 col-sm-4">
				<div class="card rounded-0 shadow">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="icon bg-green"><i class="fa fa-hourglass"></i></div>
							<a href="<?php echo base_url('index.php/history') ?>" class="text-secondary">
							<div class="title"><span>Sales (24hrs)</span></div>
							</a>
							<span class="number"><?php echo '$'.$sales_p->sales_p; ?></span>
						</div>
					</div>
				</div>
	        </div>
	        
		  </div>
		</div>
	</section>
		<?php } elseif (($this->session->userdata('level') == 'Customer')) {?>
			<div class="d-flex flex-wrap justify-content-center">
				<div class="px-5 py-3">
					<p>Educational</p>
					<table class="table table-hover table-bordered" id="example" style="background-color: #eef9f0; border-radius: 10px; overflow: hidden;">
						<thead style="background-color: orange; color:white;">
							<tr>
								<th>Book Title</th>
								<th>Book Cover</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Act.</th>
							</tr>

						</thead>
						<tbody style="background-color: white;">
							<?php $no=0; foreach ($get_book as $book): if ($no == 6) break; if($book->category_name != "Educational") continue; $no++;?>
								<tr>
									<td><?=$book->book_title?></td>
									<td><img src="<?=base_url('assets/gambar/'.$book->book_img)?>" style="width:40px"></td>
									<td class="text-right">$<?=$book->price?></td>
									<td class="text-right"><?=$book->stock?></td>
									<td class="text-center"><a href="<?=base_url('index.php/transaction/addcart/'.$book->book_code)?>"><button class="btn btn-outline-primary rounded-0 btn-sm"><span class="fa fa-shopping-cart" aria-hidden="true"></span></button></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="px-5 py-3">
					<p>Fiction</p>
					<table class="table table-hover table-bordered" id="example" style="background-color: #eef9f0; border-radius: 10px; overflow: hidden;">
						<thead style="background-color: orange; color:white;">
							<tr>
								<th>Book Title</th>
								<th>Book Cover</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Act.</th>
							</tr>

						</thead>
						<tbody style="background-color: white;">
							<?php $no=0; foreach ($get_book as $book): if ($no == 6) break; if($book->category_name != "Fiction") continue; $no++;?>
								<tr>
									<td><?=$book->book_title?></td>
									<td><img src="<?=base_url('assets/gambar/'.$book->book_img)?>" style="width:40px"></td>
									<td class="text-right">$<?=$book->price?></td>
									<td class="text-right"><?=$book->stock?></td>
									<td class="text-center"><a href="<?=base_url('index.php/transaction/addcart/'.$book->book_code)?>"><button class="btn btn-outline-primary rounded-0 btn-sm"><span class="fa fa-shopping-cart" aria-hidden="true"></span></button></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="px-5 py-3">
					<p>Fantasy</p>
					<table class="table table-hover table-bordered" id="example" style="background-color: #eef9f0; border-radius: 10px; overflow: hidden;">
						<thead style="background-color: orange; color:white;">
							<tr>
								<th>Book Title</th>
								<th>Book Cover</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Act.</th>
							</tr>

						</thead>
						<tbody style="background-color: white;">
							<?php $no=0; foreach ($get_book as $book): if ($no == 6) break; if($book->category_name != "Fantasy") continue; $no++;?>
								<tr>
									<td><?=$book->book_title?></td>
									<td><img src="<?=base_url('assets/gambar/'.$book->book_img)?>" style="width:40px"></td>
									<td class="text-right">$<?=$book->price?></td>
									<td class="text-right"><?=$book->stock?></td>
									<td class="text-center"><a href="<?=base_url('index.php/transaction/addcart/'.$book->book_code)?>"><button class="btn btn-outline-primary rounded-0 btn-sm"><span class="fa fa-shopping-cart" aria-hidden="true"></span></button></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="px-5 py-3">
					<p>Horror</p>
					<table class="table table-hover table-bordered" id="example" style="background-color: #eef9f0; border-radius: 10px; overflow: hidden;">
						<thead style="background-color: orange; color:white;">
							<tr>
								<th>Book Title</th>
								<th>Book Cover</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Act.</th>
							</tr>

						</thead>
						<tbody style="background-color: white;">
							<?php $no=0; foreach ($get_book as $book): if ($no == 6) break; if($book->category_name != "Horror") continue; $no++;?>
								<tr>
									<td><?=$book->book_title?></td>
									<td><img src="<?=base_url('assets/gambar/'.$book->book_img)?>" style="width:40px"></td>
									<td class="text-right">$<?=$book->price?></td>
									<td class="text-right"><?=$book->stock?></td>
									<td class="text-center"><a href="<?=base_url('index.php/transaction/addcart/'.$book->book_code)?>"><button class="btn btn-outline-primary rounded-0 btn-sm"><span class="fa fa-shopping-cart" aria-hidden="true"></span></button></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
			
			<!-- <section class="dashboard-counts no-padding-bottom">
			<div class="container-fluid">
			<div class="row py-1">
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-violet"><i class="fa fa-book"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>Total Book</span></div>
								</a>
								<span class="number"><?php echo $jml_book->jml_book; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-green"><i class="fa fa-dollar"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>Earnings</span></div>
								</a>
								<span class="number"><?php echo '$'.$jml_transaction->jml_transaction; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-red"><i class="fa fa-exchange"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>Total Transaction</span></div>
								</a>
								<span class="number"><?php echo $jml_pengguna->jml_pengguna; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row py-1">
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-warning"><i class="fa fa-bookmark" style="color: white;"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>Categories</span></div>
								</a>
								<span class="number"><?php echo $book_cat->book_cat; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-gray"><i class="fa fa-user-secret"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>System Users</span></div>
								</a>
								<span class="number"><?php echo $sys_user->sys_user; ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="item d-flex align-items-center">
								<div class="icon bg-info"><i class="fa fa-th-large" style="color: white;"></i></div>
								<a href="#" class="text-secondary">
									<div class="title"><span>Books Stock</span></div>
								</a>
								<span class="number"><?php echo $book_stock->book_stock; ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row py-1">
				
				
				<div class="col-xl-4 col-sm-4">
					<div class="card rounded-0 shadow">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="icon bg-green"><i class="fa fa-hourglass"></i></div>
								<a href="#" class="text-secondary">
								<div class="title"><span>Sales (24hrs)</span></div>
								</a>
								<span class="number"><?php echo '$'.$sales_p->sales_p; ?></span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			</div>
	</section> -->
		
		<?php }?>
	
</div>
