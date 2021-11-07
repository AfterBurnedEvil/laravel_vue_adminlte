<template>
  <div>
    <div class="container">
      <h2>Students</h2>
      <div class="panel panel-primary">
        <div class="panel-heading">
            Students
            <router-link to="/add" class="btn btn-info pull-right" style="margin-top:-7px;margin-left:2px;">Add Student</router-link>
        </div>
        <div class="panel-body">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="thing in things" :key="thing.id">
                <td>{{ thing.name }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
 
<script>
export default {
  data() {
    return {
      things: [],
    };
  },
  created() {
    this.axios.get("http://localhost:8000/api/thing/index").then((response) => {
      this.things = response.data;
    });
  },
};
</script>