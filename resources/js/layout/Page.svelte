<script>
    import Navbar from "./Navbar.svelte";
    import Footer from "./Footer.svelte";
</script>

<div class="page">

    <Navbar/>

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Empty page
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <slot/>
            </div>
        </div>

        <Footer/>

    </div>

</div>
