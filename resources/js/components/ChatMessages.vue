<template>
    <div>
        <ul class="chat">
            <li class="has-text-right" v-for="message in messages">
                <span class="tag is-primary is-medium is-rounded">{{ message.message }}</span>
                <p class="help is-primary">@{{ message.user.name }}</p>
                <br>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['messages']
    };
</script>