<template>
  <div>
    <h2>Module Settings</h2>
    <form>
      <div class="float-left w-25">
        <div class="float-left w-25 p-3">
          <label for="module">Module</label>
        </div>
        <div class="float-left w-50 p-3">
          <select class="form-control form-control-sm" id="module">
            <option selected>Daco2AVT</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="2">Three</option>
          </select>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="float-left border w-50 ml-xl-5 p-2">
        <div class="float-left w-25 text-lg-center">
          <label for="db" class="form-control-sm">Database:</label>
        </div>
        <div class="form-group row float-left">
          <input
                  type="text"
                  class="form-control-sm is-valid"
                  id="db"
                  placeholder="User 1"
                  value=""
                  required
          >
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="path" class="form-control-sm">Path:</label>
        </div>
        <div class="form-group row float-left">
          <input
                  type="text"
                  class="form-control-sm is-valid"
                  id="path"
                  placeholder="/var/www/module1"
                  value=""
                  required
          >
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label for="fn" class="form-control-sm">Friendly name:</label>
        </div>
        <div class="form-group row float-left">
          <input
                  type="text"
                  class="form-control-sm is-valid"
                  id="fn"
                  placeholder="Daco2AVT friendly"
                  value=""
                  required
          >
          <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="clearfix"></div>
        <div class="float-left w-25 text-lg-center">
          <label class="form-control-sm">Icon (20x20):</label>
        </div>
        <div class="form-group row float-left">
          <img src="" width="20" height="20"/>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
    export default {
        name: "ModulesSettings"
    }
</script>

<style scoped>

</style>
