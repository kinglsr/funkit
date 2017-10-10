<template>
<!--Chat HEADER STARTED-->
<div>
         <div class="panel-header-chat">
            <!--to get all information of current user (CurentUser component)-->
            <current-user :selecteduser="selecteduser"></current-user>
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
            <!-- All chat messsages here (ChatLog Component) -->
            <chat-log :messages="messages"></chat-log>
        </div>
         <!--Conversation FINISHED-->

         <!--Message Text Box STARTED-->
         <div class="message-textbox">
            <chat-composer v-on:messagesent="addMessage" :selecteduser="selecteduser"></chat-composer>
         </div>
         <!--Message Text Box FINISHED-->
         </div>
</template>

<script>
    export default {
    	props:['selecteduser','messages','addMessage'],
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
            
            }
        }
    }
</script>