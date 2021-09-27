<template>

  <div class="card mt-4">
    <div class="card-header">Publicado en {{thought.created_at | moment('d-m-YYYY h:mm a') }}<span v-if="thought.created_at !== thought.updated_at"> - Actualizado a {{ thought.updated_at | moment('d-m-YYYY h:mm a') }}</span> </div>

    <div class="card-body">
      <label for="text-thought"> {{ thought.description }}</label>
    </div>
    <div class="card-footer">
      <button class="btn btn-secondary">Editar</button>
      <button class="btn btn-danger">Eliminar</button>
    </div>
  </div>
  
</template>

<script>
Vue.use(require('vue-moment'));
export default {
  props: ['thought'],
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
