<template>
    <li class="current">
        <a><i class="glyphicon glyphicon-bell"></i> {{ notifications.length }}</a>

        <ul>
            <li v-for="noti in notifications">
                <a v-if="noti.data['bill']['status']==0" v-on:click="MarkAsRead(noti)">
                    Bạn có 1 đơn hàng mới <u>{{ noti.created_at | myOwnTime }}</u>
                </a>
                <a v-if="noti.data['bill']['status']==1" v-on:click="MarkAsRead(noti)">
                    Bạn có 1 đơn hàng được chấp nhận <u>{{ noti.created_at | myOwnTime }}</u>
                </a>
                <a v-if="noti.data['bill']['status']==2" v-on:click="MarkAsRead(noti)">
                    Bạn có 1 đơn hàng bị từ chối <u>{{ noti.created_at | myOwnTime }}</u>
                </a>
            </li>
            <li>
                <a v-if="notifications.length==0">
                    Không có thông báo
                </a>
            </li>
        </ul>
    </li>  
</template>
<script>
    export default {
        props: ['notifications'],
        methods: {
            MarkAsRead: function(noti) {
                var noti_id = noti.id;
                var bill_id = noti.data['bill']['id'];
                var type_user = noti.data['type_user'];

                if (type_user == 'hdv') {
                    window.location.href = "/hdv/list-bill?id=" + bill_id;
                } else {
                    window.location.href = "/lich-su-dat-tour";
                }
                
                axios.post("/markAsRead", {noti_id}).then(response => {
                });
            },
        }
    }
</script>