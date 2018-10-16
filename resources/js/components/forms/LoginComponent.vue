<template>
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div>
                    <!-- brand -->
                    <a class="navbar-brand">
                        <div></div>
                        <img :src="$parent.images.logo" alt="FansAlive" class="">
                        <span class="hidden-folded inline">Login | {{$parent.title}}</span>
                    </a>
                    <!-- / brand -->
                </div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm text-warning"></div>
            <form action="#" method="POST" @submit="login">
                <div class="md-form-group float-label">
                    <input type="email" name="email" class="md-input" value="" required>
                    <label>Email</label>
                    <p class="help-block text-warning"></p>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" name="password" class="md-input" required>
                    <label>Password</label>
                    <p class="help-block text-warning"></p>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="checkbox" name="remember"><i
                            class="primary"></i> Keep me signed in
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md" @click="login">Sign in</button>
            </form>
        </div>

    </div>
</template>

<script>
    export default {
        name: "login-component",
        mounted(){
        },
        methods: {
            login(event){

                event.preventDefault();

                let username = $('[name="email"]').val(),
                    password = $('[name="password"]').val();

                this.sendLoginRequest(username, password);
            },

            sendLoginRequest(username, password){
                axios.post(apiRoutes.login, {email: username, password}, {
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {
                        let status = response.data.status;

                        if(status == 'error'){
                            return alert(response.data.message)
                        }

                        return

                    })
                    .catch(error => {
                        alert('Something went wrong')
                });
            }
        }
    }
</script>