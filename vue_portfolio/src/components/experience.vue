<template>
  <section id="experience">
    <div class="experience__heading my-5 pt-5">
      <p class="display-4 text-uppercase text-white">experience</p>
      <span class="text-white">Professional and academic</span>
      <hr id="experience__line" class="w-25 bg-white" />
    </div>
    <div id="experience__content" class="h-75 text-white">
      <div id="experience__education">
        <h4>EDUCATION</h4>
        <div class="m-5">
          <span>From September 2020</span>
          <h5>Computer Science Master at USMB</h5>
          <p>
            specialized in artificial intelligence and collaborative systems
          </p>
        </div>
        <div>
          <span>2017 - 2020</span>
          <h5>IT License</h5>
          <p>University Savoie Mont-Blanc, France</p>
        </div>
        <div class="m-5">
          <span>2013 - 2017</span>
          <h5>Scientific Baccalaureate</h5>
          <p>Lycée de l'Albanais at Rumilly, France</p>
        </div>
      </div>
      <div id="experience__line" class="w-75 m-auto bg-white"></div>
      <div id="experience__professional">
        <h4 class="pt-5">PROFESSIONAL</h4>
        <div class="m-5">
          <span>01.2020 - 05.2020</span>
          <h5>Urbalog LAET Project</h5>
          <p>
            Digitizing the Urbalog board game on Android with the Nearby
            Connection API
          </p>
        </div>
        <div>
          <span>07.2019</span>
          <h5>Pfeiffer Vacuum SAS, Annecy</h5>
          <p>
            Interim IT mission: implementation of a new Qlickview access
            management program + Laravel development
          </p>
        </div>
        <div class="m-5 pb-5">
          <span>07.2018</span>
          <h5>Pfeiffer Vacuum SAS, Annecy</h5>
          <p>
            Interim IT mission: Management of SAP tables and inventory of
            sub-programs.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style>
#experience {
  background-color: #424242;
  /* height: calc(100vh - 4rem); */
}
#experience__line {
  height: 3px;
}
</style>