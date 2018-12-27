import axios from 'axios'

export default {
  updateIcon(file) {
    let formData = new FormData();
    formData.append('file', file);

    return axios.post('/api/logo/upload',
      formData,
      {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }
    );
  },
}
