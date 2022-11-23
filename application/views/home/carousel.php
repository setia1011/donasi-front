<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick-theme.css'); ?>">

<div class="container" style="margin-top: 20px;">
   <div class="row">
      <div class="donasi">
         <?php foreach ($sliderx as $sl) { ?>
         <div class="col-sm-6 col-md-4 thumbnail">
            <img style="height: 200px; width: inherit;" src="<?php echo base_url('assets/upload/image/'.$sl['gambar']); ?>" alt="">
         </div>
         <?php } ?>
      </div>
   </div>
</div>

<style>
   .slick-prev, .slick-next {
      /* background-color: blueviolet; */
   }

   .slick-prev:hover,
   .slick-prev:focus,
   .slick-next:hover,
   .slick-next:focus
   {
      color: none;
      outline: none;
      background: none;
   }

   .slick-prev:before, .slick-next:before {
      color: black;
   }
</style>
