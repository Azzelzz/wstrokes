<script setup>
const { data, pending, error } = await useFetch('http://localhost:8000/api/motor', {
  server: false
})
</script>

<template>
  <div style="padding:20px">
    <h1>🏍️ Metal Werk Garage</h1>

    <div v-if="pending">Loading...</div>
    <div v-else-if="error">Error ambil data</div>

    <div v-else>
      <div v-for="item in data" :key="item.nama">
        <h3>{{ item.nama }}</h3>
        <p>Rp {{ item.harga }}</p>
      </div>
    </div>
  </div>
</template>