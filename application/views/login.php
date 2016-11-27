<?php $this->load->view('templates/header'); ?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo"><span>BT-<span>Mart</span></span></a>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url('home/login'); ?>">
                <?php // if ($this->session->flashdata('message')): ?>
                <!--<div class="alert alert-danger fade in">-->
                <!--<a href="#" class="close" data-dismiss="alert">&times;</a>-->
                <?php // $this->session->flashdata('message') ?>
                <!--</div>-->
                <?php // endif; ?>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox" name="remember">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card-box-->
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Don't have an account? <a href="<?php echo site_url('register') ?>" class="text-primary m-l-5"><b>Sign Up</b></a></p>
        </div>
    </div>
</div>
<!-- end wrapper page -->
<?php $this->load->view('templates/footer'); ?>