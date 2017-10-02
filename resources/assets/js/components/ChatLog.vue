<template>
<div class="messages-body">
	<chat-message v-for="message in messages" :message="message" :key="message.id"></chat-message>
	<!-- <div v-show="messages.length === 0">Start new conversation...</div> -->
</div>    	
</template>

<script>
    export default {
        props:['messages'],
        mounted() {
	    	// console.log(this.messages);
	    }
    }
</script>
