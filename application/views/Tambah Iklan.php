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

    <!-- JQUERY PLUGIN FINE UPLOADER PROPERTY
    =======================================================================-->

    <!-- Fine Uploader Gallery CSS file
    ====================================================================== -->
    <link href="<?php echo base_url().'assets/'; ?>css/fine-uploader-gallery.css" rel="stylesheet">

    <!-- Fine Uploader jQuery JS file
    ====================================================================== -->
    <script src="<?php echo base_url().'assets/'; ?>js/jquery.fine-uploader.js"></script>

    <!-- Fine Uploader Gallery template
    ====================================================================== -->
    <script type="text/template" id="qq-template-gallery">
        <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
            <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
            </div>
            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                <span class="qq-upload-drop-area-text-selector"></span>
            </div>
            <div class="qq-upload-button-selector qq-upload-button">
                <div>Upload a file</div>
            </div>
            <span class="qq-drop-processing-selector qq-drop-processing">
                <span>Processing dropped files...</span>
                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
            </span>
            <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                <li>
                    <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                    <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                    </div>
                    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                    <div class="qq-thumbnail-wrapper">
                        <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                    </div>
                    <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                    <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                        <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                        Retry
                    </button>

                    <div class="qq-file-info">
                        <div class="qq-file-name">
                            <span class="qq-upload-file-selector qq-upload-file"></span>
                            <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                        </div>
                        <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                        <span class="qq-upload-size-selector qq-upload-size"></span>
                        <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                            <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                            <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                        </button>
                        <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                            <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                        </button>
                    </div>
                </li>
            </ul>

            <dialog class="qq-alert-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Close</button>
                </div>
            </dialog>

            <dialog class="qq-confirm-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">No</button>
                    <button type="button" class="qq-ok-button-selector">Yes</button>
                </div>
            </dialog>

            <dialog class="qq-prompt-dialog-selector">
                <div class="qq-dialog-message-selector"></div>
                <input type="text">
                <div class="qq-dialog-buttons">
                    <button type="button" class="qq-cancel-button-selector">Cancel</button>
                    <button type="button" class="qq-ok-button-selector">Ok</button>
                </div>
            </dialog>
        </div>
    </script>

    <!-- JQUERY PLUGIN FINE UPLOADER PROPERTY
    =======================================================================-->

    <title>OngKos - Cari Kos Mudah</title>
</head>
<body>
    <div>
        <!--navbar-->
        <?php include 'header.php'; ?>
        <!--navbar-->

        <div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/home/homeLoggedIn'; ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/profile/tampilprofile/'.$this->session->userdata('id') ?>">Profile</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/myiklan/tampilkos/'.$this->session->userdata('id') ?>">Iklan Saya</a></li>
                <li class="breadcrumb-item active">Tambah Iklan</li>
            </ul>
        </div><!--breadcrumb-->
            

        <div class="border-bottom">
            <div class="col-md-12 mx-auto rounded-top" id="kroco">
                <label class="mx-5">Gambar</label>
                <div class="mx-5" id="yowyow">
                    <?php echo form_open_multipart('addiklan/aksi_upload');?>
                        <div>
                            <input type="file" name="berkas" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"><br>
                            <input type="submit" value="upload" class="btn btn-dark btn-sm px-4">
                        </div> 
                    </form>
                </div>
            </div><!--form group gambar-->
            <form class="rounded" method="POST" action="<?php echo base_url().'index.php/addiklan/addKosan'; ?>">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ID Pemilik Kos</label>
                        <input type="text" class="form-control" name="idIbu" disabled="" value="<?php echo $this->session->userdata('id'); ?>">
                    </div><!--form group id kos-->
                    <div class="form-group col-md-12">
                        <label>ID Kosan</label>
                        <input type="text" class="form-control" name="id">
                    </div><!--form group id kos-->
                    <div class="form-group col-md-12">
                        <label>Nama Kosan</label>
                        <input type="text" class="form-control" name="Nama">
                    </div><!--form group nama kos-->
                    <div class="form-group col-md-12">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="Alamat">
                    </div><!--form group alamat kos-->
                    <div class="form-group col-md-12">
                        <label>Harga</label>
                            <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="contoh : 1000000" name="Harga">                                  
                            </div>
                    </div><!--form group harga-->
                    <div class="form-group col-md-12">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="Deskripsi">
                    </div><!--form group deskripsi-->
                    <div class="form-group col-md-12">
                        <label>Fasilitas Kamar</label>
                        <div id="fasKmr">
                            <input type="text" class="form-control" name="fasKmr">
                            <p class="tambahKmr text-info" style="cursor: pointer;">Tambah Fasilitas</p>
                        </div><!-- id="fasKmr"-->
                    </div><!--form group fasilitas kamar-->
                    <div class="form-group col-md-12">
                        <label>Luas Kamar</label>
                        <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="contoh : 4x5" name="Luas">
                                <div class="input-group-append">
                                    <span class="input-group-text">meter</span>
                                </div><!--meter-->
                        </div>
                    </div><!--form group luas kamar-->
                    <div class="form-group col-md-12">
                        <label>Fasilitas Umum</label>
                        <div id="fasUmum">
                            <input type="text" class="form-control" name="fasUmum">
                            <p class="tambahUmum text-info" style="cursor: pointer;">Tambah Fasilitas</p>
                        </div><!-- id="fasUmum"-->
                    </div><!--form group fasilitas umum-->
                    <div class="form-group col-md-12">
                        <label>Parkir</label>
                        <div id="park">
                            <input type="text" class="form-control" name="Parkir">
                            <p class="tambahPark text-info" style="cursor: pointer;">Tambah Fasilitas</p>
                        </div><!-- id="park"-->
                    </div><!--form group parkir-->
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-dark px-5 btn-block" name="submit">Lanjut</button>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.tambahKmr').click(function(){
                $('#fasKmr').before('<input type="text" class="form-control">');
            });/*tambah fas kamar*/
            $('.tambahUmum').click(function(){
                $('#fasUmum').before('<input type="text" class="form-control">');
            });/*tambah fas umum*/
            $('.tambahPark').click(function(){
                $('#park').before('<input type="text" class="form-control">');
            });/*tambah fas parkir*/
            
            /*JQUERY PLUGIN FINE UPLOADER*/
            $('#fine-uploader-gallery').fineUploader({
                template: 'qq-template-gallery',
                request: {
                    endpoint: '/uploads'
                },
                thumbnails: {
                    placeholders: {
                        waitingPath: '../placeholders/waiting-generic.png',
                        notAvailablePath: '../placeholders/not_available-generic.png'
                    }
                },
                validation: {
                    allowedExtensions: ['jpeg', 'jpg', 'gif', 'png']
                }
            });
            /*JQUERY PLUGIN FINE UPLOADER*/
        }); 
    </script>
</body>
</html>