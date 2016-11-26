<?php $this->load->view('templates/header'); ?>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo"><span>BT-<span>Mart</span></span></a>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Register</h4>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url('home/register'); ?>">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input name="email" class="form-control" class="form-control" type="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input name="username" class="form-control" type="text" value="<?php echo set_value('username'); ?>" placeholder="Username">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="passwordconf" type="password" value="<?php echo set_value('passwordconf'); ?>" placeholder="Password Confirmation">
                        <?php echo form_error('passwordconf'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox" name="accept" checked="checked">
                            <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card-box -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Already have account?<a href="<?php echo site_url('') ?>" class="text-primary m-l-5"><b>Sign In</b></a></p>
        </div>
    </div>
</div>
<!-- end wrapper page -->
<?php $this->load->view('templates/footer'); ?>