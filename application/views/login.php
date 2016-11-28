<?php $this->load->view('templates/header'); ?>
<!--<div class="account-pages"></div>-->
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="m-t-40 text-center">
        <a href="" class="logo"><span>BT-<span>Mart</span></span></a>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">เข้าสู่ระบบ</h4>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url('home/login'); ?>" name="form" >
                <?php if (form_error('form')): ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo form_error('form'); ?>
                    </div>
                <?php endif; ?>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control <?php if (form_error('email')) echo 'parsley-error' ?>" type="email" name="email" placeholder="อีเมลล์" value="<?php echo set_value('email'); ?>" >
                        <?php if (form_error('email')): ?><ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required"><?php echo form_error('email'); ?></li></ul><?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control <?php if (form_error('password')) echo 'parsley-error' ?>" type="password" name="password" placeholder="รหัสผ่าน" value="<?php echo set_value('password'); ?>" >
                        <?php if (form_error('password')): ?><ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required"><?php echo form_error('password'); ?></li></ul><?php endif; ?>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox" name="remember" value="1" <?php echo set_checkbox('remember', 1); ?>>
                            <label for="checkbox-signup">
                                จำรหัสผ่าน    
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">เข้าสู่ระบบ</button>
                    </div>
                </div>
                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> ลืมรหัสผ่าน ?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card-box-->
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">คุณยังไม่มีผู้ใช้ ? <a href="<?php echo site_url('register') ?>" class="text-primary m-l-5"><b>ลงทะเบียน</b></a></p>
        </div>
    </div>
</div>
<!-- end wrapper page -->
<?php $this->load->view('templates/footer'); ?>