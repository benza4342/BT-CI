<?php
$data = array(
    'bodyclass' => 'fixed-left',
);
$this->load->view('templates/header', $data);
?>
<div id="wrapper">
    <?php $this->load->view('templates/sidenav'); ?>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <?php
                if (!empty($model)) {
                    echo'<pre>';
                    var_dump($model);
                    echo'</pre>';
                } else {
                    $model = [];
                }
                ?>
            </div>
        </div>
    </div> 
    <?php $this->load->view('templates/rightnav'); ?>
</div>
<!-- END wrapper -->
<?php $this->load->view('templates/footer'); ?>
