<template>
<div class="messages--wrap message-wrap-status">
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
                        <button class="btn btn-sm grey-cascade" type="submit"><i class="fa fa-location-arrow"></i> Location</button>
                        <button class="btn btn-sm dark" type="submit"> <i class="fa fa-file-text-o"></i> Image / Video</button>
                        <div class="portlet-input input-inline">
                            <div class="input-group">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="form-group form-md-line-input">
                        <div class="col-md-1">
                                    <img src="img/avatar1.jpg">
                        </div>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="1" placeholder="What's on your mind?" @keyup.enter="uploadStatus"  v-model="statusText"></textarea>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-primary" type="submit" @click="uploadStatus"><i class="fa fa-tick"></i> Upload Status</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
    <div class="row" v-for="status in statusList">
        <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_comments_1">
                            <!-- BEGIN: Comments -->
                            <div class="mt-comments">
                                <div class="mt-comment"  :status-key="status['.key']">
                                    <div class="mt-comment-img">
                                        <img src="img/avatar6.jpg"> </div>
                                    <div class="mt-comment-body">
                                        <div class="mt-comment-info">
                                            <span class="mt-comment-author">{{ auth_user.userName }}</span>
                                            <span class="mt-comment-date">{{ formatDate(status.created) }}</span>
                                        </div>
                                        <div class="mt-comment-text">{{ status.statusText }}</div><hr>
                                        <!-- <div class="mt-comment-details">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <span><a><i class="fa fa-thumbs-o-up"></i> Like</a></span> &nbsp;&nbsp;<span><a> <i class="fa fa-comment-o"></i> Comment</a></span>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <span> <i class="fa fa-thumbs-o-up"></i> Manohar Khadka, Saru Oli and <a>100 others</a> like this.</span>
                                                </div>
                                            </div>
                                            <hr>-->
                                            <div class="comment-list" v-for="comment in status.comments">
                                                <div class="row">
                                                    <div class="col-md-1 mt-comment-img">
                                                        <img src="img/avatar1.jpg" width="32px" height="32px">
                                                    </div>
                                                    <div class="col-md-11">
                                                        <span><span class="mt-comment-author"><strong>{{ comment.author }}</strong></span> {{ comment.comment }}<span class="mt-comment-text"> &nbsp;{{ formatDate(comment.created) }} </span>
                                                        <!-- <br><span><a><i class="fa fa-thumbs-o-up"></i> Like </a> <span class="mt-comment-text"> (2) </span></span> -->
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr v-if="status.comments">
                                            <div class="row">
                                                <div class="col-md-1 mt-comment-img">
                                                    <img src="img/avatar1.jpg" width="32px" height="32px">
                                                </div>
                                                <div class="col-md-11">
                                                <div class="input-icon right">
                                                    <i class="fa fa-check"></i>
                                                    <input type="text" class="form-control input-circle" placeholder="Write your comment.." v-model="commentText.parent_id[status['.key']]" @keyup.enter="postComment(status['.key'])"> </div>
                                                </div>
                                            </div>
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
</template>

<script>
    var statusRef = '';
    export default {
        props:['auth_user','firebase'],
        mounted() {
            // db_ref.ref('status').once('value').then(function(snapshot) {
            //     console.log(snapshot.val());              
            // });
        },
        firebase: function () {
            let db_ref = this.firebase.database();
            statusRef = db_ref.ref("status");
            return {
                statusList:statusRef
            }
        },
        data() {
            return {
                statusText:'',
                statusRef:'',
                newStatus:{
                    statusText:'',
                    created:'',
                    userId:5,
                    location:''
                },
                statusList:[],
                newComment:{
                    author:'',
                    created:'',
                    comment:''
                },
                commentText: {
                  parent_id: []
                }
            }
        },
        methods:{
            uploadStatus() {
                let created = moment().format('YYYY-MM-DD HH:mm:ss');
                this.newStatus.statusText = this.statusText;
                this.newStatus.created = created;
                let insertData = statusRef.push().setWithPriority(this.newStatus, 0 - Date.now());
                this.statusText = "";
                toastr.success("Status uploaded successfully.");
            },
            postComment(statusKey) {
                let comment  = this.commentText.parent_id[statusKey];
                if(comment.length > 0) {
                    let created = moment().format('YYYY-MM-DD HH:mm:ss');
                    this.newComment.comment = comment;
                    this.newComment.created = created;
                    this.newComment.author = this.auth_user.userName;
                    let statusCommentsRef = statusRef.child(statusKey).child("comments");
                    let insertData = statusCommentsRef.push(this.newComment);
                    this.commentText.parent_id[statusKey] = "";
                }
            },
            formatDate (time) {
                let previousTime = moment(time,'YYYY-MM-DD HH:mm:ss').format('x');
                let timeDifference = moment(previousTime,'x').fromNow();
                return timeDifference;
            }
        }
    }
</script>
