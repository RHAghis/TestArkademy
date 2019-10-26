<!doctype html>
<html class="no-js" lang="">

<?php $this->load->view('header'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url() ?>/assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Form Produk</h2>
										<p>ARKADEMY <span class="bread-ntd">Coffe Shop</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<a href="<?php echo site_url('Home') ?>"><button class="btn" data-toggle="tooltip" data-placement="left" title="Close"><i class="notika-icon notika-close"></i></button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">

                        <?php echo form_open('Home/editProduct/'.$prod_list[0]->id, array('class' => 'form-horizontal', 'role' => 'form' )); ?>
                            
                            <div class="form-group ic-cmp-int col-lg-12">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-star"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="id" name="id" class="form-control" value="<?php echo $prod_list[0]->id; ?>">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int col-lg-12">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $prod_list[0]->product; ?>">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int col-lg-12">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-ip-locator"></i>
                                </div>
                                <div class="nk-int-st">
                                    <input type="text" id="price" name="price" class="form-control" value="<?php echo $prod_list[0]->price; ?>">
                                </div>
                            </div>

                            <div class="form-group ic-cmp-int col-lg-12">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-mail"></i>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select style="width: 100%;" name="id_category" id="id_category" data-placeholder="Pilih Category">
                                        <option value="">Pilih Category</option>
                                        <?php foreach ($cat_list as $key){?>
                                        <option value="<?php echo $key->id_category ?>"
                                            <?php if ($prod_list[0]->category == $key->name) echo "selected"; ?>>
                                            <?php echo $key->name ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ic-cmp-int col-lg-12">
                                <div class="form-ic-cmp">
                                    <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select style="width: 100%;" name="id_cashier" id="id_cashier" data-placeholder="Pilih Kasir">
                                        <option value="">Pilih Kasir</option>
                                        <?php foreach ($cash_list as $key){?>
                                        <option value="<?php echo $key->id_cashier ?>"
                                            <?php if ($prod_list[0]->cashier == $key->name) echo "selected"; ?>>
                                            <?php echo $key->name ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <center>
                            <?php echo form_submit('submit','Simpan', 'class="btn-success btn-lg notika-button-success"');?>
                        <?php echo form_close(); ?>
                            </center>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 
. ARKADEMY Coffe Shop .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    
    <!--==================================================================================================================-->    

    <?php  $this->load->view('script'); ?>

    <!--==================================================================================================================--> 
</body>

</html>