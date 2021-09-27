<template>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form-component @add="addThought"></form-component>
      <thought-component
        v-for="thought in thoughts"
        v-bind:key="thought.id"
        :thought="thought"
      ></thought-component>
    </div>
  </div>
</template>

<script>
import FormComponent from "./FormComponent.vue";
import ThoughtComponent from "./ThoughtComponent.vue";
export default {
  data() {
    return {
      thoughts: [],
    };
  },
  components: { ThoughtComponent, FormComponent },
  mounted() {
    console.log("Component mounted.");
    axios.get("/thought").then((response) => {
      this.thoughts = response.data;
    });
  },
  methods: {
    addThought(thought) {
      this.thoughts.push(thought);
    },
  },
};
</script>
