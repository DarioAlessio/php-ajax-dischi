function init() {
    new Vue({
        el: '#app',
        data: {
            database: []

        },
        methods: {
            update: function(author) {
                axios
                    .get('database.php', {
                        params: {
                            'author': author
                        }
                    })
                    .then(res => {
                        this.database = res.data;
                    });
            },
            clear: function() {
                this.update('');
            }
        },
        mounted: function() {
            this.clear();
        }
    });
}

init();
