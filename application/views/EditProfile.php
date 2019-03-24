<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--css-->
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/style5.css">
    
    <!-- jQuery
    ====================================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>OngKos - Cari Kos Mudah</title>
</head>
<body>
    <div>
        <!--navbar-->
        <?php include 'header.php'; ?>
        <!--navbar-->

        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/home'; ?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="">Profile</a></li>
            </ul>
        </div><!--breadcrumb-->
            <?php 
                foreach ($data as $d) {
                     
                 ?>
        
        <div class="border-bottom">
            <form class="rounded my-4" method="POST" action="<?php echo base_url().'index.php/editprofile/editData/'.$d["username"]; ?>">
                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ID Pemilik Kos</label>
                        <input type="text" class="form-control" name="idIbu" value="<?php echo $d['noId'] ?>" readonly>
                    </div><!--form group id-->
                    <div class="form-group col-md-12">
                        <label>Username</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $d['username']; ?>" disabled>
                    </div><!--form group username-->
                    <div class="form-group col-md-12">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div><!--form group password-->
                    <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="Nama" value="<?php echo $d['nama']; ?>">
                    </div><!--form group nama-->
                    <div class="form-group col-md-12">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="Email" value="<?php echo $d['email']; ?>">
                    </div><!--form group email-->
                    <?php } ?>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-dark px-5 btn-block" name="submit">Edit</button>
                    </div><!--form-group-->
                </div><!--form row-->
            </form><!--form-->
        </div><!--border-->

        <!--footer-->
        <?php include 'footer.php'; ?>
        <!--footer-->
    </div><!--div semua-->

    <!--javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>js/bootstrap.bundle.min.js"></script>
</body>
</html>