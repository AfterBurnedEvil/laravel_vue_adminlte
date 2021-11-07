<template>
  <div>
    <div class="container">
      <h2>Add Thing</h2>
      <div class="panel panel-primary">
        <div class="panel-heading">
            Add Thing
            <router-link to="/" class="btn btn-info pull-right" style="margin-top:-7px;margin-left:2px;">Student List</router-link>
        </div>
        <div class="panel-body">
          <form @submit.prevent="addThing">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" v-model="thing.name" />
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      thing: {},
    };
  },
  methods: {
    addThing() {
      this.axios
        .post("http://localhost:8000/api/thing/store", this.thing)
        .then((response) => this.$router.push({ name: "home" }))
        .catch((err) => console.log(err))
        .finally(() => (this.loading = false));
    },
  },
};
</script>
