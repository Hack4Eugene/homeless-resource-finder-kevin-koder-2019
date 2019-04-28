<?php declare(strict_types=1);
include './templates/header.php';
?>
    <h1 class="text-center fg-white">Resource Finder</h1>

    <div class="dialog mx-auto mt-4 mb-4" style="position: static; width: 450px;">
        <div class="dialog-content">
            <span class="mif-my-location mif-3x"></span>
            Will you allow application to access your location?
            <p><input type="checkbox" data-role="checkbox" data-caption="Remember this decision"></p>
        </div>
        <div class="dialog-actions">
            <a href="who.php">
                <button class="button primary">Allow Location Access</button>
                <button class="button">Don't Allow</button>
            </a>
        </div>
    </div>

</div>

<?php
include './templates/footer.php';
