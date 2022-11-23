<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick-theme.css'); ?>">

<div class="container" style="margin-top: 20px;">
   <div class="row">
      <div class="donasi">
         <?php foreach ($sliderx as $sl) { ?>
         <div class="col-sm-6 col-md-4 thumbnail"><img style="height: 200px;" src="<?php echo base_url('assets/upload/image/'.$sl['gambar']); ?>" alt=""></div>
         <?php } ?>
      </div>
   </div>
</div>

<!-- <script src="<?= base_url('assets/admin/plugins/jquery/jquery.js'); ?>"></script> -->
