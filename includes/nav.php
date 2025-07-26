<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?php $homePageClass = basename($_SERVER['PHP_SELF']) === 'index.php' ? 'position-absolute z-2' : ''; ?>
<div class="navigation top-0 w-100 <?php echo $homePageClass ?>" style="z-index: 2">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <div class="d-flex align-items-center">
                    <div class="bg-danger"></div>
                    <div class="d-flex flex-column ms-2 justify-content-center">
                        <p class="mb-0 fs-2 p-0">Digiboxes</p>
                        <small class="text-uppercase text-xs fw-bold">
                            One-stop marketing solutions
                        </small>
                    </div>
                </div>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold " href="">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold <?= $_SERVER['REQUEST_URI'] == '/services.php' ? 'active' : '' ?>" href="/services.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold" href="#">CLIENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold <?= $_SERVER['REQUEST_URI'] == '/portfolio.php' ? 'active' : '' ?>" href="/portfolio.php">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold" href="#">TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-4 fs-6 fw-semibold" href="#">CAREER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>