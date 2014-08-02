<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="img/content/profile/stock-photo-business-woman-portrait-crossed-arms-128709044.jpg" alt="stock-photo-business-woman-portrait-crossed-arms-128709044"/>
            </div>
        </div>
        <div class="col-xs-12 col-md-9">
            <table class="table col-sm-5 b">
                <tbody>
                    <tr>
                        <td>Expertise</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Salary Range</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-sm-7">
                Description
            </div>
        </div>
    </div><!--end row-->
    <div class="row">
        <div class="user-timeline">
            <ul class="media-list">
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/creative-person.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="" href=""><b>User a</b></a><span class="date">02.12.14 13:46</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                    </div>
                    <a class="link-report" href="">report</a>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/imgres.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="" href=""><b>User a</b></a><span class="date">02.12.14 13:46</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                    </div>
                    <a class="link-report" href="">report</a>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/user.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="" href=""><b>User b</b></a><span class="date">02.12.14 13:46</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                    </div>
                    <a class="link-report" href="">report</a>
                </li>
                <li class="media">
                    <a class="pull-left" href="#">
                        <img class="img-circle" src="img/content/profile/images.jpg" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a class="" href=""><b>User c</b></a><span class="date">02.12.14 13:46</span></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit</p>
                    </div>
                    <a class="link-report" href="">report</a>
                </li>
            </ul>
            <div id="respond">
                <div id="addCommentSection">
                    <h4 id="leavereply">Add Comment</h4>

                    <form id="" class="form-horizontal" action="" method="post">
                        <div class="form-group col-md-5">
                        <div class="form-group">
                            <input class="form-control col-sm-2 " type="text" name="author" id="author" value="" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email (will not be published)">
                        </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment" id="comment" rows="10" tabindex="4"></textarea>
                        </div>

                        <p class="text-info form-group"><small><b>HTML is escaped automatically.</b> Surround code blocks with <b>&lt;pre&gt;&lt;/pre&gt;</b> for readability.<br>
                                Perks:&nbsp;&nbsp;&nbsp;<b>**bold**</b>&nbsp;&nbsp;&nbsp;<i>__italics__</i>&nbsp;&nbsp;&nbsp;<span style="color:#008DE6">[some text](http://example.com)</span> for links</small></p>

                                <div class="form-group">
                            <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="btn btn-primary">
                            <input type="hidden" name="comment_post_ID" value="1200" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">

                            <div class="cancel-comment-reply">
                                <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">Cancel Reply</a>
                            </div>
                        </div>

                        <p style="display: none;"><input type="hidden" id="" name="" value=""></p>
                        <p style="display: none;"><input type="hidden" id="" name="" value=""></p>

                    </form>
                </div>
            </div><!--end respond-->
        </div>
    </div>
    <!--end row-->
</div>
<?php include 'inc_footer.php'; ?>