<template>
<div>
    <div class="msg">
      <div class="message-reply-body friend">
         <div class="message-text">{{ message.message }}</div>
         <div class="message-time">10:11</div>
      </div>
    </div>
    <!--Text Message FINISHED-->
</div>
</template>

<script>
    export default {
        props:['message'],
        mounted() {
            // console.log(this.message);
        }
    }
</script>
