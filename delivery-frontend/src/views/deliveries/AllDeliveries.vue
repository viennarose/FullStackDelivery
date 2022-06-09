<template>
<div class="position-sticky start-50 top-0 p-5" style="width: 65rem;">
    <div v-if="editor.show" style="width: 800px; padding:18px" class="card position-absolute ms-5 align-self-center border border-5 rounded shadow-lg p-3 mb-5 bg-body" >
    <div class="row">
        <h2 class="text-center">Add Delivery</h2>
            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Customer Name" type="text" v-model="delivery.customerName" >
                <label for="floatingInput">Customer Name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" placeholder="Order" type="text" v-model="delivery.order" >
                <label for="floatingInput">Order</label>
            </div>
            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Price" type="text" v-model="delivery.price" >
                <label for="floatingInput">Price</label>
            </div>
            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Quantity" type="text" v-model="delivery.quantity" >
                <label for="floatingInput">Quantity</label>
            </div>
            <div>
                <button class="btn btn-primary" @click="submitDelivery">
                Add Delivery
                </button>&nbsp;
                <button class="btn btn-danger" @click="toggleEditor">
                    Cancel
                </button>
            </div>
            </div>
    </div>
    
<table class="table caption-top table-hover text-center shadow-lg p-3 mb-5 bg-body rounded">
  <caption>List of deliveries <svg xmlns="http://www.w3.org/2000/svg" @click="toggleEditor" class="float-end rounded-circle bg-secondary" height="34px" viewBox="0 0 24 24" width="34px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
  </caption>
  <thead class="table-dark">
    <tr>
      <th class="text-bold" >ID</th>
      <th >Customer Name</th>
      <th >Order</th>
      <th >Price</th>
      <th >Quantity</th>
      <th >Total</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="dlvry in deliveries" :key="dlvry.id" class="w3-hover-blue" style="cursor:pointer" @click="openDelivery(dlvry.id)">
      <td class="fw-bold">{{dlvry.id}}</td>
      <td>{{dlvry.customerName}}</td>
      <td>{{dlvry.order}}</td>
      <td>{{dlvry.price}}</td>
      <td>{{dlvry.quantity}}</td>
      <td>{{(dlvry.quantity*dlvry.price).toFixed(2)}}</td>
      
    </tr>
    
  </tbody>
</table>
  </div>
</template>

<script>
export default {
    data() {
        return {
            deliveries: [],
            delivery: {
                customerName:"",
                order:"",
                price: "",
                quantity: "",
                total: "",
            },
            editor: {
                show:false,
            },
        }
    },
    methods: {
        toggleEditor(){
            if(this.editor.show){
                this.editor = {show:false, label: "Add Delivery"}
            }else {
                this.editor = {show:true, label: "Cancel"}
            }
        },
         getAllDeliveries() {
            fetch('http://192.168.254.107:8000/api/deliveries')
            .then(res=>res.json())
            .then(data=>this.deliveries = data)
            .catch(err=>console.log(err))
        },
        openDelivery(deliveryId) {
            this.$router.push({
                name: 'view-delivery',
                params: {
                    id: deliveryId
                }
            })
        },
        submitDelivery(){
            fetch('http://192.168.254.107:8000/api/deliveries',{
                method: 'post',
                headers:{
                    "Content-type":"application/json"  
                },
                credentials: 'same-origin',
                body: JSON.stringify(this.delivery)
            })
            .then(res=>res.json())
            .then(data=>{
                alert(data.customerName + " has been successfully added.")
                this.orders.unshift(data)
                this.delivery = {}
            })
            .catch(err=>console.log(err))
        }
    },
    mounted() {
        this.getAllDeliveries()
    }

}
</script>

<style>

</style>