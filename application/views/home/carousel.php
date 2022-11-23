<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick-theme.css'); ?>">

<div class="container" style="margin-top: 20px;">
   <div class="icon-setia"><iconify-icon icon="tabler:separator"></iconify-icon></div>
   <div class="row">
      <div class="donasi">
         <?php foreach ($sliderx as $sl) { ?>
         <div class="col-sm-6 col-md-4">
            <img 
               class="thumbnail" 
               style="height: 250px; width: inherit;" 
               src="<?php echo base_url('assets/upload/image/'.$sl['gambar']); ?>">
         </div>
         <?php } ?>
      </div>
   </div>
</div>

<style>
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
   .donasi {
      background-color: #ffff;
      padding: 20px 0 0 0;
      box-shadow: 0px 5px 5px 5px #ddd;
   }
   .icon-setia {
      font-size: 2em;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
   }
</style>
