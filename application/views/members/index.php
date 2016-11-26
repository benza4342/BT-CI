<?php
$data = array(
'bodyclass' => 'fixed-left',
);
$this->load->view('templates/header',$data);?>
  <!-- Begin page -->
  <div id="wrapper">
    <?php $this->load->view('templates/sidenav');?>
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
                      <a href="#/member/add" class="btn btn-success waves-effect w-md waves-light m-b-20"><i class="zmdi zmdi-plus"></i> Add</a>
                    </div>
                    <!-- end col -->
                  </div>
                  <div class="editable-responsive">
                    <table class="table table-striped" id="datatable-editable">
                      <thead>
                        <th>No</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>MemberType</th>
                        <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody ng-init="member.getmember()">
                        <tr ng-repeat="x in member.member">
                          <td>{{$index+1}}</td>
                          <td>{{x.member_first_name}}</td>
                          <td>{{x.member_last_name}}</td>
                          <td>{{x.member_type_desc}}</td>
                          <td class="actions">
                            <a ng-href="#/member/edit/{{x.member_id}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <div class="btn on-default edit-row"> <i class="fa fa-trash-o" ng-click="member.deleteMember(x.member_id)"></i></a>
                          </td>
                        </tr>
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
        <?php $this->load->view('templates/rightnav');?>
      </div>
      <!-- END wrapper -->
      <?php $this->load->view('templates/footer');?>
        <script>
          $("#btn-logout").click(function(event) {
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
            }, function(isConfirm) {
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
        </script>