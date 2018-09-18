<template>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter field has-addons">
            <input type="text" name="message" class="input is-rounded is-primary" placeholder="type something..." v-model="newMessage" @keyup.enter="sendMessage">
            <button class="button is-primary is-rounded" @click="sendMessage">Send</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>