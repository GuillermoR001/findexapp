<style scoped>
.box {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 30px;
}

.card {
  border: 1px #909497  solid;
  border-radius: 10px;
  padding: 20px;
}

.card > p {
  font-size: 1rem;
  margin-bottom: 20px;
}

.button-step {
  background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
  border-radius : 8px;
  border-style: none;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  flex-shrink: 0;
  font-size: 16px;
  font-weight: 500;
  height: 4rem;
  padding: 0 1.6rem;
  text-align: center;
  text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
  transition: all .5s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-step:hover {
  box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
  transition-duration: .1s;
}

@media (min-width: 768px) {
  .button-step {
    padding: 0 2.6rem;
  }
}
</style>

<template>
    <div>
      <VOnboardingWrapper ref="wrapper" :steps="steps" />
      <div class="box" v-if="steps">
        <div class="card" id="step-1">
          <p>
            Comencemos con v-Onboarding 
          </p>
          <button @click="start" type="button" class="button-step">Empecemos</button>
        </div>
        <div class="card" id="step-2">
          <p>
            Vamos bien! Continua asi
          </p>
          <button @click="() => goToStep(1)" type="button" class="button-step">Estas cerca</button>
        </div>
        <div class="card" id="step-3">
          <p>
            Ya casi terminamos
          </p>
          <button @click="finish" type="button" class="button-step">Felicidades</button>
        </div>
      </div>
      <div v-else>
        <span>Espere...</span>
      </div>
  </div>

</template>

<script>
import { defineComponent, ref } from 'vue'
import { VOnboardingWrapper, useVOnboarding } from 'v-onboarding'
import 'v-onboarding/dist/style.css';

export default defineComponent ({
  components: {
    VOnboardingWrapper
  },
  setup() {
    const wrapper = ref(null)
    const { start, goToStep, finish } = useVOnboarding(wrapper);
    const steps = ref([]);

    return {
      wrapper,
      steps,
      start,
      finish,
      goToStep
    }
  },
  methods : {
    async getSteps(){
      const response = await fetch("http://findexapp.test/api/onboarding-steps");      
      const { steps } = await response.json();
      console.log(steps)
      this.steps = steps;
    }
  },
  mounted(){
    this.getSteps()
    this.start()
  }
})
</script>
