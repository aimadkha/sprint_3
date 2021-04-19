<template>
  <div id="form_container" class="container w-25 bg-light p-5">
    <h1>Sign Up</h1>
    <form>
      <div class="form-group text-left">
        <label for="full_name">Full Name</label>
        <input
          type="text"
          name="fullName"
          id="full_name"
          class="form-control"
          v-model="full_name"
        />
      </div>
      <div class="form-group text-left">
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          class="form-control"
          v-model="email"
        />
      </div>
      <div class="form-group text-left">
        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form-control"
          v-model="password"
        />
      </div>
      <button class="btn btn-dark btn-lg form-control">Sign Up</button>
      <p class="text-primary text-right">
        <span class="text-muted">Already registred </span>
        <router-link to="signin">
          <a> sign in?</a>
        </router-link>
      </p>
    </form>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  data() {
    return {
      full_name: "",
      email: "",
      password: "",
    };
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
#form_container {
  border-radius: 1.5rem;
}
</style>
