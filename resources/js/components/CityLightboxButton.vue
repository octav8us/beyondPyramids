<template>
        <div>
            <button class="btn btn-primary" @click="favorite" > Favourite </button>

        </div>



</template>

<script>
export default {
    props:  ['cityId'],
    name: "CityFavButton"
    ,
    data : function(){
        return {

            status:1 ,
        }
    },

    methods: {
        favorite(){
                axios.post('/cityfav/'+ this.cityId).then(
                    response=> {console.log(response.data);

                    }

                );
        }

    },
    computed: {

        buttonText() {
            return (this.status) ? "unfavourite" : "favourite" ;
        }
    }


}


</script>

