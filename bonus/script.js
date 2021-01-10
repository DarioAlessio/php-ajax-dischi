function init() {
    new Vue({
        el: '#app',
        data: {
            database: [],
        },
        mounted:function(){
          axios.get('database.php').then((risposta) =>{
            this.database = risposta.data;
            console.log(this.database);
          })
        }
    });
}

init();
