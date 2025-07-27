<?php
include_once('includes/header.php');
?>
<div class="position-relative p-0">
    <?php
    include_once('includes/nav.php');
    ?>
</div>
<main x-data="{tab :'photoshoot' }">
    <!-- header section start -->
    <div class="container-fluid py-3 bg-dark text-center text-primary">
        <p class="mb-0">Original Ideas. Bold execution</p>
        <h4 class="fs-3 mb-0">
            <svg
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="40px"
                height="40px">
                <path
                    fill="#EBC43D"
                    d="M14.58 16.59L19.17 12l-4.59-4.59L16 6l6 6l-6 6zm-6 0L13.17 12L8.58 7.41L10 6l6 6l-6 6zm-6 0L7.17 12L2.58 7.41L4 6l6 6l-6 6z" />
            </svg>
            Our Portfolio
        </h4>
    </div>

    <!-- Sub Menu Bar Section Start -->
    <div class="container py-3 py-lg-4">
        <div class="d-flex flex-wrap justify-content-evenly my-3">
            <button class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Social Designs</button>
            <button @click="tab = 'photoshoot'" :class="{'active': tab === 'photoshoot'}" class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Photoshoot</button>
            <button class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Video Shoot</button>
            <button @click="tab = 'kol'" :class="{'active': tab === 'kol'}" class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">KOL Management</button>
            <button @click="tab = 'event'" :class="{'active': tab === 'event'}" class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Event Management</button>
            <button @click="tab = 'mascot'" :class="{'active':tab === 'mascot'}" class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Mascot Illustration</button>
            <button class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Offline Design</button>
            <button class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Motion Graphics</button>
            <button @click="tab = 'tiktok'" :class="{'active':tab === 'tiktok'}" class="nav-link bg-transparent border-0 text-sm d-inline-block p-1" type="button">Tiktok</button>
        </div>
    </div>
    <!-- KOL Section Start  -->
    <div x-show="tab == 'kol'" class="mt-3 pt-4" id="kol">
        <div class="container">
            <div class="row gx-2 mb-2">
                <div class="col-12 col-md-6 mb-2 mb-md-0 overflow-hidden rounded-4">
                    <img class="w-100 h-100 object-fit-cover rounded-4" style="aspect-ratio: 3/2;" src="assets/images/eol/1.png" alt="">
                </div>
                <div class="col-6 col-md-3 overflow-hidden rounded-4">
                    <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/2.png" alt="">
                </div>
                <div class="col-6 col-md-3 overflow-hidden rounded-4">
                    <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/3.png" alt="">
                </div>
            </div>
            <div class="row gx-2 mb-2">
                <div class="col-12 mb-2 mb-md-0 col-md-7">
                    <div class="row gx-2 mb-2">
                        <div class="col-8 overflow-hidden rounded-4">
                            <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/4.png" alt="">
                        </div>
                        <div class="col-4 overflow-hidden rounded-4">
                            <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/5.png" alt="">
                        </div>
                    </div>
                    <div class="row gx-2">
                        <div class="col-4 overflow-hidden rounded-4">
                            <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/6.png" alt="">
                        </div>
                        <div class="col-8 overflow-hidden rounded-4">
                            <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/7.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 overflow-hidden rounded-4">
                    <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/8.png" alt="">
                </div>
            </div>
            <div class="row gx-2">
                <div class="col-8 bg-success top">
                    <img src="assets/images/eol/9.jpg" alt="">
                </div>
                <div class="col-4">
                    <div class="row gy-2">
                        <div class="col-12">
                            <img class="w-100 h-100 object-fit-cover rounded-4" src="assets/images/eol/10.png" alt="">
                        </div>
                        <div class="col-12 overflow-hidden rounded-4">
                            <img class="w-100 object-fit-cover rounded-4" src="assets/images/eol/11.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KOL 2 Section Start  -->
    <div x-show="tab == 'kol'" class="mt-3 pt-4" id="eol-2">
        <div class="container">
            <div class="row gx-2 mb-2">
                <div class="col-6 col-md-3">
                    <img src="/assets/images/eol2/1.png" alt="" class="w-100 h-100 object-fit cover">
                </div>
                <div class="col-6 col-md-3">
                    <div class="w-100 h-100 notebook">
                        <img src="/assets/images/eol2/2.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-md-3 ">
                    <div class="w-100 h-100 shirt">
                        <img src="/assets/images/eol2/3.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="w-100 h-100 pen">
                        <img src="/assets/images/eol2/4.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row gx-2">
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <img src="/assets/images/eol2/5.png" alt="" class="w-100 object-fit-cover">
                        </div>
                        <div class="col-12 my-2">
                            <img src="/assets/images/eol2/8.png" alt="" class="w-100 object-fit-cover">
                        </div>
                        <div class="col-12 mb-2">
                            <img src="/assets/images/eol2/9.png" alt="" class="w-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-12 rounded-3 overflow-hidden">
                        <img src="/assets/images/eol2/12.png" alt="" class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row g-0 mb-2">
                        <div class="col-6 rounded-3 overflow-hidden">
                            <img src="/assets/images/eol2/6.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6">
                            <img src="/assets/images/eol2/7.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>

                    </div>
                    <div class="row g-0">
                        <div class="col-6">
                            <img src="/assets/images/eol2/10.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="col-6 rounded-3 overflow-hidden">
                            <img src="/assets/images/eol2/11.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="col-12">
                        <img src="/assets/images/eol2/13.png" alt="" class="w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Mascot Section Start  -->
    <div x-show="tab == 'mascot'" class="mt-3 pt-4" id="mascot">
        <div class="container">
            <div class="row g-2">
                <div class="col-6 col-md-4">
                    <img src="assets/images/mascot/1.png" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/mascot/2.png" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="col-6 col-md-4">
                    <img src="assets/images/mascot/3.png" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/4.png" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/5.png" class="w-100 h-100 object-fit-cover">

                </div>
                <div class="col-12 col-md-6 rounded-3 overflow-hidden">
                    <img src="assets/images/mascot/6.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="col-1">
                    <img src="assets/images/mascot/arrow.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-10">
                    <img src="assets/images/mascot/7.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-1">
                    <img src="assets/images/mascot/arrow.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/8.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/9.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/10.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/images/mascot/11.png" alt="" class=" w-100 h-100 rounded-4 object-fit-cover">
                </div>
            </div>

        </div>
    </div>
    <!-- Event Management Section Start -->
    <div x-show="tab == 'event'" class="mt-3 pt-4" id="event">
        <div class="container">
            <div class="row g-2">
                <div class="col-8 top">
                    <img src="assets/images/event/E1.png" alt="">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E2.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E3.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E4.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E5.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E6.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E7.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E8.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-8">
                    <img src="assets/images/event/E9.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                </div>
                <div class="col-4">
                    <img src="assets/images/event/E11.png" alt="" class="w-100 h-100 object-fit-cove rounded-3r">
                </div>
            </div>
            <div class="row g-2 mt-1">
                <div class="col-8 top">
                    <img src="assets/images/event/E10.png" alt="">
                </div>
                <div class="col-4">
                    <div class="row g-2">
                        <div class="col-12">
                            <img src="assets/images/event/E12.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                        </div>
                        <div class="col-12">
                            <img src="assets/images/event/E13.png" alt="" class="w-100 h-100 object-fit-cover rounded-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Photoshoot Section Start  -->
    <div x-show="tab == 'photoshoot'" class="mt-3 pt-4" id="photoshoot">
        <div class="container">
            <div class="row gx-2 mb-2">
                <!-- first column  -->
                <div class="col-12 col-md-6 top">
                    <img src="assets/images/photoshoot/1.png" alt="">
                </div>

                <!-- second column  -->
                <div class="col-6 col-md-3">
                    <div class="d-flex flex-row flex-md-column h-100">
                        <div class="w-100 mb-2 h-100">
                            <img src="assets/images/photoshoot/2.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="w-100 h-100 rounded-4 overflow-hidden">
                            <img src="assets/images/photoshoot/4.png" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>

                <!-- third column  -->
                <div class="col-6 col-md-3 top">
                    <img src="assets/images/photoshoot/3.png" alt="">

                </div>
            </div>
            <!-- second grid  -->
            <div class="photoshoot-second-grid-container mb-2">
                <div class="row-span-2 right">
                    <img src="assets/images/photoshoot/5.png">
                </div>
                <div>
                    <img src="assets/images/photoshoot/6.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/7.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="top">
                    <img src="assets/images/photoshoot/8.png">
                </div>
                <div class="row-span-2">
                    <img src="assets/images/photoshoot/10.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/11.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/12.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/9.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/13.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
                <div>
                    <img src="assets/images/photoshoot/14.png" alt="" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
            <div class="row gx-2">
                <div class="col-6 top-right">
                    <img src="assets/images/photoshoot/15.png" alt="">
                </div>
                <div class="col-6">
                    <div class="row g-2">
                        <div class="col-6">
                            <img src="assets/images/photoshoot/16.png" class="w-100 h-100 object-fit-cover" alt="">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/photoshoot/17.png" class="w-100 h-100 object-fit-cover" alt="">
                        </div>
                        <div class="col-12 top" style="height: 215px;">
                            <img src="assets/images/photoshoot/18.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tiktok Section Start  -->
    <div x-show="tab == 'tiktok'" class="mt-3 pt-4" id="videoshoot">
        <div class="container">
            <div class="row g-2">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/1.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/2.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/3.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/4.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/5.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/6.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/7.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/8.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class=" rounded-2 overflow-hidden w-100 h-100 rounded-2">
                        <img src="assets/images/tiktok/9.png" alt="" class="w-100 object-fit-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php
include_once('includes/footer.php');
?>