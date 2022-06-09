<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
<div class="">

<div class="d-flex ">
<div class="col">
  <RouterView /> </div>
   
<div class="d-block flex-column flex-shrink-0 p-3 text-white bg-dark position-fixed start-0"> 
  <div class="mt-1">
      <a href="/" class="d-flex align-items-center mb-5 mb-md-0 me-md-auto text-white text-decoration-none">
      <img src="@/assets/delivery.png" alt="Logo" style="width:50px; height:50px"> 
      <p class="pt-3 fs-5">Task Us</p> 
    </a>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item m-3">
       <RouterLink to="/" class="btn btn-primary" aria-current="page">
         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
          Home 
        </RouterLink>
      </li>
      <br>
      <li class="m-3">
       <RouterLink to="/deals" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M12.79,21L3,11.21v2c0,0.53,0.21,1.04,0.59,1.41l7.79,7.79c0.78,0.78,2.05,0.78,2.83,0l6.21-6.21 c0.78-0.78,0.78-2.05,0-2.83L12.79,21z"/></g><g><path d="M11.38,17.41c0.78,0.78,2.05,0.78,2.83,0l6.21-6.21c0.78-0.78,0.78-2.05,0-2.83l-7.79-7.79C12.25,0.21,11.74,0,11.21,0H5 C3.9,0,3,0.9,3,2v6.21c0,0.53,0.21,1.04,0.59,1.41L11.38,17.41z M7.25,3C7.94,3,8.5,3.56,8.5,4.25S7.94,5.5,7.25,5.5 S6,4.94,6,4.25S6.56,3,7.25,3z"/></g></g></g></svg>
          Deals
        </RouterLink>
      </li>
      <br>
      <li class="m-3">
        <RouterLink to="/fastfoods" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/></svg>
          Foods
        </RouterLink>
      </li>
      <li class="m-3">
        <RouterLink to="/deliveries" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M19,7c0-1.1-0.9-2-2-2h-3v2h3v2.65L13.52,14H10V9H6c-2.21,0-4,1.79-4,4v3h2c0,1.66,1.34,3,3,3s3-1.34,3-3h4.48L19,10.35V7 z M7,17c-0.55,0-1-0.45-1-1h2C8,16.55,7.55,17,7,17z"/><rect height="2" width="5" x="5" y="6"/><path d="M19,13c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3S20.66,13,19,13z M19,17c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1 S19.55,17,19,17z"/></g></g></svg>
          Deliveries
          </RouterLink>
      </li>
      <br>
      <li class="m-3">
        <RouterLink to="/deliverymen" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M12,11.39c0-0.65-0.39-1.23-0.98-1.48L5.44,7.55c-1.48,1.68-2.32,3.7-2.8,5.45h7.75C11.28,13,12,12.28,12,11.39z"/><path d="M21.96,11.22c-0.41-4.41-4.56-7.49-8.98-7.2c-2.51,0.16-4.44,0.94-5.93,2.04l4.74,2.01c1.33,0.57,2.2,1.87,2.2,3.32 c0,1.99-1.62,3.61-3.61,3.61H2.21C2,16.31,2,17.2,2,17.2V18c0,1.1,0.9,2,2,2h10C18.67,20,22.41,15.99,21.96,11.22z"/></g></g></svg>
          Deliverymen
          </RouterLink>
      </li>
      <br>
    </ul>
    <hr class="mt-5">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

        <strong>Setting</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
      
    </div>
  </div>
</div>
  
  </div>
</template>

<style>

</style>
