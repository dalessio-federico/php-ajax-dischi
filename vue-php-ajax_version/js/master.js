Vue.config.devtools = true;

var root = new Vue(
{
    
    el: "#root",

    data : {
        albumList : [],
    },
    
    mounted(){
                axios
                    .get("http://localhost/php-ajax-dischi/vue-php-ajax_version/db/server.php")
                    .then((r) => 
                    {
                        console.log(r.data);
                        r.data.forEach(e => 
                        {
                            this.albumList.push(e);
                        });
                    });
            }
})