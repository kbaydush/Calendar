<template>
  <div class="client-logo">
    <img
      v-bind:src="url"
      @click="modal = true"
      class="img-fluidd"
    >
    <b-modal modal-ok
      title="Edit icon"
      v-model="modal"
      @ok="handleSave"
    >
      <b-form-group
        label="File input:"
        label-for="fileInput"
        :label-cols="3"
        :horizontal="true"
      >
        <b-form-file
          accept=".jpg, .png"
          name="file"
          id="file"
          v-model="file"
          ref="file"
          @change="handleFileUpload()"
          :plain="true"
        />
      </b-form-group>
    </b-modal>
  </div>
</template>

<script>
import IconApi from '@/api/Icon'

export default {
  name      : 'Logo',
  components: {
    IconApi,
  },
  data () {
    return {
      modal: false,
      file : null,
      url  : '/uploads/client-logo.png?t' + Math.random(),
    }
  },
  methods: {
    handleFileUpload() {
      this.file = this.$refs.file.$el.files[0];
    },
    handleSave() {
      IconApi
        .updateIcon(this.file)
        .then(response => {
          this.modal = false;
          this.url = '/uploads/client-logo.png?t' + Math.random();
        })
        .catch(response => {
          // @TODO handle this
          console.log(response);
        });
    }
  }
}
</script>

<style lang="scss" scoped>
  .client-logo {
    margin: 0 auto;

    .b-form-group {
      margin-bottom: 0;
    }

    .form-control-file {
      margin-top: 4px;
    }

    img {
      height: 35px;
      cursor: pointer;
    }
  }
</style>
