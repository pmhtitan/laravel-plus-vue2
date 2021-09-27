<template>

  <div class="card mt-4">
    <div class="card-header">Publicado en {{thought.created_at | moment('d-M-YYYY h:mm a') }}<span v-if="thought.created_at !== thought.updated_at"> - Actualizado a {{ thought.updated_at | moment('d-M-YYYY h:mm a') }}</span> </div>

    <div class="card-body">
      <label v-if="!editMode" for="text-thought"> {{ thought.description }}</label>
      <input v-else type="text" name="thoughtEdit" v-model="thought.description" class="form-control">
    </div>
    <div class="card-footer">
      <button v-if="editMode" type="button" class="btn btn-success" v-bind:disabled="isDisable" v-on:click="updateThought()">Actualizar</button>
      <button v-else class="btn btn-secondary" v-on:click="setEditMode()">Editar</button>
      <button class="btn btn-danger" v-on:click="deleteThought()">Eliminar</button>
    </div>
  </div>
  
</template>

<script>
Vue.use(require('vue-moment'));
export default {
  props: ['thought'],
  data() {
    return {
      editMode: false,
    } 
  },
  mounted() {
    console.log("Component mounted.");
  },
  computed: {
    isDisable(){
      if(this.editMode){
        return this.thought.description.length <= 0;
      }else{
        return false;
      }
      
    }
  },
  methods: {
    updateThought(){
      axios.put(`/thought/${this.thought.id}`, this.thought).then((response) => {
        this.editMode = false;
        const thought = response.data;
        this.$emit('update', thought);
      });
    },
    deleteThought(){
      axios.delete(`/thought/${this.thought.id}`).then(() => {
        this.$emit('delete');
      });
    },
    setEditMode(){
      this.editMode = true;
    }
  }
};
</script>
