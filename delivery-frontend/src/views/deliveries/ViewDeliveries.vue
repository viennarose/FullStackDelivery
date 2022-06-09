<template>

<div class="d-flex mt-5 ms-2 justify-content-center" >
    <a href="/deliveries">
    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
    </a>
    <div >
      <h4 class="text-center fw-bold">Delivery Details</h4>
    <table class="table text-left " style="width:35rem" >
    <tr>
      <th class="text-bold" >ID: </th>
      <td>{{delivery.id}}</td>
      </tr>
      <tr>
      <th >Customer Name: </th>
      <td>{{delivery.customerName}}</td>
      </tr>
      <tr>
      <th >Order: </th>
      <td>{{delivery.order}}</td></tr>
      <tr>
      <th >Price: </th>
       <td>{{delivery.price}}</td></tr>
       <tr>
      <th >Quantity: </th>
      <td>{{delivery.quantity}}</td></tr>
      <tr>
      <th >Total : </th>
       <td>{{(delivery.quantity*delivery.price).toFixed(2)}}</td></tr>
       
       </table>
       <div>
           <button class="btn btn-primary" @click="toggleEditor">
              {{editor.label}}
          </button>&nbsp;
           <button class="btn btn-danger" @click="deleteDelivery">
              Delete Delivery
          </button>
       </div>  
    </div>   
      <div v-if="editor.show" style="width: 800px; padding:18px" class="card position-absolute ms-5 align-self-center border border-5 rounded shadow-lg p-3 mb-5 bg-body" >
            <h3>Edit Order</h3>
            <div class="row">

            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Customer Name" type="text" v-model="delivery.customerName" >
                <label for="floatingInput">Customer Name</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" placeholder="Order" type="text" v-model="delivery.order" >
                <label for="floatingInput">Order</label>
            </div>
            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Price" type="number" v-model="delivery.price" >
                <label for="floatingInput">Price</label>
            </div>
            <div class="form-floating mb-3 col">
                <input class="form-control" id="floatingInput" placeholder="Quantity" type="number" v-model="delivery.quantity" >
                <label for="floatingInput">Quantity</label>
            </div>
            <div>
                <button class="btn btn-primary" @click="saveDelivery">
                Save Changes
                </button>&nbsp;
                <button class="btn btn-danger" @click="toggleEditor">
                    Cancel Changes
                </button>
            </div>
            
        </div>
    </div>
</div>
           
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            delivery: {},
            editor: {
                show:false,
                label: "Edit Delivery"
            },
        }
    },
    methods: {
        toggleEditor(){
            if(this.editor.show){
                this.editor = {show:false, label: "Edit Details"}
            }else {
                this.editor = {show:true, label: "Close Editor"}
            }
        },
        saveDelivery(){
            fetch('http://192.168.254.107:8000/api/deliveries/' + this.delivery.id,{
                method: 'put',
                headers: {
                    'Content-Type' : "application/json"
                },
                credentials: 'same-origin',
                body: JSON.stringify(this.order)
            })
            .then(res=>res.json())
            .then(data=>{
                alert(data.customerName + " has been updated.")
                this.$router.push({
                    name: 'all-deliveries'
                })
            })
            .catch(err => console.log(err))
        },
        deleteDelivery(){
            fetch('http://192.168.254.107:8000/api/deliveries/' + this.delivery.id,{
                method: 'delete'
            })
            .then(res=>res.json())
            .then(data=>{
                alert(data.message)
                this.$router.push({
                    name: 'all-deliveries'
                })
            })
            .catch(err=>console.log(err))
        }   
    },
    mounted() {
        fetch('http://192.168.254.107:8000/api/deliveries/' + this.id)
        .then(res=>res.json())
        .then(data=>this.delivery=data)
    }
}
</script>

<style scoped>
</style>