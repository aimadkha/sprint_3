<template>
  <section id="projects" class="text-white py-5">
    <div id="projects__heading" class="container">
      <p class="display-4 mt-5 mb-0">MY PROJECTS</p>
      <span class="mt-0">This is my story</span>
      <hr id="about__line" class="w-25 bg-white" />
    </div>
    <div id="project__card" v-for="project in projects" :key="project.name">
      <h4>{{ project.name }}</h4>
      <img :src="project.img" alt="" class="w-50" />
      <p>{{ project.desc }}</p>
      <span class="text-white-50"
        >LINK :<a v-bind:href="project.link">{{ project.link }}</a></span
      >
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      projects: [
        {
          name: "IG_Automation_Bot",
          desc:
            "Python script for Instagram automation using Instaloader. Used for auto following and DM. Easily configurable through Yaml config files!",
          img: require("@/assets/projects/ig.gif"),
          link: "https://github.com/hbollon/IG_Automation_Bot",
        },
        {
          name: "Go-edlib",
          desc:
            "Golang string comparison and edit distance algorithms library, featuring : Levenshtein, LCS, Hamming, Damerau levenshtein (OSA and Adjacent transpositions algorithms), Jaro-Winkler, Cosine, etc.",
          img: require("@/assets/projects/edlib.jpg"),
          link: "https://github.com/hbollon/go-edlib",
        },
        {
          name: "Gyro'Ball",
          desc:
            "3D labyrinth game project for Android using Unity. Use device gyroscope.",
          img: require("@/assets/projects/gyroball.jpg"),
          link: "Google Play",
        },
        {
          name: "Urbalog",
          desc:
            "Android adaptation of board game using Nearby Connections API and Java for the LAET",
          img: require("@/assets/projects/urba.jpg"),
          link: "https://github.com/hbollon/Urbalog",
        },
      ],
    };
  },
};
</script>

<style>
#projects {
  background-color: #424242;
}
</style>