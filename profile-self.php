<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
// Error reporting:
//error_reporting(E_ALL^E_NOTICE);
//
//include "connect.php";
//include "comment.class.php";
/*
/	Select all the comments and populate the $comments array with objects
*/

//$comments = array();
//$result = mysql_query("SELECT * FROM comments ORDER BY id DESC");
//
//while($row = mysql_fetch_assoc($result))
//{
//	$comments[] = new Comment($row);
//}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="img/content/profile/stock-photo-business-woman-portrait-crossed-arms-128709044.jpg" alt="stock-photo-business-woman-portrait-crossed-arms-128709044"/>
            </div>
            <div id="boxRating" class="col-sm-12 col-md-11 prefix_0 pasfix_0">
                <h4>Customer ratings</h4>
                <div class="cos-ratings">
                    <div class="append_bottom_3">
                        <p>
                            <a id="" href="mailto:example@example.com">example@example.com</a>
                        </p>
                        <p>
                            <span id="" class="glyphicon glyphicon-remove text-danger"></span><span class=""> 08123456789</span>
                            <a class="pull-right text-danger bold" href="verify-code.php">
                                <span class="unv">Unverify</span>
                                <span class="ver">Verify</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="total-ratings">5,0</div>
                        <div class="rating-container rating-gly-star" data-content="">
                            <div class="rating-stars" data-content="" style="width: 100%;"></div>
                        </div>
                        <h6 class="total-ratings-number">8,893,372</h6>
                    </div>
                    <div class="col-sm-6 col-lg-8">
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <span class="glyphicon glyphicon-star"></span> 5
                            </div>
                            <div class="progress col-sm-8 col-lg-9">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <span class="glyphicon glyphicon-star"></span> 4
                            </div>
                            <div class="progress col-sm-8 col-lg-9">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <span class="glyphicon glyphicon-star"></span> 3
                            </div>
                            <div class="progress col-sm-8 col-lg-9">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <span class="glyphicon glyphicon-star"></span> 2
                            </div>
                            <div class="progress col-sm-8 col-lg-9">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-3">
                                <span class="glyphicon glyphicon-star"></span> 1
                            </div>
                            <div class="progress col-sm-8 col-lg-9">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">10%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-8">
            <div id="profileDesc" class="col-sm-12 col-md-6">
                <h4>Description</h4>
                <div class="profile-desc-collapse">
                    <div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit, facilisi antiopam sea ei, usu ex delectus laboramus reformidans. 
                    Te sea mutat assentior, duo ei dicat quaestio suscipiantur, feugiat tractatos conclusionemque at vis. </p>
                <p>Pri iudico aperiri cu. Pri semper salutatus ut, te sit erat facilisi. Ut putant ceteros iudicabit duo, homero labore fuisset vel at. 
                    Et impedit fuisset nec. Mei consul temporibus scribentur ex, consul facilisi antiopam sea ei, usu ex delectus laboramus reformidans. 
                    Te sea mutat assentior, duo ei dicat quaestio suscipiantur, feugiat tractatos conclusionemque at vis. 
                    Ut labores repudiare theophrastus eum, cum in nisl impetus eripuit.</p>
                <p>Mutat tibique vel ad, sed soluta dolorum postulant ei, ad his soluta accusam oporteat. Vide accommodare quo in, 
                    vel quot deserunt mediocritatem in. Pri ad possit definitiones. Eos indoctum consulatu no, nominavi laboramus ius ut, 
                    nam posidonium elaboraret signiferumque id.</p>
                    </div>
                </div>
                <div class="line-gradient-1">
                    <span class="click-show-profile-desc text-info">Read more</span>
                    <span class="click-hide-profile-desc text-info">Less</span>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <table class="table-custom highlight">
                    <tbody>
                        <tr>
                            <td><b>Category</b></td>
                            <td>IT</td>
                        </tr>
                        <tr>
                            <td><b>Expertise</b></td>
                            <td>Sys Admin</td>
                        </tr>
                        <tr>
                            <td><b>Salary Range</b></td>
                            <td>Hourly</td>
                        </tr>
                        <tr>
                            <td><b>Salary</b></td>
                            <td>IDR 5000000</td>
                        </tr>
                        <tr>
                            <td><b>Age</b></td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td><b>Gender</b></td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td><b>Province</b></td>
                            <td>DKI Jakarta</td>
                        </tr>
                        <tr>
                            <td><b>City</b></td>
                            <td>Jakarta Timur</td>
                        </tr>
                        <tr>
                            <td><b>Accepted</b></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p class="clearfix"></p>
    </div><!--end row-->
    <div class="row append_bottom_4">
        
        <div class="user-timeline col-md-8 pull-right">
            <ul class="media-list">
                
                <?php
                /*
                  /	Output the comments one by one:
                 */

//                foreach ($comments as $c) {
//                    echo $c->markup();
//                }
                ?>
                <li id="comment1" class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/imgres.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <div class="ua-comment">
                            <h4 class="media-heading"><b>User a</b><span class="date">02.12.14 13:46</span></h4>
                            <div class="body-comment">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                            <p>Pri iudico aperiri cu. Pri semper salutatus ut, te sit erat facilisi. Ut putant ceteros iudicabit duo, homero labore fuisset vel at. 
                    Et impedit fuisset nec. Mei consul temporibus scribentur ex, consul facilisi antiopam sea ei, usu ex delectus laboramus reformidans. 
                    Te sea mutat assentior, duo ei dicat quaestio suscipiantur, feugiat tractatos conclusionemque at vis. 
                    Ut labores repudiare theophrastus eum, cum in nisl impetus eripuit.</p>
                <p>Mutat tibique vel ad, sed soluta dolorum postulant ei, ad his soluta accusam oporteat. Vide accommodare quo in, 
                    vel quot deserunt mediocritatem in. Pri ad possit definitiones. Eos indoctum consulatu no, nominavi laboramus ius ut, 
                    nam posidonium elaboraret signiferumque id.</p>
                            </div>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 btn_less" type="button">Less</button>
                        <a class="link-report" href="" data-toggle="modal" data-target="#myModal">report</a>
                    </div>
                </li>
                <li id="comment2" class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/user.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <div class="ua-comment">
                            <h4 class="media-heading"><b>User b</b><span class="date">02.12.14 13:46</span></h4>
                            <div class="body-comment">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                            <p>Pri iudico aperiri cu. Pri semper salutatus ut, te sit erat facilisi. Ut putant ceteros iudicabit duo, homero labore fuisset vel at. 
                    Et impedit fuisset nec. Mei consul temporibus scribentur ex, consul facilisi antiopam sea ei, usu ex delectus laboramus reformidans. 
                    Te sea mutat assentior, duo ei dicat quaestio suscipiantur, feugiat tractatos conclusionemque at vis. 
                    Ut labores repudiare theophrastus eum, cum in nisl impetus eripuit.</p>
                <p>Mutat tibique vel ad, sed soluta dolorum postulant ei, ad his soluta accusam oporteat. Vide accommodare quo in, 
                    vel quot deserunt mediocritatem in. Pri ad possit definitiones. Eos indoctum consulatu no, nominavi laboramus ius ut, 
                    nam posidonium elaboraret signiferumque id.</p>
                            </div>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 btn_less" type="button">Less</button>
                        <a class="link-report" href="" data-toggle="modal" data-target="#myModal">report</a>
                    </div>
                </li>
                <li id="comment3" class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/images.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <div class="ua-comment">
                            <h4 class="media-heading"><b>User c</b><span class="date">02.12.14 13:46</span></h4>
                            <div class="body-comment">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                            <p>Pri iudico aperiri cu. Pri semper salutatus ut, te sit erat facilisi. Ut putant ceteros iudicabit duo, homero labore fuisset vel at. 
                    Et impedit fuisset nec. Mei consul temporibus scribentur ex, consul facilisi antiopam sea ei, usu ex delectus laboramus reformidans. 
                    Te sea mutat assentior, duo ei dicat quaestio suscipiantur, feugiat tractatos conclusionemque at vis. 
                    Ut labores repudiare theophrastus eum, cum in nisl impetus eripuit.</p>
                <p>Mutat tibique vel ad, sed soluta dolorum postulant ei, ad his soluta accusam oporteat. Vide accommodare quo in, 
                    vel quot deserunt mediocritatem in. Pri ad possit definitiones. Eos indoctum consulatu no, nominavi laboramus ius ut, 
                    nam posidonium elaboraret signiferumque id.</p>
                            </div>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 btn_less" type="button">Less</button>
                        <a class="link-report" href="" data-toggle="modal" data-target="#myModal">report</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <!--end row-->
</div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Report a spam</h4>
            </div>
            <div class="modal-body">
                <form class="form-modal" method="post" action="" role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <span class="text-info">Write your opinion</span>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Send</button>
            </div>
        </div>
    </div>
</div>
<?php include 'inc_footer.php'; ?>