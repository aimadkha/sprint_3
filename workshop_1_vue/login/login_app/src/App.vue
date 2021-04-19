<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <router-link to="/">
          <a class="navbar-brand text-primary" href="#">YouCode Youssoufia</a>
        </router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <router-link to="signin"
              ><li class="nav-item">
                <a class="btn btn-outline-primary" href="#">Sign in</a>
              </li>
            </router-link>
            <router-link to="signup">
              <li class="nav-item active">
                <a class="btn btn-outline-primary" href="#">Sign up</a>
              </li>
            </router-link>
          </ul>
        </div>
      </div>
    </nav>
    <section class="form_section">
      <router-view></router-view>
    </section>
  </div>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
.form_section {
  background-color: #2554ff;
  height: calc(100vh - 3.5rem);
  padding: 3rem;
}


li {
  margin: 0 10px;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
