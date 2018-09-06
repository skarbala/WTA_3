<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<?php include 'partials/head.php'; ?>
<link rel="stylesheet" href="css/cyberpunk_registration.css">
<body>
<?php include 'partials/navigation.php' ?>
<div class="container-fluid" id="app">
  <div class="form-group col-md-4 col-md-offset-6 col-sm-6">
    <h2 class="header">Sign Up for the <span>future</span></h2>
    <input type="email"
           class="form-control colorOne"
           placeholder="email"
           name="email"
           v-model="email"
           autocomplete="off"
           v-bind:class="{'has-error':checkError('email')}"
           v-on:change="removeError('email')">
    <input type="text"
           class="form-control colorOne"
           placeholder="first name"
           name="name"
           v-model="name"
           autocomplete="off"
           v-bind:class="{'has-error':checkError('name')}"
           v-on:change="removeError('name')">
    <input type="text"
           class="form-control colorOne"
           placeholder="second name"
           name="surname"
           v-model="surname"
           autocomplete="off"
           v-bind:class="{'has-error':checkError('surname')}"
           v-on:change="removeError('surname')">
    <input type="password"
           class="form-control colorOne"
           placeholder="password"
           name="password"
           v-model="password"
           v-bind:class="{'has-error':checkError('password')}"
           v-on:change="removeError('password')">
    <input type="text"
           class="form-control colorOne"
           placeholder="password repeat"
           name="passwordRepeat"
           v-model="passwordRepeat"
           v-bind:class="{'has-error':checkError('passwordRepeat')}"
           v-on:change="removeError('passwordRepeat')">
    <button class="btn btn-block" v-on:click="checkForm">Sign up</button>
    <div class="success"
         v-if="success">
      Welcome on board
      <p>{{name +' '+ surname}}</p>
    </div>
  </div>

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
    new Vue({
        el: '#app',
        data: {
            email: null,
            name: null,
            surname: null,
            password: null,
            passwordRepeat: null,
            errors: [],
            success: false
        },
        methods: {
            checkForm:
                function (e) {
                    this.errors = [];
                    if (!this.email) {
                        this.errors.push('email');
                    }
                    if (!this.name) {
                        this.errors.push('name');
                    }
                    if (!this.surname) {
                        this.errors.push('surname');
                    }
                    if (!this.password) {
                        this.errors.push('password');
                    }
                    if (!this.passwordRepeat) {
                        this.errors.push('passwordRepeat');
                    }
                    if (this.errors.length === 0) {
                        this.success = true;
                    }
                    console.log(this.success);
                },
            checkError:
                function (error) {
                    return (this.errors.indexOf(error) > -1);
                },
            removeError:
                function (toBeRemoved) {
                    var index = this.errors.indexOf(toBeRemoved);
                    if (index > -1) {
                        this.errors.splice(index, 1);
                    }
                }

        }
    })
</script>


</html>