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
   <link href="css/font-awesome.min.css" rel="stylesheet" id="style_components" type="text/css" />
</head>
<style>
.portlet.box.green {
    border: 1px solid #cfd2d3 !important;
}
.portlet.box.green>.portlet-title, .portlet.green, .portlet>.portlet-body.green {
    background-color: #cfd2d3 !important;
}
.portlet.box>.portlet-body {
    padding: 15px !important;
}
.portlet.light>.portlet-title>.actions {
    padding: 6px 4px 14px !important;
}
hr, p {
    margin: 12px 0 !important;
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
               <li class="tab tab-col"><a class="active" href="#message">Message</a></li>
               <li class="tab tab-col">
                    <router-link to="/status">Status</router-link>
               </li>
               <li class="tab tab-col">
                    <router-link to="/reports">Reports</router-link>
                </li>
            </ul>
         </div>
         <!--Panel LEFT MENU FINISHED-->
         <!--Panel Tabs STARTED-->
         <div class="panel-col" id="message">
            <ul class="tabs tabs-message">
               <li class="tab tab-col"><a class="active tabs-message-a" href="#recents">Recents</a></li>
               <li class="tab tab-col"><a class="tabs-message-a" href="#favourites">Favourites</a></li>
               <li class="tab tab-col"><a class="tabs-message-a" href="#online">Online</a></li>
            </ul>
            <!-- All friends (ChatUser component) -->
            <user-log v-on:getcurrentuser="getCurrentUser"></user-log>
         </div>
         <!--Panel Tabs FINISHED-->
      </div>
      <!--Chat left STARTED-->
      <div class="chat-right">
        <router-view :selecteduser="selecteduser" :messages="messages" :messagesent="messagesent"></router-view>
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

<script type="text/javascript">
$(function(){
  $(".tabs-main a").click(function(){
    var href = $(this).attr("href");
    if(href == "#message") {
      $("#message").show();
      $("[href='#message']").addClass("active");
      // $(this).addClass("active");
    } else {
      $("#message").hide();
      $("[href='#message']").removeClass("active");
      // $(this).removeClass("active");
    }
  });
});  
</script>