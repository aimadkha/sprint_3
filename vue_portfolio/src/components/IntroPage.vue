<template>
  <div
    id="intro"
    class="container-fluid d-flex jusctidy-content-center align-items-center"
  >
    <div id="intro__content" class="container w-80 col-sm-8 col-lg-5">
      <h1 id="intro__heading" class="line animate__animated animate__backInUp">
        {{ fullName }}
      </h1>
      <div id="intro__line" class="w-80 bg-white my-5"></div>
      <p class="h1 text-white animate__animated animate__backInDown">
        {{ job }}
      </p>
    </div>
  </div>
</template>

<script>
import anime from "animejs";
export default {
  name: "intro",
  data() {
    return {
      fullName: "Aimad Elkhattabi",
      job: "Web Devloper",
    };
  },
  methods: {
    go() {
      anime({
        targets: ".line",
        transformY: 200,
        color: "#ffF",
        easing: "linear",
        delay: 800,
        duration: 200,
      });
    },
  },
  mounted() {
    this.go();
  },
};
</script>

<style>
#intro {
  width: 100vw;
  height: 100vh;
  background-image: url(../assets/bg.jpg);
  background-position: top left;
  background-size: 100% 100%;
}

#intro__line {
  height: 0.1rem;
}
</style>