<template>

  <div class="card mt-4">
    <div class="card-header">Publicado en {{thought.created_at }}<span v-if="thought.created_at !== thought.updated_at"> - Actualizado a {{ thought.updated_at }}</span> </div>

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
export default {
  props: ['thought'],
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
