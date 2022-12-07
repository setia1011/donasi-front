<!-- Start Upcoming Events Section -->
<section class="bg-upcoming-events">
<div class="container">
<div class="row">
<div class="upcoming-events">
<div class="section-header">
    <h2><iconify-icon icon="arcticons:newsreader"></iconify-icon></h2>
    <div class="text-center" style="margin-bottom: 20px;">
        <h4 style="color: rgb(0 0 0 / 50%) !important; margin-bottom: 10px;">BERITA TERKINI</h4>
        <a href="<?= base_url('berita/') ?>"><h4 class="news-indexes" style="color: #c03372;">INDEKS</h4></a>
    </div>
</div>
<!-- .section-header -->
<div class="row">
    <?php foreach($berita as $berita) { ?>
    <div class="col-md-6">
        <div class="event-items">
            <div class="event-img">
                <a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>"><img style="width:570px;height:300px;" src="<?php echo base_url('assets/upload/image/thumbs/' . $berita->gambar); ?>" alt="upcoming-events-img-1" class="img-responsive" /></a>
                <div class="date-box">
                    <h3><?php echo date('d', strtotime($berita->tanggal_publish)); ?></h3>
                    <h5><?php echo date('M', strtotime($berita->tanggal_publish)); ?></h5>
                </div>
                <!-- .date-box -->
            </div>
            <!-- .event-img -->
            <div class="events-content">
                <div style="min-height: 120px !important;">
                <h3><a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>"><?php echo $berita->judul_berita; ?></a></h3>
                <ul class="meta-post">
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('H:i', strtotime($berita->tanggal_publish)); ?></li>
                    <li><i class="fa fa-user"></i> <?php echo $berita->nama; ?></li>
                </ul>
                </div>
                <p class="text-justify"><?php echo character_limiter(strip_tags($berita->isi), 200); ?></p>
                <a href="<?php echo base_url('berita/read/' . $berita->slug_berita); ?>" class="btn btn-default"><i class="fa fa-chevron-right"></i> Selengkapnya</a>
            </div>
            <!-- .events-content -->
        </div>
        <!-- .events-items -->
    </div>
    <?php } ?>
    <!-- .col-md-6 -->
</div>
<!-- .row -->
</div>
<!-- .upcoming-events -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</section>

<style>
    .news-indexes:hover {
        color: #0099cc !important;
    }
</style>
