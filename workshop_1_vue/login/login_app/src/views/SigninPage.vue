<template>

  <div id="form_container" class="container w-25 bg-light p-5">
    <h1>Sign In</h1>
    <form v-on:submit="checkEmail()">
      <div class="form-group text-left">
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          class="form-control"
          v-model="inputEmail"
        />
      </div>
      <div class="form-group text-left">
        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form-control"
          v-model="inputPassword"
        />
      </div>
      <button class="btn btn-dark btn-lg form-control">Sign In</button>
      <p class="text-right"><a class="btn btn-link">Forgot password?</a></p>
      <h3>{{ inputEmail }}</h3>
    </form>
    <div class="d-flex justify-content-center justify-content-around">
      <a href="#"><i class="fab fa-google text-primary"></i></a>
      <a href="#"><i class="fab fa-facebook-f text-primary"></i></a>
      <a href="#"><i class="fab fa-twitter text-primary"></i></a>
    </div>
  </div>
</template>

<script>
export default {
  name: "signin",
  data() {
    return {
      full_name: '',
      email: "yassine@gmail.com",
      password: "aaaaa",
      inputEmail: "",
      inputPassword: "",
    };
  },
  methods: {
    checkEmail() {
      if (
        this.inputEmail == this.email &&
        this.password == this.inputPassword
      ) {
        alert("that is right!!");
      } else {
        alert("try again!!");
      }
    },
  },
};
</script>

<style>
</style>
