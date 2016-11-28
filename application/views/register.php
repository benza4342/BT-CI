<?php $this->load->view('templates/header'); ?>
<!--<div class="account-pag es"></div>-->
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo"><span>BT-<span>Mart</span></span></a>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">สมัครสมาชิก</h4>
        </div>
        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="<?php echo site_url('home/register'); ?>">
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
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control <?php if (form_error('passwordconf')) echo 'parsley-error' ?>" type="password" name="passwordconf" placeholder="ยืนยันรหัสผ่าน" value="<?php echo set_value('passwordconf'); ?>" >
                        <?php if (form_error('passwordconf')): ?><ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required"><?php echo form_error('passwordconf'); ?></li></ul><?php endif; ?>
                    </div>
                </div>
                <!--                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input name="username" class="form-control" type="text" value="<?php echo set_value('firstname'); ?>" placeholder="ชื่อ">
                <?php // echo form_error('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input name="username" class="form-control" type="text" value="<?php echo set_value('lastname'); ?>" placeholder="นาลสกุล">
                <?php //echo form_error('lastname'); ?>
                                    </div>
                                </div>-->
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox" name="accept" checked="checked">
                            <label for="checkbox-signup">ยอมรับ<a href="#"> เงื่อนไขการใช้บริการ</a></label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                            สมัครสมาชิค   
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card-box -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">มีบัญชีผู้ใช้แล้ว ? <a href="<?php echo site_url('') ?>" class="text-primary m-l-5"><b>เข้าสู่ระบบ</b></a></p>
        </div>
    </div>
</div>
<!-- end wrapper page -->
<?php $this->load->view('templates/footer'); ?>