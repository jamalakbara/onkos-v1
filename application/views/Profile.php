<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--css-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/style6.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <title>OngKos - Cari Kos Mudah</title>
</head>
<body>
    <div>
        <!--navbar-->
        <?php include 'header.php'; ?>
        <!--navbar-->

        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/home/homeLoggedIn' ?>">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ul>
        </div><!--breadcrum-->

        <div class="container-fluid row" id="punyaku">
            <div class="col-md-3 border-right" id="propil">
                <?php foreach ($doto as $a) {?>
                <div class="profile text-center">
                    <img src="<?php echo base_url().'assets/'; ?>img/chairil-anwar.jpg">
                    <p><h5 class="text-muted"><?php echo $a['nama']; ?></h5></p>
                    <p><h6 class="text-muted">Username :<b><?php echo " ".$a['username']; ?></b></h6></p>
                    <p><a href="<?php echo base_url().'index.php/myiklan/tampilkos/'.$this->session->userdata('id') ?>"><button class="btn btn-dark btn-sm px-5">Iklan Saya</button></a></p>
                </div>
                <?php } ?>
            </div><!--col profil-->
            <div class="col-md-6 mx-auto">

                <table class="table table-hover">
                    <?php
                        foreach ($doto as $d) {
                          ?>
                        <tr>
                            <thead class="thead-light">
                                <th>Username</th>
                                <td><?php echo $d['username']; ?></td>
                            </thead>
                            
                        </tr>
                        
                        <tr>
                            <thead class="thead-light">
                                <th>Jenis Kelamin</th>
                                <td><?php echo $d['jenisKelamin']; ?></td>
                            </thead>
                        </tr>
                        <tr>
                            <thead class="thead-light">
                                <th>E-mail</th>
                                <td><?php echo $d['email']; ?></td>
                            </thead>
                        </tr>
                        <tr>
                            <thead class="thead-light">
                                <th></th>
                                <td><a href="<?php echo base_url().'index.php/editprofile/showdata/'.$d['username'];?>"><button class="btn btn-dark btn-sm px-5">Edit</button></a></td>
                            </thead>
                        </tr>
                        <?php } ?>
                </table>
            </div><!--col tabel kosan-->
        </div><!--container row-->

        <!--footer-->
        <?php include 'footer.php'; ?>
        <!--footer-->
    </div><!--div-->

    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            /*JQUERY PLUGIN DATATABLE*/

            var table = $('#myTable').DataTable();
 
            $('#myTable tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            } );
         
            $('#buttonDel').click( function () {
                table.row('.selected').remove().draw( false );
            } );

            /*JQUERY PLUGIN DATATABLE*/
        });
    </script>
</body>
</html>