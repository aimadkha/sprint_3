<template>
  <section class="about">
    <div id="about__heading" class="container">
      <p class="display-4 mt-5 mb-0">ABOUT ME</p>
      <span class="mt-0">HOPE TO KNOW YOU AFTER</span>
      <hr id="about__line" class="w-25 bg-dark" />
      <img id="about__img" src="@/assets/photo.jpg" alt="" class="w-25" />
      <div class="row">
        <div class="about__content col-md-8">
          <h5 class="text-uppercase font-weight-bold text-md-left">who am i</h5>
          <p class="about__text text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
            architecto commodi nam, expedita voluptatem ipsum. Corrupti
            asperiores quasi recusandae amet, rem expedita a assumenda sequi
            commodi dolorum doloribus, ducimus est non officia, alias nulla
            quia? Placeat perferendis alias, earum voluptate officia assumenda.
            Laudantium.
            <br />
            <span class="text-dark">
              voluptatem quas ullam molestiae? Laborum facere omnis suscipit
              temporibus corrupti cupiditate cum labore placeat quia, voluptatum
              ipsa eaque doloremque quas saepe expedita voluptates. Earum optio
              id sequi quas quos dolores sed obcaecati atque reprehenderit autem
              totam accusamus in doloremque odio maiores illo officia quam
              molestiae, voluptates corrupti.
            </span>
          </p>
        </div>
        <div class="about__contact w-100 col-md-4">
          <h5 class="text-uppercase font-weight-bold text-center">
            aimad elkhattabi
          </h5>
          <p class="font-weight-bold">
            E-mail: <span class="font-weight-normal">aimadkha@gmail.com</span>
          </p>
          <p class="font-weight-bold">
            Phone: <span class="font-weight-normal">+212 6 75 20 64 72</span>
          </p>
          <p class="font-weight-bold">
            City: <span class="font-weight-normal">Meknes, Maroc</span>
          </p>
          <p class="font-weight-bold">
            Languages:
            <span class="font-weight-normal">Arabe, francais, anglais</span>
          </p>
          <div class="about__icons">
            <a class="active"
              ><i class="fab fa-facebook-square fa-2x pr-3"></i
            ></a>
            <a class="active"
              ><i class="fab fa-instagram-square fa-2x pr-3"></i
            ></a>
            <a class="active"><i class="fab fa-linkedin fa-2x pr-3"></i></a>
            <a class="active"
              ><i class="fab fa-github-square fa-2x pr-3"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div v-animate-onscroll="'animate__animated animate__bounce'">
      Animate me once upon scroll
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style>
#about__img {
  border-radius: 50%;
}
.about__text {
  color: #3c6e71;
}
</style>