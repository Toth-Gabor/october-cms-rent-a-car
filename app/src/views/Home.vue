<template>
  <div class="home">

  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Home',
  mounted() {
    axios.get('http://localhost/october-cms-rent-a-car/vehicles').then(response => {
      console.log(response.data);
    })
  }
}
</script>
