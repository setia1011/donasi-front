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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                    </span>Content</a>
                                 </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    <table class="table">
                                       <tr>
                                             <td>
                                                <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                                             </td>
                                       </tr>
                                       <tr>
                                             <td>
                                                <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                                             </td>
                                       </tr>
                                       <tr>
                                             <td>
                                                <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                                             </td>
                                       </tr>
                                       <tr>
                                             <td>
                                                <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                                                <span class="badge">42</span>
                                             </td>
                                       </tr>
                                    </table>
                                 </div>
                           </div>
                        </div>
                     </div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="contact-title">Tentang Kami</h4>
                        <div>
                           <?= $site->tentang;  ?>
                        </div>
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