<?php declare(strict_types=1);
require './config.php';
include './templates/header.php';
?>

    <h1 class="text-center fg-white">Resource Finder</h1>

    <div class="d-flex p-3">
        <div class="mx-auto mt-4">
            <div class="tiles-grid tiles-group size-2">

                <a href="who.php"
                   data-role="tile" class="bg-cobalt" data-size="wide">
                    <span class="mif-home icon"></span>
                </a>

                <a href="search.php?category_id=78"
                   data-role="tile" class="bg-amber">
                    <span class="mif-restaurant icon"></span>
                    <span class="branding-bar">Meals</span>
                </a>

                <a href="search.php?category_id=97"
                   data-role="tile" class="bg-orange">
                    <span class="mif-help icon"></span>
                    <span class="branding-bar">Homeless</span>
                </a>

                <a href="search.php?category_id=84"
                   data-role="tile" class="bg-blue">
                    <span class="mif-heartbeat icon"></span>
                    <span class="branding-bar">Health</span>
                </a>

                <a href="search.php?category_id=111"
                   data-role="tile" class="bg-pink">
                    <span class="mif-suitcase icon"></span>
                    <span class="branding-bar">Jobs</span>
                </a>

                <a href="search.php?category_id=116"
                   data-role="tile" class="bg-red">
                    <span class="mif-balance-scale icon"></span>
                    <span class="branding-bar">Legal</span>
                </a>

                <a href="search.php?category_id=101"
                   data-role="tile" class="bg-green">
                    <span class="mif-home icon"></span>
                    <span class="branding-bar">Housing</span>
                </a>

                <a href="search.php?category_id=168"
                   data-role="tile" class="bg-olive" data-size="wide">
                    <span class="mif-flag icon"></span>
                    <span class="branding-bar">Veterans</span>
                </a>

            </div>
        </div>
    </div>
<?php
include './templates/footer.php';
