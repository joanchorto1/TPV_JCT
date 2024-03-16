<template>

        <div class="flex min-h-screen w-screen ">
            <!-- Columna izquierda -->
            <div  class="p-24  space-y-3 w-3/4 bg-gray-900 justify-center">
                <div v-for="categoria in categories" class="space-y-3 border-b-4 pb-10 flex-row justify-around mb-4">
                    <h1 class="text-2xl font-bold text-white">{{categoria.nom}}</h1>
                    <div class="flex space-y-3 flex-wrap">
                        <template v-for="producte in productes">
                            <div @click="afegirProducte(producte)" v-if="producte.categoria_id === categoria.id" class="mx-5 space-y-5 bg-white w-1/3 py-10 text-center hover:bg-blue-300">
                                <h4> {{producte.nom}}</h4>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <!-- Columna derecha -->
            <div class=" w-1/4 border-l-4 space-y-3 bg-gray-800">
                <div class="mx-10 space-y-3">
                    <p class="text-white border-b-4 pb-4 border-white text-center mt-16 font-bold  text-2xl">Total a cobrar: {{ total }}</p>
                    <div v-for="producte in productesSeleccionats" class=" text-white border-gray-400 border-b-2 flex justify-between">
                        <p class="text-xl font-bold">{{producte.nom}}</p>
                        <p>{{producte.preu}}€</p>
                        <button @click="eliminarLinea(producte)" class=" text-white font-bold py-2 px-4 rounded">
                            <Icontrash/>
                        </button>
                    </div>
                </div>
                <div class="mx-10 space-x-5 flex">
                    <button @click="cobrar" class="flex bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                        <IconCobrar />
                    </button>
                    <button @click="eliminarTodo" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        <Icontrash/>
                    </button>
                </div>


            </div>
        </div>
    </template>
<script setup>
import {computed, ref} from "vue";
import IconCobrar from "@/Icons/IconCobrar.vue";
import Icontrash from "@/Icons/Icontrash.vue";
import banner from "@/Components/Banner.vue";

const props = defineProps({
    categories: Array,
    productes: Array
})
const productesSeleccionats = ref([])

const afegirProducte = (producte) => {
    productesSeleccionats.value.push(producte)
    //
}


//Eliminar solo la linea selecionada no todos los productos que coincidan con el id
const eliminarLinea = (producte) => {
    for (let i = productesSeleccionats.value.length-1; i > 0 ; i--) {
        if (productesSeleccionats.value[i].id === producte.id) {
            productesSeleccionats.value.splice(i, 1)
            return
        }
    }
    // productesSeleccionats.value = productesSeleccionats.value.filter((p) => p.id !== producte.id)
}



const total = computed(() => {
    return productesSeleccionats.value.reduce((acc, producte) => acc + producte.preu, 0)
})
const eliminarTodo = () => {
    productesSeleccionats.value = []
    total.value = 0
}
const cobrar = () => {
    alert(`Has cobrat ${total.value}€`)

    productesSeleccionats.value = []




}

</script>

<style scoped>

</style>
