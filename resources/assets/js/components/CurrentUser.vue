<template>
  <div class="panel-chat-user">
     <div class="panel-chat-mobile-btn" data-activates="slide-out"></div>
     <div class="panel-chat-avatar"><img src="img/3.jpg" class="a0uk" /></div>
     <div class="panel-chat-username-status">
        <div class="panel-username">{{ selecteduser.name }} </div>
        <div class="panel-status">Last seen today 17:43</div>
     </div>
  </div>
</template>

<script>
    export default {
      props:['selecteduser'],
      mounted() {
        console.log(this.selecteduser);
      }
    }
</script>
