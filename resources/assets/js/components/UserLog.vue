<template>
    <div class="user-log"> 
      <div id="recents" class="recents">
         <div class="recent-user"  v-for="user in users" :user="user"  v-bind:key="user.id" @click="activateUser(user)" :id="user.id">
            <div class="status"></div>
            <div class="recent-avatar"><img src="img/1.jpg" class="a0uk" /></div>
            <div class="chat-name-recent-message">
               <div class="recent-user-name">{{ user.name }}</div>
               <div class="recent-user-message">Are you still on there</div>
            </div>
            <div class="message-count">
               <div class="count">9+</div>
            </div>
         </div>
      </div>
      <div id="favourites" class="favourites">
         <div class="recent-user" v-for="user in users">
            <div class="status"></div>
            <div class="recent-avatar"><img src="img/5.jpg" class="a0uk" /></div>
            <div class="chat-name-recent-message">
               <div class="recent-user-name">{{ user.name }}</div>
               <div class="recent-user-message">This is test message from this user</div>
            </div>
            <div class="message-count">
               <div class="count">9+</div>
            </div>
         </div>
      </div>
      <div id="online" class="online">
         <div class="recent-user" v-for="user in users">
            <div class="status"></div>
            <div class="recent-avatar"><img src="img/2.jpg" class="a0uk" /></div>
            <div class="chat-name-recent-message">
               <div class="recent-user-name">{{ user.name }}</div>
               <div class="recent-user-message">This is test message from this user</div>
            </div>
            <div class="message-count">
               <div class="count">8+</div>
            </div>
         </div>
      </div>
    </div>
</template>

<script>
   export default {
      methods:{
            activateUser (selectedUser) {
                this.$emit('getcurrentuser',{
                    userId:selectedUser.id,
                    name:selectedUser.name
                });

                // show chat conversation
                $(".activate-chat").show();
                $(".chat-info").hide();
                // to make clicked li active
                $(".user-log .active").removeClass("active");
                $("#"+selectedUser.id).addClass("active");
            } 
        },
        data() {
            return {
                default_image:$("#default_image").val(),
                users:[],
                baseUrl:$("#baseUrl").val()
            }
        },
        mounted() {
            // get users lists in left sidebar
            axios.get(this.baseUrl+'/users').then( response=> {
                this.users = response.data;
            });

        }
    }
</script>
