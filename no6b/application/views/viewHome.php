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
                        <a href="#"><h2 style="color:#FFFFFF;">ARKADEMY Coffe Shop</h2></a>
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
                                        <h2>Data Produk</h2>
                                        <p>ARKADEMY <span class="bread-ntd">Coffe Shop</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="<?php echo site_url('Home/addProduct') ?>"><button data-toggle="tooltip" data-placement="left" title="Tambah Produk" class="btn"><i class="notika-icon notika-menus"></i></button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) :?>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cashier</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pevita Pearce</td>
                                        <td>Latte</td>
                                        <td>Drink</td>
                                        <td>10000</td>
                                        <td>
                                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                                <a href="<?php echo site_url() ?>/Home/editProduct"><button class="btn btn-primary primary-icon-notika" ><i class="notika-icon notika-edit"></i></button></a>
                                                <a class="tmbl-hapus" href="#"><button class="btn btn-danger danger-icon-notika" ><i class="notika-icon notika-trash"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Raisa Andriana</td>
                                        <td>Cake</td>
                                        <td>Food</td>
                                        <td>20000</td>
                                        <td>
                                            <div class="button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                                                <a href="<?php echo site_url() ?>/Home/editProduct"><button class="btn btn-primary primary-icon-notika" ><i class="notika-icon notika-edit"></i></button></a>
                                                <a class="tmbl-hapus" href="#"><button class="btn btn-danger danger-icon-notika" ><i class="notika-icon notika-trash"></i></button></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Cashier</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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