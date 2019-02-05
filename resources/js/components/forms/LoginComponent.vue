<template>
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div>
                    <!-- brand -->
                    <a class="navbar-brand">
                        <div></div>
                        <img :src="configuration.images.logo" alt="FansAlive" class="">
                        <span class="hidden-folded inline">Login | {{configuration.title}}</span>
                    </a>
                    <!-- / brand -->
                </div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm text-warning"></div>
            <form-component action="#" method="post" v-on:submitted="login">
                <input-component
                        name="username"
                        label="Username"
                        type="email"
                        v-on:the-value="setUsername">
                </input-component>
                <input-component
                        name="password"
                        label="Password"
                        v-on:the-value="setPassword"
                        type="password">
                </input-component>
                <button-component value="Login" @submitted="login"> </button-component>
            </form-component>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login-component",
        data(){
            return {
                username: "",
                password: "",
            }
        },
        components: {
            'form-component': require('../elements/form/FormComponent'),
            'input-component': require('../elements/form/InputComponent'),
            'button-component': require('../elements/form/ButtonComponent')
        },
        mounted(){
            this.setDocumentTitle("Login")
        },
        methods: {
            setUsername(value){
                return this.username = value;
            },
            setPassword(value){
                return this.password = value;
            },
            login(event){
                event.preventDefault();

                this.sendLoginRequest(this.username, this.password);
            },
            sendLoginRequest(username, password) {
                this.sendPostRequest(
                        apiRoutes.login,
                        {email: username, password}
                        );

            }
        }
    }
</script>