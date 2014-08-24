<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class=""></div>
        <div class="col-xs-12 col-sm-4 col-md-3 well">
            <form class="form-horizontal col-xs-12" method="post" action="" role="form">
                <label>Narrow result by</label>
                <div class="form-group">
                    <select class="form-control styled" name="prv">
                        <option value="">Province 1</option>
                        <option value="">Province 2</option>
                        <option value="">Province 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control styled" name="cty">
                        <option value="">City 1</option>
                        <option value="">City 2</option>
                        <option value="">City 3</option>
                    </select>
                </div>
                <label>Sort by salary</label>
                <div class="form-group">
                    <select class="form-control styled" name="srt">
                        <option value="">Highest</option>
                        <option value="">Lowest</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-default" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <div class="col-sm-8 col-md-9">
            <ul id="search-result" class=" media-list">
                <li class="media result-1">
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="img/content/profile/creative-person.jpg" style="width: 100px; height: 100px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="">Suparjo</a></h4>
                        <div class="result-toggle">
                            <article>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </article>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 bt9n_less" type="button">Less</button>
                        <div class="upfix_1 ket-star">
                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 prefix_0 pasfix_0 pupline">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>
                            <div class="col-xs-9 col-sm-8 col-md-9 col-lg-10 prefix_0">
                                <b><span class="pupline">IDR 500.000 per Jam</span> Bandung, Jawa Barat</b>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="media result-2">
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="img/content/profile/creative-person.jpg" style="width: 100px; height: 100px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="">Suparjo</a></h4>
                        <div class="result-toggle">
                            <article>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </article>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 btn_less" type="button">Less</button>
                        <div class="upfix_1 ket-star">
                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 prefix_0 pasfix_0 pupline">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>
                            <div class="col-xs-9 col-sm-8 col-md-9 col-lg-10 prefix_0">
                                <b><span class="pupline">IDR 500.000 per Jam</span> Bandung, Jawa Barat</b>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="media result-3">
                    <a class="pull-left" href="#">
                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="img/content/profile/creative-person.jpg" style="width: 100px; height: 100px;">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="">Suparjo</a></h4>
                        <div class="result-toggle">
                            <article>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <p>tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </article>
                        </div>
                        <button class="btn btn-info btn-xs append_top_1 btn_read_more" type="button">More...</button>
                        <button class="btn btn-info btn-xs append_top_1 btn_less" type="button">Less</button>
                        <div class="upfix_1 ket-star">
                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 prefix_0 pasfix_0 pupline">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </div>
                            <div class="col-xs-9 col-sm-8 col-md-9 col-lg-10 prefix_0">
                                <b><span class="pupline">IDR 500.000 per Jam</span> Bandung, Jawa Barat</b>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>