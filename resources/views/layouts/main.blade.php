<!doctype html>
<html lang="en">

<head>
<title>:: Lucid H :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/bootstrap/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/font-awesome/css/font-awesome.min.css') !!}">
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/animate-css/animate.min.css') !!}">

<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}">
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/chartist/css/chartist.min.css') !!}">
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') !!}">
<link rel="stylesheet" href="{!! asset('lucid/assets/vendor/toastr/toastr.min.css') !!}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{!! asset('assets_hmenu/css/main.css') !!}">
<link rel="stylesheet" href="{!! asset('assets_hmenu/css/color_skins.css') !!}">
</head>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{!! asset('lucid/assets/images/logo-icon.svg') !!}" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html"><img src="{!! asset('lucid/assets/images/logo.svg') !!}" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                
            </div>

            <div class="navbar-btn">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <i class="lnr lnr-menu fa fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>
    
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <div class="navbar-collapse align-items-center collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-speedometer"></i> Dashboard
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="nav-item active"><a href="index.html">Analytical</a></li>                                    
                                <li class="nav-item"><a href="index2.html">Demographic</a></li>
                                <li class="nav-item"><a href="index3.html">Hospital</a></li>
                                <li class="nav-item"><a href="index4.html">University</a></li>
                                <li class="nav-item"><a href="index5.html">Real Estate</a></li>
                                <li class="nav-item"><a href="index6.html">Project</a></li>
                                <li class="nav-item"><a href="index7.html">Cryptocurrency</a></li>
                                <li class="nav-item"><a href="index8.html">eCommerce</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mega-menu">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-grid"></i> <span>Prosedur</span></a>
                            <div class="dropdown-menu mega-main padding-0 animated fadeIn">
                                <div class="row">
                                    <div class="col-lg-2 col-lg-auto col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Map</label></li>
                                                <li><a href="map-google.html">Google Map</a></li>
                                                <li><a href="map-yandex.html">Yandex Map</a></li>
                                                <li><a href="map-jvectormap.html">jVector Map</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><label>Chart</label></li>
                                                <li><a href="chart-morris.html">Morris</a> </li>
                                                <li><a href="chart-flot.html">Flot</a> </li>
                                                <li><a href="chart-chartjs.html">ChartJS</a> </li>                                    
                                                <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                                <li><a href="chart-peity.html">Peity</a></li>
                                                <li><a href="chart-c3.html">C3 Charts</a></li>
                                                <li><a href="chart-gauges.html">Gauges</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>File Manager</label></li>
                                                <li><a href="file-dashboard.html">Dashboard</a></li>
                                                <li><a href="file-documents.html">Documents</a></li>
                                                <li><a href="file-media.html">Media</a></li>
                                                <li><a href="file-images.html">Images</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><label>Widgets</label></li>
                                                <li><a href="widgets-statistics.html">Statistics</a></li>
                                                <li><a href="widgets-data.html">Data</a></li>
                                                <li><a href="widgets-chart.html">Chart</a></li>
                                                <li><a href="widgets-weather.html">Weather</a></li>
                                                <li><a href="widgets-social.html">Social</a></li>
                                                <li><a href="widgets-blog.html">Blog</a></li>
                                                <li><a href="widgets-ecommerce.html">eCommerce</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Blog</label></li>
                                                <li><a href="blog-dashboard.html">Dashboard</a></li>
                                                <li><a href="blog-post.html">New Post</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-details.html">Blog Detail</a></li>
                                            </ul>
                                            <ul class="list-unstyled">
                                                <li><label>App</label></li>
                                                <li><a href="app-inbox.html">Inbox</a></li>
                                                <li><a href="app-chat.html">Chat</a></li>
                                                <li><a href="app-calendar.html">Calendar</a></li>                                    
                                                <li><a href="app-contact.html">Contact list</a></li>
                                                <li><a href="app-contact-grid.html">Contact Card</a></li>
                                                <li><a href="app-taskboard.html">Taskboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4 hidden-sm">
                                        <div class="img-box" style="background-image: url({!! asset('lucid/assets/images/menu-img/1.jpg') !!})"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mega-menu">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-docs"></i> <span>Kegiatan</span></a>
                            <div class="dropdown-menu mega-main padding-0 animated fadeIn">
                                <div class="row">
                                    <div class="col-lg-6 col-md-4 hidden-sm">
                                        <div class="img-box" style="background-image: url({!! asset('lucid/assets/images/menu-img/7.jpg') !!})"></div>
                                    </div>
                                    <div class="col-lg-2 col-lg-auto col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Pages</label></li>
                                                <li><a href="page-blank.html">Blank Page</a> </li>
                                                <li><a href="page-profile.html">Profile</a></li>
                                                <li><a href="page-profile2.html">Profile</a></li>
                                                <li><a href="page-gallery.html">Image Gallery</a> </li>
                                                <li><a href="page-gallery2.html">Image Gallery</a> </li>
                                                <li><a href="page-timeline.html">Timeline</a></li>
                                                <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                                <li><a href="page-pricing.html">Pricing</a></li>
                                                <li><a href="page-invoices.html">Invoices</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Pages</label></li>
                                                <li><a href="page-invoices2.html">Invoices</a></li>
                                                <li><a href="page-search-results.html">Search Results</a></li>
                                                <li><a href="page-helper-class.html">Helper Classes</a></li>
                                                <li><a href="page-teams-board.html">Teams Board</a></li>
                                                <li><a href="page-projects-list.html">Projects List</a></li>
                                                <li><a href="page-maintenance.html">Maintenance</a></li>
                                                <li><a href="page-testimonials.html">Testimonials</a></li>
                                                <li><a href="page-faq.html">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-4">
                                        <div class="mega-list">
                                            <ul class="list-unstyled">
                                                <li><label>Tables</label></li>
                                                <li><a href="table-basic.html">Tables Example</a> </li>
                                                <li><a href="table-normal.html">Normal Tables</a> </li>
                                                <li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                                <li><a href="table-editable.html">Editable Tables</a> </li>
                                                <li><a href="table-color.html">Tables Color</a> </li>
                                                <li><a href="table-filter.html">Table Filter</a></li>
                                                <li><a href="table-dragger.html">Table dragger</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i> <span>Informasi</span></a>
                            <ul class="dropdown-menu animated bounceIn">                                    
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                                <li><a href="page-403.html">Page 403</a></li>
                                <li><a href="page-500.html">Page 500</a></li>
                                <li><a href="page-503.html">Page 503</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>    

    <div id="main-content">
        <div class="container">

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Resent Chat</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body text-center">
                            <div class="cwidget-scroll">
                                <ul class="chat-widget m-r-5 clearfix">
                                    <li class="left float-left">
                                        <img src="{!! asset('lucid/assets/images/xs/avatar2.jpg') !!}" class="rounded-circle" alt="">
                                        <div class="chat-info">       
                                            <span class="message">Hello, John<br>What is the update on Project X?</span>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="{!! asset('lucid/assets/images/xs/avatar1.jpg') !!}" class="rounded-circle" alt="">
                                        <div class="chat-info">
                                            <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                        </div>
                                    </li>
                                    <li class="left float-left">
                                        <img src="{!! asset('lucid/assets/images/xs/avatar2.jpg') !!}" class="rounded-circle" alt="">
                                        <div class="chat-info">
                                            <span class="message">That's great. Will catch you in evening.</span>
                                        </div>
                                    </li>
                                    <li class="right">
                                        <img src="{!! asset('lucid/assets/images/xs/avatar1.jpg') !!}" class="rounded-circle" alt="">
                                        <div class="chat-info">
                                            <span class="message">Sure we'will have a blast today.</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-group p-t-15">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" ><i class="icon-paper-plane"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter text here...">                                    
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data Managed</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>1,523</h2>
                                    <p>External Records</p>                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="60px" data-bar-Width="3" data-bar-Spacing="8" data-bar-Color="#00ced1">2,-1,5,6,4,8,7,-5,6,2,3,5,6,2,-3,4,-2</div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <th><i class="fa fa-circle text-success"></i></th>
                                            <td>Twitter</td>
                                            <td><span>862 Records</span></td>
                                            <td>35% <i class="fa fa-caret-up "></i></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-info"></i></th>
                                            <td>Facebook</td>
                                            <td><span>451 Records</span></td>
                                            <td>15% <i class="fa fa-caret-up "></i></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-warning"></i></th>
                                            <td>Mailchimp</td>
                                            <td><span>502 Records</span></td>
                                            <td>20% <i class="fa fa-caret-down"></i></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-danger"></i></th>
                                            <td>Google</td>
                                            <td><span>502 Records</span></td>
                                            <td>20% <i class="fa fa-caret-up "></i></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle "></i></th>
                                            <td>Other</td>
                                            <td><span>237 Records</span></td>
                                            <td>10% <i class="fa fa-caret-down"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Lucid Feeds</h2>
                        </div>
                        <div class="body">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </li>                                   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Twitter Feed</h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group">
                                    <textarea rows="3" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                </div>
                                <button class="btn btn-primary">Tweet</button>
                                <a href="javascript:void(0);">13K users active</a>
                            </form>
                            <hr>
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{!! asset('lucid/assets/images/xs/avatar2.jpg') !!}" alt="">
                                            <div class="media-body">
                                                <span class="name">@Isabella <small class="float-right">1 hours ago</small></span>
                                                <span class="message">Contrary to popular belief not simply text</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                                
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{!! asset('lucid/assets/images/xs/avatar3.jpg') !!}" alt="">
                                            <div class="media-body">
                                                <span class="name">@Alexander <small class="float-right">2 hours ago</small></span>
                                                <span class="message">Contrary to popular belief not simply text</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{!! asset('lucid/assets/images/xs/avatar4.jpg') !!}" alt="">
                                            <div class="media-body">
                                                <span class="name">@Alexander <small class="float-right">1 day ago</small></span>
                                                <span class="message">Contrary to popular belief not simply text</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                        
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card overflowhidden">
                        <div class="body top_counter abstract bg_2">
                            <div class="icon bg-transparent">
                                <img src="{!! asset('lucid/assets/images/xs/avatar2.jpg') !!}" class="rounded-circle" alt="">
                            </div>
                            <div class="content text-light">
                                <div>Team Leader</div>
                                <h6>Maryam Amiri</h6>
                            </div>
                        </div>
                        <div class="body">
                            <div class="list-group list-widget">
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-success">654</span>
                                    <i class="fa fa-envelope text-muted"></i>Inbox</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-info">364</span>
                                    <i class="fa fa-eye text-muted"></i> Profile visits</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-warning">19</span>
                                    <i class="fa fa-bookmark text-muted"></i> Bookmarks</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-warning">12</span>
                                    <i class="fa fa-phone text-muted"></i> Call</a>
                                <a href="javascript:void(0);" class="list-group-item">
                                    <span class="badge badge-danger">54</span>
                                    <i class="fa fa-comments-o text-muted"></i> Messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Lucid Activities</h2>
                        </div>
                        <div class="body">
                            <div class="timeline-item green" date-is="20-04-2018 - Today">
                                <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                                <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse animated fadeInDown m-t-10" id="collapseExample">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>                                
                            </div>

                            <div class="timeline-item blue" date-is="19-04-2018 - Yesterday">
                                <h5>Oeehhh, that's awesome.. Me too!</h5>
                                <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                    <div class="timeline_img m-b-20">
                                        <img class="w-25" src="{!! asset('lucid/assets/images/blog/blog-page-4.jpg') !!}" alt="Awesome Image">
                                        <img class="w-25" src="{!! asset('lucid/assets/images/blog/blog-page-2.jpg') !!}" alt="Awesome Image">
                                    </div>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse animated fadeInDown m-t-10" id="collapseExample1">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item warning" date-is="21-02-2018">
                                <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                                <span><a href="javascript:void(0);" title="">Gary Camara</a> San Francisco, CA</span>
                                <div class="msg">
                                    <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                    <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                    <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                                    <div class="collapse animated fadeInDown m-t-10" id="collapseExample2">
                                        <div class="well">
                                            <form>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="{!! asset('assets_hmenu/bundles/libscripts.bundle.js') !!}"></script>    
<script src="{!! asset('assets_hmenu/bundles/vendorscripts.bundle.js') !!}"></script>

<script src="{!! asset('assets_hmenu/bundles/chartist.bundle.js') !!}"></script>
<script src="{!! asset('assets_hmenu/bundles/knob.bundle.js') !!}"></script> <!-- Jquery Knob-->
<script src="{!! asset('lucid/assets/vendor/toastr/toastr.js') !!}"></script>

<script src="{!! asset('assets_hmenu/bundles/mainscripts.bundle.js') !!}"></script>
<script src="{!! asset('assets_hmenu/js/index.js') !!}"></script>
</body>
</html>
