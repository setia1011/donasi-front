<style>
   .glyphicon { margin-right:10px; }
   .panel-body { padding:0px; }
   .panel-body table tr td { padding-left: 15px }
   .panel-body .table {margin-bottom: 0px; }
</style>

<section class="bg-contact-us">
    <div class="container">
        <div class="row">
            <div class="contact-us">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                                 <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                       #
                                    </a>
                                 </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    <table class="table">
                                    <?php foreach ($aboutlist as $v) { ?>
                                       <tr>
                                          <td>
                                             <span class="glyphicon glyphicon-pencil text-primary"></span><a href="<?= base_url('about/'.$v->slug_berita); ?>"><?= $v->judul_berita; ?></a>
                                          </td>
                                       </tr>
                                    <?php } ?>
                                    </table>
                                 </div>
                           </div>
                        </div>
                     </div>
                    </div>
                    <div class="col-md-8">
                        <?php if ($berita == '') { ?>
                           <h4>Tentang Kami</h4>
                           <div style="margin-top: 20px;">
                              <?= $site->tentang;  ?>
                           </div>
                        <?php } else { ?>
                           <h4><?= $berita->judul_berita; ?></h4>
                           <div style="margin-top: 20px;">
                              <?= $berita->isi;  ?>
                           </div>
                        <?php } ?>    
                        <!-- <h4>Tentang Kami</h4>
                        <div style="margin-top: 20px;">
                           
                           <?= $site->tentang;  ?>
                        </div> -->
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .contact-us -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>