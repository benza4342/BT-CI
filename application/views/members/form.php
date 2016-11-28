<?php
$data = array(
    'bodyclass' => 'fixed-left',
);
$this->load->view('templates/header', $data);
if (!empty($model)) {
    $email = $model[0]->email;
    $firstname = $model[0]->firstname;
    $lastname = $model[0]->lastname;
} else {
    $email = '';
    $firstname = '';
    $lastname = '';
}
?>
<div id="wrapper">
    <?php $this->load->view('templates/sidenav'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <h4 class="header-title m-t-0 m-b-30"><?php echo $action; ?></h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="email">ProfilePicture</label>
                                            <div class="col-md-4">
                                                <input type="file" class="dropify" data-default-file="assets/images/gallery/1.jpg"  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="email">Email</label>
                                            <div class="col-md-4">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Firstname</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control"  name="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Lastname</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control"  name="lastname" placeholder="Lastname" value="<?php echo $lastname; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2"></label>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                            <a  href="<?php echo site_url('Member') ?>" class="btn btn-danger waves-effect waves-light">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- content -->
        <?php $this->load->view('templates/footer'); ?>
        <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>