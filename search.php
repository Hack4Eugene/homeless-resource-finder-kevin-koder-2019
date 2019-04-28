<?php declare(strict_types=1);
require './config.php';
include './templates/header.php';
?>
    <h1 class="text-center fg-white">Resource Finder</h1>
    <div class="text-center">
        <a class="button primary  rounded drop-shadow" href="who.php" role="button"><span class="mif-home"> HOME</a>
        <a class="button warning  rounded drop-shadow" href="category.php" role="button"><span class="mif-arrow-left"> BACK</a>
    </div>
    <br>
<?php
$sql = "SELECT
service_name
, service_description
, operation_hours
, main_phone
, emergency_phone
, fax
, address
, city
, state
, zip
, website
, category
FROM
listings";

if (isset($_GET['category_id']))
{
    $sql .= " WHERE category_id = '{$_GET['category_id']}'";
}

if (isset($_GET['city']))
{
    $sql .= " AND city = '{$_GET['city']}'";
}

$sql .= ' ORDER BY category';
$result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

if (!$result)
{
    ?>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"><strong>NO RESULTS</strong> Try another Search.</p>
    </div>
    <?php
}

$i = 1;
foreach ($result as $row)
{
    $row['website'] = $row['website'] ? "<a href='https://{$row['website']}' target='_blank' class='fg-white'>https://{$row['website']}</a>" : '';
    ?>
    <div class='panel collapsed' data-role="panel"
         data-title-caption="<b><?= $row['service_name'] ?></b>"
         data-cls-title="bg-green fg-white"
         data-cls-content="bg-blue fg-white">

        <p><?= $row['service_description'] ?></p>

        <b>Phone: </b><a href="tel:<?= $row['main_phone'] ?>" class='fg-white'><?= $row['main_phone'] ?></a>
        <br>
        <b>Hours: </b><?= $row['operation_hours'] ?>
        <br>
        <b>Website: </b><?= $row['website'] ?>
        <br>
        <?php
        $address = $row['address'] . $row['city'] . '+' . $row['state'] . '+' . $row['zip'];
        echo '<b>Address: </b><br><a href="https://www.google.com/maps/place/' . urlencode($address) . '" target="_blank" class="fg-white">' . $row['address'] . '<br> ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '</a>';

        //echo '<b>Address & Map: </b><a class="button primary small rounded drop-shadow" href="https://www.google.com/maps/place/' . urlencode($address) . '" target="_blank"" role="button"><span class="mif-automobile"> <span class="mif-directions-bike"> ' . $row['address'] . ' ' . $row['city'] . ' ' . $row['state'] . ' ' . $row['zip'] . '</a>';
        ?>
        <br>
        <div class="info-box" id="info-box-<?= $i ?>" data-role="infobox" data-type="warning" data-width="480">
            <span class="button square closer va-middle"></span>
            <div class="info-box-content">
                <h3><?= $row['service_name'] ?></h3>
                <b>Phone: </b><a href="tel:<?= $row['main_phone'] ?>" class='fg-white'><?= $row['main_phone'] ?></a>
                <br>
                <b>Hours: </b><?= $row['operation_hours'] ?>
                <br>
                <b>Website: </b><?= $row['website'] ?>
                <br>
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.833648156489!2d-123.14187128448889!3d44.066143579109315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54c11dceb2b6f829%3A0x418f5ba1e4e7a9b5!2s456+State+Hwy+99+N%2C+Eugene%2C+OR+97402!5e0!3m2!1sen!2sus!4v1556292818606!5m2!1sen!2sus"
                        width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                <?php
                //$address = '1625 Hennepin Ave, Minneapolis, MN';
                echo '<iframe width="100%" height="250" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(",", "", str_replace(" ", "+", $address)) . '&z=14&output=embed"></iframe>';
                ?>


            </div>
        </div>
        <br>
        <div class="">
            <button class="button warning" onclick="$('#info-box-<?= $i ?>').data('infobox').open()"><span
                        class="mif-map"></span> Map
            </button>
        </div>

    </div>
    <br>
    <?php
    $i++;
}

include './templates/footer.php';
