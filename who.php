<?php declare(strict_types=1);
require './config.php';
include './templates/header.php';
?>
    <h1 class="text-center fg-white">Resource Finder</h1>

    <div class="d-flex p-3">
        <div class="mx-auto mt-4">
            <div class="tiles-grid tiles-group size-2">

                <a href="beds.php"
                   data-role="tile" class="bg-orange" data-size="wide">
                    <span class="mif-home icon"></span>

                    <span class="branding-bar">Open Beds: Women’s Emergency Shelter <button class="button primary mini square rounded">3</button></span>

                </a>

                <a href="category.php"
                   data-role="tile" class="bg-blue">
                    <span class="mif-male icon"></span>
                    <span class="branding-bar">Male</span>
                    <span class="badge-bottom">18 &amp; Under</span>
                </a>

                <a href="category.php"
                   data-role="tile" class="bg-pink">
                    <span class="mif-female icon"></span>
                    <span class="branding-bar">Female</span>
                    <span class="badge-bottom">18 &amp; Under</span>
                </a>

                <a href="category.php"
                   data-role="tile" class="bg-blue">
                    <span class="mif-male icon"></span>
                    <span class="branding-bar">Male</span>
                    <span class="badge-bottom">Over 18</span>
                </a>

                <a href="category.php"
                   data-role="tile" class="bg-pink">
                    <span class="mif-female icon"></span>
                    <span class="branding-bar">Female</span>
                    <span class="badge-bottom">Over 18</span>
                </a>

                <a href="category.php"
                   data-role="tile" class="bg-red" data-size="wide">
                    <span class="mif-ambulance icon"></span>
                    <span class="branding-bar">I Need Assistance</span>
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
