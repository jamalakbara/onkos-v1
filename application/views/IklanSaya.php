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
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/profile/tampilprofile/'.$this->session->userdata('id') ?>">Profile</a></li>
                <li class="breadcrumb-item active">Iklan Saya</li>
            </ul>
        </div><!--breadcrum-->

        <div class="container-fluid row" id="punyaku">
            <div class="col-md-3 border-right">
                <?php foreach ($doto as $a) {?>
                <div class="profile text-center">
                    <img src="<?php echo base_url().'assets/'; ?>img/chairil-anwar.jpg">
                    <p><h5 class="text-muted"><?php echo $a['nama']; ?></h5></p>
                    <p><h6 class="text-muted">Username :<b><?php echo " ".$a['username']; ?></b></h6></p>
                    <p><a href="<?php echo base_url().'index.php/profile/tampilprofile/'.$this->session->userdata('id') ?>"><button class="btn btn-dark btn-sm px-5">Profile</button></a></p>
                    <p><a href="<?php echo base_url().'index.php/login/loggedinplus/' ?>"><button class="btn btn-dark btn-sm px-4">Tambah Iklan</button></a></p>
                </div>
                <?php } ?>
            </div><!--col profil-->
            <div class="col-md-9">

                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>ID Kos</th>
                            <th>Nama Kos</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $d) {
                          ?>
                        <tr>
                            <td><?php echo $d['idKosan']; ?></td>
                            <td><?php echo $d['namaKosan']; ?></td>
                            <td><?php echo $d['harga']; ?></td>
                            <td>
                                <a href="<?php echo base_url().'index.php/myiklan/do_delete/'.$d['idKosan'];?>"><button class="btn btn-dark btn-sm mr-2" id="buttonDel">DELETE</button></a>
                                <a href="<?php echo base_url().'index.php/editiklan/showdata/'.$d['idKosan'];?>"><button class="btn btn-dark btn-sm" id="buttonUp">UPDATE</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
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