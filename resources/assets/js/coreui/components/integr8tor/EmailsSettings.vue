<template>
    <body>
    <div class="container">
        <div class="row main">
            <div class="main-login main-center">
                <h5>Sign up once and watch any of our free demos.</h5>
                <form id="signup-form" @submit.prevent="processForm">

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" name="name" placeholder="Name" :class="{ 'form-control': true, 'is-danger': errors.has('name') }" v-model="name" v-validate="'required|alpha'">

                            </div>
                            <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="email" :class="{ 'form-control': true, 'is-danger': errors.has('email') }" name="email" placeholder="my@email.com" v-model="email" v-validate="'required|email'">

                            </div>
                            <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Username</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" :class="{ 'form-control': true, 'is-danger': errors.has('username') }" name="username" placeholder="Enter your username" v-model="username" v-validate="'required|checkuser'">
                            </div>
                            <span v-show="errors.has('username')" class="help is-danger">{{ errors.first('username') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" :class="{ 'form-control': true, 'is-danger': errors.has('password') }" name="password" placeholder="Enter a password" v-model="password" v-validate="'required|min:6'">
                            </div>
                            <span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>

                                <input v-validate="'required|confirmed:password'" name="password_confirmation" type="password" :class="{ 'form-control': true, 'is-danger': errors.has('password') }" placeholder="Password, Again" data-vv-as="password">
                            </div>
                            <span v-show="errors.has('password_confirmation')" class="help is-danger">{{ errors.first('password_confirmation') }}</span>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button id="button" :disabled="errors.any()" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    
</template>

<script>
    export default {
        name: "EmailsSettings"
    }
</script>

<style scoped>

</style>