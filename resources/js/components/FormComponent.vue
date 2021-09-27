<template>
  <div class="card mt-4">
    <div class="card-header">¿En qué estás pensando ahora?</div>

    <div class="card-body">
      <form action="" @submit="newThought">
        <div class="form-group">
          <label for="text-thought">Ahora estoy pensando en:</label>
          <input
            type="text"
            name="thought"
            class="form-control"
            v-model="inputThought"
          />
        </div>

        <button type="submit" class="btn btn-primary">
          Enviar pensamiento
        </button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      inputThought: '',
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    newThought: function (e) {
      let post = {
        description: this.inputThought,
      };
      this.description = "";

      axios.post("/thought", post).then((response) => {
        let thought = response.data;
        this.$emit("add", thought);
      });
      e.preventDefault();
    },
  },
};
</script>
