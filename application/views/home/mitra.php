<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/admin/plugins/slick-master/slick/slick-theme.css'); ?>">

<div class="container" style="margin-top: 20px; margin-bottom: 40px;">
   <div class="icon-setia"><iconify-icon icon="fluent:people-team-toolbox-20-regular"></iconify-icon></div>
   <div class="text-center" style="margin-bottom: 20px;"><h4 style="color: rgb(0 0 0 / 50%) !important;">MITRA KAMI</h4></div>
   <div class="row">
      <div class="mitra">
         <?php foreach ($clients as $cl) { ?>
         <div class="col-sm-6 col-md-3">
            <img 
               class="thumbnail" 
               style="height: 150px; width: inherit;" 
               src="<?php echo base_url('assets/upload/client/'.$cl->gambar); ?>">
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
   .mitra {
      background-color: #ffff;
      padding: 20px 0 0 0;
      /* box-shadow: 0px 5px 5px 5px #ddd; */
   }
   .icon-setia {
      font-size: 2em;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
   }
</style>
