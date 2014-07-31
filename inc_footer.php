            <footer id="footer">
                Copyright @Kuskas
            </footer>
        </div>
        <div class="modal fade" id="popupRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabelRegister" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 id="myModalLabel" class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-modal" method="post" action="" name="registerForm">
                            <p><input type="text" class="span3 form-control" name="email" id="email" placeholder="Enter Email" value=""></p>
                            <p><input type="password" class="span3 form-control" id="registerPassword" name="registerPassword" placeholder="Enter Password"></p>
                            <p><div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> I agree
                                </label>
                            </div></p>
                            <p><button type="submit" class="btn btn-success btn-block text-center">Get started</button> </p>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="popupLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 id="myModalLabelLogin" class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-modal" method="post" action="" name="loginForm">
                            <p><input type="text" class="span3 form-control" name="email" id="email" placeholder="Enter Email" value=""></p>
                            <p><input type="password" class="span3 form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password"></p>
                            <p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me next time
                                    </label>
                                </div>
                            </p>
                            <p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="keep-login"> Keep Login
                                    </label>
                                </div>
                            </p>
                            <p><button type="button" class="btn btn-success btn-block text-center" onclick="window.location = 'landing-page-1.php';">Sign in</button> </p>
                            <p class="text-center"><a href="">Forgot Password</a></p>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script type="text/javascript" src="js/jquery_1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/sly.js"></script>
        <script type="text/javascript" src="js/horizontal.js"></script>
        <script type="text/javascript" src="js/jquery_chainedmenu.js"></script>
        <script type="text/javascript" src="js/jquery_config-select.js"></script>
        <script type="text/javascript" src="js/function.js"></script>
    </body>
</html>