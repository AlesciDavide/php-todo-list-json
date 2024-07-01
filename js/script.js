
const { createApp } = Vue

    createApp({
        data() {
        return {
            todoList: [],
        }
        },
        methods: {
            getApi() {
                    axios.post('./server.php', {
                        params: {
                        
                        }
                    })
                    .then((response) =>  {
                        this.todoList = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
                    .finally(function () {
                        // always executed
                    });  
            }
        },
        created(){
            this.getApi();
        },

}).mount('#app')