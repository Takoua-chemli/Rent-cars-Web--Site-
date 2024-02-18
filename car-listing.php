<?php
session_start();
include('includes/config.php');
error_reporting(0);

$apiUrl = 'http://145.239.168.119:8080/api/companies/vehicles';
$apiResponse = file_get_contents($apiUrl);
$cars = json_decode($apiResponse, true);

?>
<script>
var cars = <?php echo json_encode($cars, JSON_PRETTY_PRINT); ?>;
console.log(cars);
</script>
<!DOCTYPE HTML>
<html lang="en">

<head>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Attaysir Rentcar </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <style>
    /* Add this CSS for the new layout */
.car-list-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-bottom: 1px solid #ccc;
}

.car-logo img {
    max-width: 100%;
    max-height: 100px;
    border-radius: 5px;
}

.car-details {
        text-align: center; /* Center-align car details */
    }

 .car-actions .btn-details {
        background-color: #00ff00; /* Green Details button */
    }
.car-actions .btn-book {
        background-color: #ff0000; /* Red Réserver button */
    }

/* Adjust the styling as needed */

.car-catalog {
    min-height: 400px; /* Set a default height based on your design */
}


    #searchForm,#sec2,#sec1 h2 {
        text-align: center;
        margin: 0 auto;
        max-width: 600px; /* Adjust as needed */
	   // background: linear-gradient(90deg, #000000, #666666);
    }
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

/* Car Card Styles */
.car-card {
    width: 100%;
    margin: 0 0 20px;
    background: linear-gradient(90deg, #000000, #666666);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    display: inline-block;
    vertical-align: top;
    box-sizing: border-box;
}

.car-card img {
    max-width: 100%;
    max-height: 200px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.car-card p {
    color: #ffffff;
    margin: 5px 0;
    font-weight: bold;
    padding: 10px;
    background-color: #666666;
    border-radius: 5px;
}

.car-card .btn-details,
.car-card .btn-book {
    display: inline-block;
    margin-top: 10px;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    border-radius: 5px;
}

.car-card .btn-details {
    background-color: #00ff00;
    color: #ffffff;
    margin-right: 10px;
}

.car-card .btn-book {
    background-color: #3498db;
    color: #ffffff;
}

/* Responsive Styles */
/* Responsive Styles */
@media (min-width: 768px) {
    .car-card {
        width: calc(33.333% - 20px);
        margin: 0 10px 20px;
    }
}

@media (max-width: 767px) {
    .car-card {
        width: calc(100% - 20px);
        margin: 0 10px 20px;
    }

    .page-header h1 {
        font-size: 28px; /* Adjust as needed */
        margin-top: 100px; /* Adjust as needed */
    }

    .coustom-breadcrumb {
        margin: 10px 0 0;
    }

    .coustom-breadcrumb li {
        margin-right: 5px;
    }

    .coustom-breadcrumb a {
        font-size: 14px;
    }
}


/* Page Header Styles */
.page-header {
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 400px; /* Adjust as needed */
}

.page-header h1 {
    color: #ffffff;
    font-size: 36px;
    text-align: center;
    margin-top: 150px; /* Adjust as needed */
}

.page-header_wrap {
    position: relative;
    z-index: 1;
}

.coustom-breadcrumb {
    list-style: none;
    padding: 0;
    margin: 20px 0 0;
    text-align: center;
}

.coustom-breadcrumb li {
    display: inline;
    margin-right: 10px;
}

.coustom-breadcrumb a {
    color: #ffffff;
    text-decoration: none;
    font-size: 16px;
}

 .details-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .details-container img {
        max-width: 100%;
        max-height: 200px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .details-container p {
        margin: 5px 0;
        font-weight: bold;
        padding: 10px;
        background-color: #ccc;
        border-radius: 5px;
    }

    .details-container .btn-book {
        background-color: #3498db;
        color: #fff;
    }

    .details-container button {
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .details-container button:hover {
        background-color: #2980b9;
    }


    </style>
</head>

<body>

    <?php include('includes/colorswitcher.php');?>
    <?php include('includes/header.php');?>

    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Car Listing</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Car Listing</li>
                </ul>
            </div>
        </div>
        <div class="dark-overlay"></div>
    </section>
    <!-- Add this form section above the car catalog -->


    <script>
let allCars = <?php echo json_encode($cars); ?>;
console.log("All Cars:", allCars);

    function searchAndSort() {
        const location = document.getElementById("location").value.toLowerCase();
        const brand = document.getElementById("brand").value.toLowerCase();

        const sortedCars = allCars.map(company => {
            const filteredVehicles = company.fleet_vehicles.filter(vehicle =>
                typeof vehicle.location === 'string' &&
                typeof vehicle.brand_id === 'object' &&
                vehicle.location.toLowerCase().includes(location) &&
                ((typeof vehicle.brand_id[1] === 'string' && vehicle.brand_id[1].toLowerCase().includes(brand)) ||
                (Array.isArray(vehicle.brand_id) && vehicle.brand_id.length >= 2 && typeof vehicle.brand_id[1] === 'string' && vehicle.brand_id[1].toLowerCase().includes(brand)))
            );

            // Check if there are vehicles before sorting
            if (filteredVehicles.length > 0) {
                // Sort the filtered vehicles by brand
                const sortedVehicles = filteredVehicles.sort((a, b) => {
                    const brandA = a.brand_id[1].toLowerCase();
                    const brandB = b.brand_id[1].toLowerCase();
                    return brandA.localeCompare(brandB);
                });

                return {
                    ...company,
                    fleet_vehicles: sortedVehicles
                };
            } else {
                return company; // Return as is if no vehicles match the criteria
            }
        });

        // Sort the companies based on the first vehicle's brand
        const finalSortedCars = sortedCars.sort((a, b) => {
            // Check if there are vehicles before accessing the first vehicle
            if (a.fleet_vehicles.length > 0 && b.fleet_vehicles.length > 0) {
                const brandA = a.fleet_vehicles[0].brand_id[1].toLowerCase();
                const brandB = b.fleet_vehicles[0].brand_id[1].toLowerCase();
                return brandA.localeCompare(brandB);
            } else {
                return 0; // No vehicles to compare
            }
        });

        displayCarCatalog(finalSortedCars);
    }


     function displayCarCatalog(cars) {
    const carCatalogDiv = document.getElementById("carCatalog");
    carCatalogDiv.innerHTML = '';

    cars.forEach((company) => {
        company.fleet_vehicles.forEach((vehicle) => {
            const brand = vehicle.brand_id && vehicle.brand_id[1] ? vehicle.brand_id[1] : 'N/A';
            const image_128 = vehicle.image_128 || '';
            const imageDataUrl = data:image/png;base64,${image_128};

            const carListItem = document.createElement("div");
            carListItem.className = "car-list-item";
            carListItem.innerHTML = `
                <div class="car-logo">
                    <img src="${imageDataUrl}" alt="Vehicle Image">
                </div>
                <div class="car-details">
                    <h3>${brand}</h3>
                    <p><strong>Doors:</strong> ${vehicle.doors !== undefined ? vehicle.doors : 'N/A'}</p>
                    <p><strong>Location:</strong> ${vehicle.location || 'N/A'}</p>
                </div>
                <div class="car-actions">
                    <button class="btn-details" onclick="showDetails('${company.company_name}', '${brand}', ${vehicle.id}, ${vehicle.doors}, '${vehicle.color}', '${vehicle.acquisition_date}', ${vehicle.active}, '${vehicle.location}', ${vehicle.odometer}, '${vehicle.odometer_unit}', ${vehicle.power}, '${vehicle.transmission}', '${vehicle.state_id ? vehicle.state_id[1] : 'N/A'}', '${vehicle.tag_ids ? vehicle.tag_ids.join(', ') : 'N/A'}', '${imageDataUrl}')">Details</button>
                    <button class="btn-book" onclick="bookNow('${company.company_name}', '${brand}', ${vehicle.id})">Réserver</button>
                </div>
            `;

            carCatalogDiv.appendChild(carListItem);
        });
    });
}


   function showDetails(companyName, brand, vehicleID, doors, color, acquisitionDate, active, location, odometer, odometerUnit, power, transmission, state, tags, imageDataUrl) {
    const detailsPage = window.open('', '_blank');
    
    // Obtenir l'arrière-plan de la page parente
    const parentBackground = document.body.style.backgroundImage;

    detailsPage.document.write(`
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>${brand} Details</title>
            <style>
                body {
                    margin: 0;
                    font-family: 'Poppins', sans-serif;
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    transition: background-image 1.5s ease-in-out;
                    background-image: url('assets/Luxe.jpg');

                }

                .details-container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding: 20px;
                }

                .details-container img {
                    max-width: 100%;
                    max-height: 200px;
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }

                .details-container p {
                    margin: 5px 0;
                    font-weight: bold;
                    padding: 10px;
                    background-color: #ccc;
                    border-radius: 5px;
                }

                .details-container .btn-book {
                    background-color: #3498db;
                    color: #fff;
                }

                .details-container button {
                    border: none;
                    padding: 10px 20px;
                    cursor: pointer;
                    transition: background-color 0.3s ease-in-out;
                }

                .details-container button:hover {
                    background-color: #2980b9;
                }
            </style>
        </head>

        <body>
            <div class="details-container">
                <h2>${companyName}</h2>
                <img src="${imageDataUrl}" alt="Vehicle Image">
                <p><strong>Brand:</strong> ${brand}</p>
                <p><strong>Doors:</strong> ${doors !== undefined ? doors : 'N/A'}</p>
                <p><strong>Location:</strong> ${location || 'N/A'}</p>
               <!-- <p><strong>Vehicle ID:</strong> ${vehicleID}</p> -->
                <p><strong>Color:</strong> ${color || 'N/A'}</p>
                <p><strong>Acquisition Date:</strong> ${acquisitionDate || 'N/A'}</p>
                <p><strong>Active:</strong> ${active !== undefined ? (active ? 'Yes' : 'No') : 'N/A'}</p>
                <p><strong>Odometer:</strong> ${odometer !== undefined ? odometer : 'N/A'} ${odometerUnit || 'N/A'}</p>
                <p><strong>Power:</strong> ${power !== undefined ? power : 'N/A'}</p>
                <p><strong>Transmission:</strong> ${transmission || 'N/A'}</p>
                <p><strong>State:</strong> ${state || 'N/A'}</p>
                <p><strong>Tags:</strong> ${tags || 'N/A'}</p>
                <button class="btn-book" onclick="bookNow('${companyName}', '${brand}', ${vehicleID})">Book Now</button>
            </div>
        </body>

        </html>
    `);
}

        function bookNow(companyName, brand, vehicleID) {
            alert(Booking confirmed for ${brand} from ${companyName}. Vehicle ID: ${vehicleID});
        }

        // Appel de la fonction displayCarCatalog avec les données obtenues du serveur
        displayCarCatalog(<?php echo json_encode($cars); ?>);
    </script>

    <?php include('includes/footer.php');?>
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <?php include('includes/login.php');?>
    <?php include('includes/registration.php');?>
    <?php include('includes/forgotpassword.php');?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <script src="assets/switcher/js/switcher.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
</body>

</html>