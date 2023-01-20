import axios from 'axios';

created() {
    axios.get('/userinfo')
    .then(response => {
        this.user = response.data;
    })
    .catch(error => {
        console.log(error);
    });
}



