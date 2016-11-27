<?php
$data = array(
    'bodyclass' => 'fixed-left',
);
$this->load->view('templates/header', $data);
?>
<!-- Begin page -->
<div id="wrapper">
    <?php $this->load->view('templates/sidenav'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">List Member</h4>
                            <div class="row">
                                <div class="col-lg-1">
                                    <a href="<?php echo site_url('Member/add') ?>" class="btn btn-success waves-effect w-md waves-light m-b-20"><i class="zmdi zmdi-plus"></i>Add</a>
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="editable-responsive">
                                <table class="table table-striped" id="datatable-editable">
                                    <thead>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>UserType</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody >
                                        <?php
                                        $index = 1;
                                        foreach ($list as $item):
                                            echo '<td>' . $index++ . '</td>';
                                            echo '<td>' . $item['email'] . '</td>';
                                            echo '<td>' . $item['username'] . '</td>';
                                            echo '<td>' . $item['user_type_desc'] . '</td>';
                                            echo '<td>' . $item['created_at'] . '</td>';
                                            $segments = array('member', 'edit', $item['id']);
                                            echo'<td class="actions">
                                                 <a href="' . site_url($segments) . '" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                 <a href="" onclick="deleteUser(' . $item['id'] . ')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>';
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <footer class="footer">
            2016 © Adminto.
        </footer>
    </div>
    <?php $this->load->view('templates/rightnav'); ?>
</div>
<!-- END wrapper -->
<?php $this->load->view('templates/footer'); ?>
<script>
    $("#btn-logout").click(function (event) {
        var id = $(this).attr("id");
        swal({
            title: "Warning Data!",
            text: "Confirm you Logout",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Logout!",
            cancelButtonText: "No, Cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                window.location.href = "<?php echo site_url('home/Logout') ?>";
            } else {
                swal.close();
                return false;
            }
            event.preventDefault();
            return false;
        });
    });
    function deleteUser(id) {
        event.preventDefault();
        swal({
            title: "Are you sure ?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn-warning',
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {
            swal({
                title: "Deleted!",
                text: "Your imaginary file has been deleted.",
                type: "success"}, function () {
                window.location.href = "<?php echo site_url('Member') ?>";
            })
            //memberFactory.deleteMember(id).success((data) => memberFactory.getMemberList().success((data) => $timeout(() => member.member = data, 0)))
        })

    }
</script>