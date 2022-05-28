<template>
    <div >
        <button class="btn btn-primary" @click="favorite" > Favourite </button>

    </div>



</template>

<script>export default {
    props:  ['placeId' ],
    name: "PlaceFavButton"
    ,
    methods: {
        favorite(){
            axios.post('/placefav/'+this.placeId).
            then(response=> {alert(response.data)});
        }

    },


}
</script>

