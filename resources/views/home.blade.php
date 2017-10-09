<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="theme-color" content="#8e24aa">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Funkit || Complete Chat Application</title>
   <link rel="stylesheet" type="text/css" href="css/chat.css" media="screen,projection" />
   <link rel="stylesheet" type="text/css" href="css/hover.css" />
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   <link href="css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
   <link href="css/font-awesome.min" rel="stylesheet" id="style_components" type="text/css" />
</head>
<style>
.portlet.box.green {
    border: 1px solid #cfd2d3 !important;
}
.portlet.box.green>.portlet-title, .portlet.green, .portlet>.portlet-body.green {
    background-color: #cfd2d3 !important;
}
.portlet.box>.portlet-body {
    padding: 5px !important;
}
.portlet.light>.portlet-title>.actions {
    padding: 6px 4px 14px !important;
}
</style>
<body style="background-color:#0094EA;">

   <div class="chat-container" id="app">
      <!--some hidden constants starts-->
      <input type="hidden" value="{{ url('/') }}" id="baseUrl"/>
      <!--some hidden constants ends-->
      <!--Chat left FINISHED-->
      <div class="chat-left fixed" id="slide-out">
         <!--Panel LOGO STARTED-->
         <div class="panel-header">
            <div class="panel-header-main-menu"></div>
         </div>
         
         <!--Panel LOGO FINISHED-->
         <!--Panel LEFT MENU STARTED-->
         <div class="panel-header panel-flex">
            <ul class="tabs tabs-main">
               <li class="tab tab-col"><a class="active" data-href="#chat-tabs" href="#chat-tabs">Message</a></li>
               <li class="tab tab-col">
                  <a href="#/status">Status</a>
               </li>
               <li class="tab tab-col"><a href="#/reports">Reports</a></li>
            </ul>
         </div>
         <!--Panel LEFT MENU FINISHED-->
         <!--Panel Tabs STARTED-->
         <div class="panel-col" id="chat-tabs">
            <ul class="tabs tabs-message">
               <li class="tab tab-col"><a class="active" href="#recents">Recents</a></li>
               <li class="tab tab-col"><a href="#favourites">Favourites</a></li>
               <li class="tab tab-col"><a href="#online">Online</a></li>
            </ul>
            <!-- All friends (ChatUser component) -->
            <user-log v-on:getcurrentuser="getCurrentUser"></user-log>
         </div>
         <!--Panel Tabs FINISHED-->
      </div>
      <!--Chat left STARTED-->
      <div class="chat-right">
      <div class="messages--wrap">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-paper-plane font-yellow-casablanca"></i>
                    <span class="caption-subject bold font-yellow-casablanca uppercase"> Status </span>
                    <span class="caption-helper">post new status...</span>
                </div>
                <div class="actions">
                    <button class="btn btn-sm grey-cascade" type="submit"><i class="fa fa-file-text-o"></i> File</button>
                    <button class="btn btn-sm dark" type="submit"><i class="fa fa-file-text-o"></i> Image / Video</button>
                     <button class="btn btn-sm green" type="submit"><i class="fa fa-plus"></i> Upload Status</button>
      
                </div>
            </div>
            <div class="portlet-body">
                <div class="form-group form-md-line-input">
                    <textarea class="form-control" rows="1"></textarea>
                </div>
            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
</div>
<div class="row">
<div class="col-lg-12 col-xs-12 col-sm-12">
    <div class="portlet light bordered">
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active" id="portlet_comments_1">
                    <!-- BEGIN: Comments -->
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar1.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Michael Baker</span>
                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                </div>
                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar6.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                </div>
                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Comments -->
                </div>
                <div class="tab-pane" id="portlet_comments_2">
                    <!-- BEGIN: Comments -->
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar4.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Michael Baker</span>
                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                </div>
                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar8.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                </div>
                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar6.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Natasha Kim</span>
                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                </div>
                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar1.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                </div>
                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Comments -->
                </div>
            </div>
        </div>
    </div>

    <div class="portlet light bordered">
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active" id="portlet_comments_1">
                    <!-- BEGIN: Comments -->
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar1.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Michael Baker</span>
                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                </div>
                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar6.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                </div>
                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Comments -->
                </div>
                <div class="tab-pane" id="portlet_comments_2">
                    <!-- BEGIN: Comments -->
                    <div class="mt-comments">
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar4.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Michael Baker</span>
                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                </div>
                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar8.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                </div>
                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar6.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Natasha Kim</span>
                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                </div>
                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-comment">
                            <div class="mt-comment-img">
                                <img src="assets/pages/media/users/avatar1.jpg"> </div>
                            <div class="mt-comment-body">
                                <div class="mt-comment-info">
                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                </div>
                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                <div class="mt-comment-details">
                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                    <ul class="mt-comment-actions">
                                        <li>
                                            <a href="#">Quick Edit</a>
                                        </li>
                                        <li>
                                            <a href="#">View</a>
                                        </li>
                                        <li>
                                            <a href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Comments -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
         <!--Chat HEADER STARTED-->
         <!-- <div class="panel-header-chat"> -->
            <!--to get all information of current user (CurentUser component)-->
            <!-- <current-user :selecteduser="selecteduser"></current-user> -->
            <!--Current Chat Controls STARTED-->
            <!-- <div class="panel-chat-controls">
               <div class="panel-control-col">
                  <div class="list-chat-send-message" data-activates='list-chat-send-message'></div>
               </div>
               <div class="panel-control-col">
                  <div class="list-chat-message-control" data-activates='panel-dropdown-control'></div>
               </div>
            </div> -->
            <!--Current Chat Controls FINISHED-->
         <!-- </div> -->
         <!--Chat HEADER FINISHED-->
         <!--Conversation STARTED-->
         <!-- <div class="messages--wrap"> -->
            <!-- All chat messsages here (ChatLog Component) -->
            <!-- <chat-log :messages="messages"></chat-log> -->
        <!-- </div> -->
         <!--Conversation FINISHED-->

         <!--Message Text Box STARTED-->
         <!-- <div class="message-textbox">
            <chat-composer v-on:messagesent="addMessage" :selecteduser="selecteduser"></chat-composer>
         </div> -->
         <!--Message Text Box FINISHED-->
      </div>
   </div>

   <!--Panel DropDown menus STARTED-->
   <div class="panel-dropdown-content" id="list-chat-send-message">
      <div class="panel-item">
         <div class="panel-image"></div>
      </div>
      <div class="panel-item">
         <div class="panel-photo"></div>
      </div>
      <div class="panel-item">
         <div class="panel-file"></div>
      </div>
      <div class="panel-item">
         <div class="panel-music-icon"></div>
      </div>
      <div class="panel-item">
         <div class="panel-video-icon"></div>
      </div>
      <div class="panel-item">
         <div class="panel-location-icon"></div>
      </div>
   </div>
   <div class="panel-dropdown-control" id="panel-dropdown-control">
      <div class="dropdown-control"><a href="#">User Profile</a></div>
      <div class="dropdown-control"><a href="#">Make a Favourite</a></div>
      <div class="dropdown-control"><a href="#">Clear Conversation</a></div>
      <div class="dropdown-control"><a href="#">Block User</a></div>
   </div>
   <!--Panel DropDown Menus FINISHED-->
</body>

</html>


<script src="js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/audio.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/elastic.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>