<?php declare(strict_types=1);
require './config.php';
include './templates/header.php';
?>
    <h1 class="text-center fg-white">Resource Finder</h1>
    <div class="text-center">
        <a class="button primary  rounded drop-shadow" href="who.php" role="button"><span class="mif-home"> HOME</a>
    </div>

    <div class="d-flex p-3">
        <div class="mx-auto mt-4">


            <div class="mx-auto"
                 data-role="panel"
                 data-width="280"
                 data-title-caption="Available Beds: 3"
                 data-cls-title="bg-orange fg-white"
                 data-cls-content="bg-blue fg-white"
            >
                <table class="table row-border">
                    <thead>
                    <tr>
                        <th>Bed #</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Bed 009</td>
                        <td><button class="button primary cycle mif-checkmark"></button></td>
                    </tr>
                    <tr>
                        <td>Bed 021</td>
                        <td><button class="button primary cycle mif-checkmark"></td>
                    </tr>
                    <tr>
                        <td>Bed 031 Wall</td>
                        <td><button class="button alert cycle mif-cross"></td>
                    </tr>
                    <tr>
                        <td>Bed 0042</td>
                        <td><button class="button primary cycle mif-checkmark"></td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

<?php
include './templates/footer.php';
