<template>
    <div class="chat-wrapper">
        <div class="login-form" v-show="!loggedIn">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="username" type="text" class="validate" v-model="username">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action" @click.prevent="login">Start Chat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="chat-box" v-show="loggedIn">
            <ul class="collection">
                <li class="collection-item avatar" v-for="message in messages">
                    <i class="material-icons circle green">perm_identity</i>
                    <span class="title">{{message.user}</span>
                    <p>
                        {{message.text}}
                    </p>
                </li>
            </ul>
            <div class="message-box">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Message</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                username: '',
                loggedIn: false,
                messages: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            login() {
                this.loggedIn = true;
                console.log("logged in");
            }
        }
    }
</script>
