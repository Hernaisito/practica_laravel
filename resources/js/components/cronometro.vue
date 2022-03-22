<template>
    <h1>Cronometro:</h1>
    <h2>{{ minutos }}:{{ segundos }}:{{ decimas }}</h2>
    <button @click="parar_arrancar"> {{ titulo_parar_arrancar }}</button>
    <button @click="iniciar"> Reiniciar</button>
</template>

<script>
export default {
    name: "cronometro",

}
</script>

<style scoped>

</style>
