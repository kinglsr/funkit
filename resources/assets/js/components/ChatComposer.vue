<template>
    <div>
    <div class="row">
        <div class="col-md-12 buttons-section">
            <div class="reply-btn reply-btn-pink" @click="sendMessage"></div>
            <div class="reply-btn reply-btn-red" @click="sendMessage"></div>
            <div class="reply-btn reply-btn-orange" @click="sendMessage"></div>
        </div>
    </div>
    <div class="message-box">
       <div class="smile-button"></div>
       <div class="reply-textBox">
          <textarea name="reply" class="reply" placeholder="Reply message..." v-model="messageText" @keyup.enter="sendMessage"></textarea>
       </div>
       <div class="reply-btn" @click="sendMessage"></div>
    </div>
</div>
</template>

<script>
    export default {
        props:['selecteduser'],
        data() {
            return {
                messageText: '',
                authUser:{name:''},
                errors:{},
                message:'',
                title:'',
                type:4,
                allowedExtensions:['pdf','jpg','jpeg','png','zip'],
                baseUrl:$("#baseUrl").val()
            }
        },
        methods: {
            /**
             * send message
             * @return void
             */
            sendMessage() {
                let data = {message:this.messageText};
                if(this.messageText != "") {

                    this.$emit('messagesent',{
                        message:this.messageText,
                    });
                }
                this.messageText = '';
            }
        },
        mounted() {
            // get auth user
            axios.get(this.baseUrl+'/authUser').then( response=> {
                let user = response.data;
                this.authUser.name = user.name;
            });
        }
    }
</script>