<template>
<div>
    <div class="msg">
      <div class="message-reply-body friend">
         <div class="message-text">{{ message.message }}</div>
         <div class="message-time">{{ formatTime(message.created) }}</div>
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
        },
        methods: {
          // to format time
          formatTime (time) {
            let previousTime = moment(time,'YYYY-MM-DD HH:mm:ss').format('x');
            let timeDifference = moment(previousTime,'x').fromNow();
            return timeDifference;
          }
        }
    }
</script>
