<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="theme-color" content="#8e24aa">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <title>AsMoz Chat || Social Networking Template</title>
   <link rel="stylesheet" type="text/css" href="css/chat.css" media="screen,projection" />
   <link rel="stylesheet" type="text/css" href="css/hover.css" />
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
   <script type="text/javascript" src="js/audio.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
   <script type="text/javascript" src="js/elastic.min.js"></script>
   <script type="text/javascript" src="js/main.js"></script>
   <script type="text/javascript">
   </script>

</head>

<body style="background-color:#0094EA;">

   <div class="chat-container">
      <!--Chat left FINISHED-->
      <div class="chat-left fixed" id="slide-out">
         <!--Panel LOGO STARTED-->
         <div class="panel-header">
            <div class="panel-header-main-menu"></div>
         </div>
         
         <!--Panel LOGO FINISHED-->
         <!--Panel LEFT MENU STARTED-->
         <div class="panel-header panel-flex">
            <div class="panel-menu-list">
               <div class="panel-menu">
                  <a href="index.html">
                     <div class="p-menu-item panel-home"></div>
                  </a>
               </div>
               <div class="panel-menu">
                  <a href="notifications.html">
                     <div class="p-menu-item panel-notifications"></div>
                  </a>
               </div>
               <div class="panel-menu">
                  <a href="videos.html">
                     <div class="p-menu-item panel-videos"></div>
                  </a>
               </div>
               <div class="panel-menu">
                  <a href="music.html">
                     <div class="p-menu-item panel-music"></div>
                  </a>
               </div>
               <div class="panel-menu">
                  <a href="photos.html">
                     <div class="p-menu-item panel-images"></div>
                  </a>
               </div>
               <div class="panel-menu panel-search"></div>
            </div>
         </div>
         <!--Panel LEFT MENU FINISHED-->
         <!--Panel Tab Menu STARTED-->
         <div class="panel-header">
            <ul class="tabs">
               <li class="tab tab-col"><a class="active" href="#recents">Recents</a></li>
               <li class="tab tab-col"><a href="#favourites">Favourites</a></li>
               <li class="tab tab-col"><a href="#online">Online</a></li>
            </ul>
         </div>
         <!--Panel Tab menu FINISHED-->
         <!--Panel Tabs STARTED-->
         <div class="panel-col" id="chat-tabs">
            <div id="recents" class="recents">
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/1.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Asuman</div>
                     <div class="recent-user-message">Are you still on there</div>
                  </div>
                  <div class="message-count">
                     <div class="count">9+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-offline"></div>
                  <div class="recent-avatar"><img src="img/2.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Sadenur</div>
                     <div class="recent-user-message">owwww! Nice picture..</div>
                  </div>
                  <div class="message-count">
                     <div class="count">2</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-away"></div>
                  <div class="recent-avatar"><img src="img/3.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Çikolata</div>
                     <div class="recent-user-message">I like chocolate</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/4.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Lokman Hekim</div>
                     <div class="recent-user-message">Incredible performance man. Congra...</div>
                  </div>
               </div>
            </div>
            <div id="favourites" class="favourites">
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/5.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">John Doe</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">9+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-offline"></div>
                  <div class="recent-avatar"><img src="img/3.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Steve</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">9+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-away"></div>
                  <div class="recent-avatar"><img src="img/4.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">ShadowMan</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">1+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/1.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Marvel</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">5+</div>
                  </div>
               </div>
            </div>
            <div id="online" class="online">
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/2.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Kentaki</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">8+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-offline"></div>
                  <div class="recent-avatar"><img src="img/4.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Mustafa</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">5+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status-away"></div>
                  <div class="recent-avatar"><img src="img/5.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Tevfik</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">7+</div>
                  </div>
               </div>
               <div class="recent-user">
                  <div class="status"></div>
                  <div class="recent-avatar"><img src="img/3.jpg" class="a0uk" /></div>
                  <div class="chat-name-recent-message">
                     <div class="recent-user-name">Tuncay</div>
                     <div class="recent-user-message">This is test message from this user</div>
                  </div>
                  <div class="message-count">
                     <div class="count">3+</div>
                  </div>
               </div>
            </div>
         </div>
         <!--Panel Tabs FINISHED-->
      </div>
      <!--Chat left STARTED-->
      <div class="chat-right">
         <!--Chat HEADER STARTED-->
         <div class="panel-header-chat">
            <!--Current Username Avatar Writing Status STARTED-->
            <div class="panel-chat-user">
               <div class="panel-chat-mobile-btn" data-activates="slide-out"></div>
               <div class="panel-chat-avatar"><img src="img/3.jpg" class="a0uk" /></div>
               <div class="panel-chat-username-status">
                  <div class="panel-username">Mustafa Öztürk</div>
                  <div class="panel-status">Last seen today 17:43</div>
               </div>
            </div>
            <!--Current Username Avatar Writing Status FINISHED-->
            <!--Current Chat Controls STARTED-->
            <div class="panel-chat-controls">
               <div class="panel-control-col">
                  <div class="list-chat-send-message" data-activates='list-chat-send-message'></div>
               </div>
               <div class="panel-control-col">
                  <div class="list-chat-message-control" data-activates='panel-dropdown-control'></div>
               </div>
            </div>
            <!--Current Chat Controls FINISHED-->
         </div>
         <!--Chat HEADER FINISHED-->
         <!--Conversation STARTED-->
         <div class="messages--wrap">
            <div class="messages-body">
               <!--Text Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body friend">
                     <div class="message-text">Hi, Mustafa how are you?</div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Text Message FINISHED-->
               <!--Image Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body friend">
                     <div class="message-text"><img src="img/4.gif" /></div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Image Message FINISHED-->
               <!--Audio Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body friend">
                     <div class="message-text">
                        <div class="musicAudio"><audio id="audio-player" src="mp3/Drake-OneDanceft.WizkidKyla(Lyric).mp3" type="audio/mp3" controls="controls"></audio></div>
                     </div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Audio Message FINISHED-->
               <!--Video Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body you_">
                     <div class="message-text">
                        <div class="VideoMessage">
                           <video width="100%" height="200" src="media/echo-hereweare.mp4" type="video/mp4" id="player1" class="mediaVideo" poster="media/echo-hereweare.jpg" controls="controls" preload="none"></video>
                        </div>
                     </div>
                     <div class="message-text">
                        Whatch this vieo body <img src="css/sticker/faceB-fs10.png" class="sticker" /> I like it so much i think you like it tooo <img src="css/emoji/face-w15.png" class="emoji" />
                     </div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Video Message FINISHED-->
               <!--Text Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body you_">
                     <div class="message-text">Hi i am good how are you too ?</div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Text Message FINISHED-->
               <!--Text Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body you_">
                     <div class="message-text">Nice picture thanks for sharing ! <img src="css/emoji/face-w1.png" class="emoji" /></div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Text Message FINISHED-->
               <!--Text Message STARTED-->
               <div class="msg">
                  <div class="message-reply-body friend">
                     <div class="message-text">No problem bro, i am happy to you like it. I found it from tumblr it is so cool <img src="css/emoji/face-w16.png" class="emoji" /></div>
                     <div class="message-time">10:11</div>
                  </div>
               </div>
               <!--Text Message FINISHED-->
            </div>
         </div>
         <!--Conversation FINISHED-->
         <!--Message Text Box STARTED-->
         <div class="message-textbox">
            <div class="message-box">
               <div class="smile-button"></div>
               <div class="reply-textBox">
                  <textarea name="reply" class="reply" placeholder="Reply message..."></textarea>
               </div>
               <div class="reply-btn"></div>
            </div>
         </div>
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
