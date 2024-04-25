<template>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <Sidebar />
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <Navigation />
            <!-- partial -->
            <div class="main-panel">
                <slot />
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
               <Footer />
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</template>


<script setup>
import Sidebar from '../Layouts/Sidebar.vue';
import Navigation from '../Layouts/Navigation.vue';
import Footer from '../Layouts/Footer.vue';

</script>
