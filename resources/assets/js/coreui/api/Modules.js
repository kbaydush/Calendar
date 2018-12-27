import axios from 'axios'

export default {

  getModules() {
    return axios
      .get('/api/modules');
  },
  getModule(id) {
    return axios
      .get('/api/modules/' + id);
  },
  updateModule(module) {
    return axios
      .put('/api/modules/' + module.id, {
        data: module
      });
  }
}
