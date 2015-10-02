<html>
<head>
    <title>Kraken</title>

    <!-- Use the correct meta names below for your web application
         Ref: http://davidbcalhoun.com/2010/viewport-metatag-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Basic Styles -->

    <meta name="google-signin-clientid" content="330710704611-qc5qdbgl6qsu5fpu6ihv621d2rhhqhur.apps.googleusercontent.com" />
    <meta name="google-signin-scope" content="https://www.googleapis.com/auth/plus.login" />
    <meta name="google-signin-requestvisibleactions" content="http://schema.org/AddAction" />
    <meta name="google-signin-cookiepolicy" content="single_host_origin" />
    <!-- loads the render() function for google sign in -->

    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/bootstrap.min.css"; ?>" >
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/font-awesome.min.css"; ?>" >
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/my_style.css"; ?>" >


    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url() . "styling/css/error_page.css"; ?>" > -->
    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/smartadmin-production-plugins.min.css"; ?>" >
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/smartadmin-production.min.css"; ?>" >
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/smartadmin-skins.min.css"; ?>" >
    <link rel="stylesheet" type="text/css" media="screen" href="styling/css/jasny-bootstrap.css"; ?>" >

    <script src='styling/js/libs/jquery-2.1.1.min.js'</script>
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>
    <!--    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
    <link rel="shortcut icon" type="image/png" href='images/favicon_sm.png'/>
</head>

<body>
<header class="navbar vermilion-bar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapsing">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar nav-bar-icon"></span>
                <span class="icon-bar nav-bar-icon"></span>
                <span class="icon-bar nav-bar-icon"></span>
            </button>
            <a href="" class="navbar-brand"><img src='images/logo.png' width="108" height="37" style="margin-top: -8px"></a>

        </div>


        <div class="collapse navbar-collapse" id="navbar-collapsing" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="margin-right-5 hidden-xs add-btn" style="display: none">
                    <button type="button" style="margin-top: 12px" class="btn btn-labeled btn-default navbar-btn" data-toggle="modal"
                            data-target="#post_modal">
                        <span class="btn-label"><i class="fa fa-pencil"></i></span> Demand</button>
                </li>
                <li><a href=""><span class="fa fa-home fa-lg"></span> Home</a></li>
                <!-- <li><a href="#"><i class="fa fa-bullhorn fa-lg"></i> Announcements</a></li> -->

                <li class="dropdown" style="margin-top: 12px">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a>
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">Middle aligned media</h4>
                            ...
                          </div>
                        </div>

                    </li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                  </ul>
                </li>
                    <li class="dropdown">
                        <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                           role="menuitem" aria-expanded="false" class="nav-prof-pic">
                            <img src="http://localhost/opibox/images/profile_pic/17ceb388d0282f00e450634b00c9f9b2.jpg" alt=""
                                 class="img-rounded small-pic">
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><a href=""><i class="fa fa-user"></i>
                                    Victor Njoroge </a></li>
                            <li><a href=""><i
                                        class="fa fa-gear"></i> Account</a></li>
                            <li><a href=""><i class="fa fa-sign-out"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
            </ul>
        </div>

    </div>
</header>

<div class="container">
    <div class="row">
    <div class="col-md-8">

        <!--Post Form-->

        <form action="javascript:void(0)" method="post" accept-charset="utf-8" class="smart-form post-form animated fadeIn"
              id="post_form"
              name="post_form">
            <fieldset class="padding-5">
                <section>
                    <label class="textarea">
                        <i class="icon-append fa fa-edit"></i>
                                <textarea rows="4" placeholder="Type your demand here..." class="post-textarea"
                                          name="post_text"></textarea>
                    </label>
                    <input type="hidden" name="user_id" value="">
                </section>
            </fieldset>
            <footer>
                <button class="btn btn-vermilion btn-labeled" type="submit" style="padding: 0 12px">
                    <span class="btn-label"><i class="fa fa-edit"></i></span>Post
                </button>
            </footer>
        </form>


        <!-- Posts List-->

            <br>
            <div class="panel panel-default animated fadeInUp">
                <!-- Post Description -->
                <div class="panel-body my_panel">
                    <div class="row">

                        <!-- Poster details -->
                        <div class="col-xs-3 pull-left">
                            <div class="row text-align-center">
                                <div class="col-sm-12">
                                    <a href="#">
                                        <img src="http://localhost/opibox/images/profile_pic/17ceb388d0282f00e450634b00c9f9b2.jpg" class="img-circle post-pic">
                                    </a>
                                </div>
                            </div>
                            <div class="row text-align-center">
                                <div class="col-xs-12">
                                    <span><a
                                            href=""><strong>Victor Njoroge</strong></a></span>
                                </div>
                            </div>

                            <div class="row text-align-center hidden-xs">
                                <div class="col-xs-12">
                                <span class="font-xs text-muted">M1
                                    Student - Innovator Course</span>
                                </div>
                            </div>

                            <div class="row text-align-center">
                                <div class="col-xs-12">
                                    <small class="ultra-light">Sptember 25th 2015</small>
                                </div>
                            </div>
                        </div>
                        <!-- End of Poster details -->

                        <!-- Post Vote UP/Down -->
                        <div class="col-xs-2 pull-right text-align-center">

                            <form action="javascript:void(0)" name="vote_handles_$post_id" method="post"
                                  id="vote_handles_$post_id" enctype="multipart/form-data">
                                <div class="row font-xl">
                                    <div class="col-xs-12">
                                        <button id="vote_up_$post_id" name="vote_up" type="submit"
                                                class="btn btn-success btn-circle $disabled">
                                            <i class="fa fa-chevron-up"></i>
                                        </button>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id"
                                       value="$logged_userid;">
                                <input type="hidden" name="post_id" value="post_id">

                                <div class="row font-xl">
                                    <div class="col-xs-12">
                                        <span id="vote_weight_$post_id">2</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button id="vote_down_$post_id" name="vote_down" type="submit"
                                                class="btn btn-danger btn-circle disabled">
                                            <i class="fa fa-chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>


                            <script>

                                //Vote Up button Codes
                                $("#vote_up_$post_id").click(function () {
                                    var form_id = $("#vote_handles_$post_id");
                                    var weight = parseInt($("#vote_weight_$post_id").text());
                                    $("#vote_weight_$post_id").text(weight + 1);

                                    form_id.submit(function (event) {
                                        $.ajax({
                                            type: "POST",
                                            url: "",
                                            data: $(this).serialize(),
                                            success: function (data) {
                                                //alert(incr+1);
                                                $('#vote_up_$post_id').addClass('disabled');
                                                $('#vote_down_$post_id').addClass('disabled');
                                            }
                                        });
                                    });
                                });

                                //Vote Down Codes
                                $("#vote_down_$post_id").click(function () {
                                    var form_id = $("#vote_handles_$post_id");
                                    var weight = parseInt($("#vote_weight_$post_id").text());
                                    $("#vote_weight_$post_id").text(weight - 1);

                                    form_id.submit(function (event) {

                                        $.ajax({
                                            type: "POST",
                                            url: "",
                                            data: $(this).serialize(),
                                            success: function (data) {
                                                //alert(incr+1);
                                                $('#vote_up_$post_id').addClass('disabled');
                                                $('#vote_down_$post_id').addClass('disabled');
                                            }
                                        });
                                    });
                                });
                            </script>

                        </div>
                        <!-- End of Post Vote UP/Down -->

                        <!-- Post Description -->
                        <div class="col-xs-7 ">
                          
                                <p>Perspiciatis. Luctus porttitor laudantium deserunt reprehenderit dis class impedit necessitatibus suspendisse ligula dicta eros aliquet purus morbi? Tristique? Necessitatibus, phasellus, tempora? Cupiditate fringilla provident facilis nostrud ab odio integer wisi.</p>
                        </div>
                        <!-- End of Post Text-->
                    </div>
                </div>
                <!-- End of Post Description -->

                <!-- Post Comments -->
                <div class="panel-footer">
                  
                            <div class="comments">

                              

                                <div class="row">
                                    <div class="col-xs-1">
                                        <img src="http://localhost/opibox/images/profile_pic/17ceb388d0282f00e450634b00c9f9b2.jpg"
                                             alt="" class="img-rounded small-pic">
                                    </div>

                                    <div class="col-xs-11">
                                        <p>
                                            <strong>
                                                <a href="">
                                                    Victor Njoroge
                                                </a>
                                            </strong>
                                        </p>
                                        <!--The Comment text-->
                                        Commenting comments
                                    </div>
                                </div>

                            </div>
              
               
                    <label class="input">
                        <i class="icon-append fa fa-comment"></i>
                        <input type="text" name="comment_text" placeholder="Comment..." autocomplete="off"/>
                        <b class="tooltip tooltip-bottom-right">Press Enter to Comment</b>
                    </label>
                    <input type="hidden" name="user_id" id="user_id"
                           value="">
                    <input type="hidden" name="post_id" id="post_id"
                           value="">
                </div>
                <!-- End of Post Comments -->

            </div>

            <!-- aJax way of saving -->
            <script type="text/javascript">
                $(document).ready(function () {
                    //pageSetUp();

                    $("#comment_$post_id>").validate({

                        // Rules for form validation
                        rules: {
                            comment_text: {
                                required: true
                            }
                        },
                        // Messages for form validation
                        messages: {
                            comment_text: {
                                required: 'You cannot post an empty form, please first enter a comment'
                            }
                        },
                        // Do not change code below
                        errorPlacement: function (error, element) {
                            error.insertAfter(element.parent());
                        },

                        // if the validation passes, submit using ajax
                        submitHandler: function (comment_form) {
                            $.ajax({
                                type: "POST",
                                url: "",
                                data: $(comment_form).serialize(),
                                success: function (data) {
                                    window.location.reload();
                                }
                            });

                        }
                    });
                });
            </script>
            <!-- END aJax way of saving -->

    </div>

    <!-- This is the user side-bar-->
    <div class="col-md-4 hidden-sm hidden-xs animated fadeIn">
        <div class="row text-align-center">
            <div class="col-xs-12">
                <img src="http://localhost/opibox/images/profile_pic/17ceb388d0282f00e450634b00c9f9b2.jpg" alt=""
                     class="img-circle text-align-center prof-pic">
            </div>
        </div>
        <div class="row text-align-center">
            <div class="col-xs-12">
                <h1 class="txt-color-blueDark">
                    <a href="">Victor<span
                            class="semi-bold">Njoroge</span></a>
                    <br>
                    <small>M1 Student - Innovators Course</small>
                </h1>
            </div>
        </div>

        <div class="row text-align-center">
            <div class="col-xs-12">
                <p>
                    <span class="label label-warning font-sm">Profession</span> |
                    <span class="badge bg-color-red font-sm">232</span>
                    <small>Points</small>
                </p>

            </div>
        </div>

        <br>

        <div class="text-align-center">
            <ul class="list-inline">
                <li class="text-warning"><a href="#"><i class="fa fa-briefcase"></i> Go to Moodle</a></li>
                <li class="text-danger"><a href="#"><i class="fa fa-bullhorn"></i> Anouncements </a></li>
                <li class="txt-color-greenDark"><a href="#"><i class="fa fa-globe"></i> KIC Website</a></li>
            </ul>
        </div>
    </div>

</div>



</div> <!--close container-->

<script src='styling/js/placeholder/holder.js'</script>
<script src='styling/js/bootstrap/bootstrap.min.js'</script>

<!--IMAGE HOLDER JS-->
<script src='styling/js/plugin/jquery-validate/jquery.validate.min.js'</script>
<script src='styling/js/jasny-bootstrap.min.js'</script>

<!--Collapse JS-->
<script src='styling/js/bootstrap/collapse.js'</script>

</body>

<script>

    $(document).ready(function () {

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.add-btn').fadeIn();
            } else {
                $('.add-btn').fadeOut();
            }
        });

        //Click event to scroll to top
//        $('#add-btn').click(function(){
//            $('html, body').animate({scrollTop : 0},800);
//            return false;
//        });

    });
</script>

</html>