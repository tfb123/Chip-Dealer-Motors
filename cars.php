<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Dealership, Cars, BMW, Audi, Mercedes-Benz">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="creation-date" content="Mon, 10, Oct 2022 12:00:00 GMT">
    <meta http-equiv="expires" content="Sat, 31 Dec 2022 23:59:59 GMT">
    <title>Cars</title>
    <link rel="stylesheet" href="cars.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <div id="container">
        <?php include('nav.php'); ?>
        <div id="header"><h1>Cars For Sale</h1></div>
        <div class="allGalleryObjects">
                <!-- https://cars.usnews.com/cars-trucks/audi/a6/2019/specs/a6-premium-55-tfsi-quattro-402057 -->
            <div class="gallery">
                <div class="model"><b>Audi A6 2019</b><br>Premium 55 TFSI quattro</div>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_1.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_2.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_3.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_4.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_5.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_6.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_7.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_8.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_9.jpg" alt="2019 Audi A6"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A6 2019 white/audi_a6_2019_10.jpg" alt="2019 Audi A6"></div>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: 22 City / 29 Highway</li>
                        <li>Engine: Intercooled Turbo Gas/Electric V6 3.0L/183</li>
                        <li>Body Style: Sedan</li>
                        <li>Horsepower (Net @ RPM): 335 @ 5000</li>
                        <li>Torque (Net @ RPM): 369 @ 1370</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/audi/q5/2009/specs/q5-quattro-4dr-3-2l-premium-plus-308995 -->
            <div class="gallery">
                <div class="model"><b>Audi Q5 2009</b><br>Quattro 4dr 3.2L Premium Plus</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_1.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_2.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_3.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_4.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_5.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_6.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_7.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_8.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_9.jpg" alt="2009 Audi Q5"></div>
                        <div class="swiper-slide"><img src="Cars/Audi Q5 2009 black/audi_q5_2009_10.jpg" alt="2009 Audi Q5"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: 18 City / 23 Highway</li>
                        <li>Engine: Gas V6 3.2L/195</li>
                        <li>Body Style: SUV</li>
                        <li>Horsepower (Net @ RPM): 270 @ 6500</li>
                        <li>Torque (Net @ RPM): 243 @ 3000</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/audi/r8/2018/specs/r8-v10-plus-quattro-392829 -->
            <div class="gallery">
                <div class="model"><b>Audi R8 2018</b><br>V10 plus quattro</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_1.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_2.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_3.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_4.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_5.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_6.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_7.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_8.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_9.jpg" alt="2018 Audi R8"></div>
                        <div class="swiper-slide"><img src="Cars/Audi R8 2018 black/audi_r8_2018_10.jpg" alt="2018 Audi R8"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: 14 City / 22 Highway</li>
                        <li>Engine: Premium Unleaded V10 5.2L/318</li>
                        <li>Body Style: Coupe</li>
                        <li>Horsepower (Net @ RPM): 602 @ 7800</li>
                        <li>Torque (Net @ RPM): 413 @ 6500</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/audi/a4/2023/specs/a4-s-line-prestige-45-tfsi-quattro-428275 -->
            <div class="gallery">
                <div class="model"><b>Audi A4 2023</b><br>S line Premium Plus 45 TFSI quattro</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_1.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_2.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_3.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_4.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_5.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_6.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_7.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_8.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_9.jpg" alt="2023 Audi A4"></div>
                        <div class="swiper-slide"><img src="Cars/Audi A4 2023 blue/audi_a4_2023_10.jpg" alt="2023 Audi A4"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: 24 City / 32 Highway</li>
                        <li>Engine: Intercooled Turbo Gas/Electric I-4 2.0 L/121</li>
                        <li>Body Style: Sedan</li>
                        <li>Horsepower (Net @ RPM): 261 @ 5000</li>
                        <li>Torque (Net @ RPM): 273 @ 1600</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/mercedes-benz/c-class/2022/specs/c-class-c-300-sedan-423563 -->
            <div class="gallery">
                <div class="model"><b>Mercedes-Benz C-Class 2022</b><br>C300 Sedan</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_1.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_2.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_3.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_4.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_5.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_6.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_7.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_8.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_9.jpg" alt="2022 Mercedes-Benz C300"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz C300 2022 black/mercedes_benz_c300_2022_10.jpg" alt="2022 Mercedes-Benz C300"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: Rear Wheel Drive</li>
                        <li>MPG: N/A</li>
                        <li>Engine: Intercooled Turbo Gas/Electric I-4 2.0 L/122</li>
                        <li>Body Style: Sedan</li>
                        <li>Horsepower (Net @ RPM): 255 @ 5800</li>
                        <li>Torque (Net @ RPM): 295 @ 2000</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/mercedes-benz/g-class/2008/specs/g-class-g55-amg-293436 -->
            <div class="gallery">
                <div class="model"><b>Mercedes-Benz G-Class 2008</b><br>G55 4WD 4dr 5.5L AMG</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_1.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_2.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_3.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_4.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_5.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_6.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_7.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_8.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_9.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz G55 AMG 2008 black/mercedes_benz_g55_amg_2008_10.jpg" alt="2008 Mercedes-Benz G55 AMG"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: 4-Wheel Drive</li>
                        <li>MPG: 11 City / 13 Highway</li>
                        <li>Engine: Gas V8 5.5L/332</li>
                        <li>Body Style: SUV</li>
                        <li>Horsepower (Net @ RPM): 493 @ 6100</li>
                        <li>Torque (Net @ RPM): 516 @ 2650 - 4000</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/mercedes-benz/s-class/2022/specs/s-class-s-500-4matic-sedan-422965 -->
            <div class="gallery">
                <div class="model"><b>Mercedes-Benz S-Class 2022</b><br>S500 4MATIC Sedan</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_1.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_2.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_3.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_4.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_5.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_6.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_7.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_8.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_9.jpg" alt="2022 Mercedes-Benz S500"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz S500 2022 black/mercedes_benz_s500_2022_10.jpg" alt="2022 Mercedes-Benz S500"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: N/A</li>
                        <li>Engine: Intercooled Turbo Gas/Electric I-6 3.0L/183</li>
                        <li>Body Style: Sedan</li>
                        <li>Horsepower (Net @ RPM): 429 @ 5500</li>
                        <li>Torque (Net @ RPM): 384 @ 1600</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/mercedes-benz/gt/2021/specs/gt-amg-gt-coupe-417745 -->
            <div class="gallery">
                <div class="model"><b>Mercedes-Benz GT 2021</b><br>AMG GT Coupe</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_1.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_2.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_3.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_4.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_5.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_6.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_7.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_8.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_9.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                        <div class="swiper-slide"><img src="Cars/Mercedes-Benz GT AMG 2021 red/mercedes_benz_gt_amg_2021_10.jpg" alt="2021 Mercedes-Benz GT AMG"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: Rear Wheel Drive</li>
                        <li>MPG: 15 City / 20 Highway</li>
                        <li>Engine: Twin Turbo Premium Unleaded V8 4.0L/243</li>
                        <li>Body Style: Coupe</li>
                        <li>Horsepower (Net @ RPM): 523 @ 5500</li>
                        <li>Torque (Net @ RPM): 494 @ 2100</li>
                    </ul>
                </div>
            </div>
        
            <!-- https://cars.usnews.com/cars-trucks/bmw/ix/2022/specs/ix-sports-activity-vehicle-426409 -->
            <div class="gallery">
                <div class="model"><b>BMW iX 2022</b><br>xDrive50 Sports Activity Vehicle</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_1.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_2.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_3.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_4.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_5.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_6.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_7.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_8.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_9.jpg" alt="2022 BMW iX"></div>
                        <div class="swiper-slide"><img src="Cars/BMW iX 2022 black/bmw_ix_2022_10.jpg" alt="2022 BMW iX"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: N/A</li>
                        <li>Engine: Electric</li>
                        <li>Body Style: Sports Activity Vehicle</li>
                        <li>Horsepower (Net @ RPM): 516</li>
                        <li>Torque (Net @ RPM): 564</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/bmw/5-series/2015/specs/5-series-wagon-372387 -->
            <div class="gallery">
                <div class="model"><b>BMW 5-Series 2015</b><br>5dr 535i Gran Turismo RWD</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_1.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_2.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_3.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_4.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_5.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_6.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_7.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_8.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_9.jpg" alt="2015 BMW 535i GT"></div>
                        <div class="swiper-slide"><img src="Cars/BMW 535i Grand Turismo 2015 black/bmw_535d_2015_10.jpg" alt="2015 BMW 535i GT"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: Rear Wheel Drive</li>
                        <li>MPG: 19 City / 28 Highway</li>
                        <li>Engine: Intercooled Turbo Premium Unleaded I-6 3.0L/182</li>
                        <li>Body Style: Hatchback</li>
                        <li>Horsepower (Net @ RPM): 300 @ 5800</li>
                        <li>Torque (Net @ RPM): 300 @ 1200</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/bmw/x6/2017/specs/x6-sports-activity-coupe-388489 -->
            <div class="gallery">
                <div class="model"><b>BMW X6 2017</b><br>xDrive50i Sports Activity Coupe</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_1.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_2.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_3.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_4.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_5.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_6.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_7.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_8.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_9.jpg" alt="2017 BMW X6"></div>
                        <div class="swiper-slide"><img src="Cars/BMW X6 2017 blue/bmw_x6_2017_10.jpg" alt="2017 BMW X6"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: All Wheel Drive</li>
                        <li>MPG: 15 City / 21 Highway</li>
                        <li>Engine: Twin Turbo Premium Unleaded V8 4.4L/268</li>
                        <li>Body Style: Coupe</li>
                        <li>Horsepower (Net @ RPM): 445 @ 5500</li>
                        <li>Torque (Net @ RPM): 480 @ 2000</li>
                    </ul>
                </div>
            </div>
        
                <!-- https://cars.usnews.com/cars-trucks/bmw/z4/2022/specs/z4-roadster-423349 -->
            <div class="gallery">
                <div class="model"><b>BMW Z4 2022</b><br>sDrive30i Roadster</div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_1.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_2.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_3.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_4.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_5.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_6.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_7.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_8.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_9.jpg" alt="2022 BMW Z4"></div>
                        <div class="swiper-slide"><img src="Cars/BMW Z4 2022 blue/bmw_z4_2022_10.jpg" alt="2022 BMW Z4"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="desc">
                    <div class="descName"><b>DESCRIPTION</b></div>
                    <ul>
                        <li>Transmission: Automatic</li>
                        <li>Drivetrain: Rear Wheel Drive</li>
                        <li>MPG: 25 City / 32 Highway</li>
                        <li>Engine: Intercooled Turbo Premium Unleaded I-4 2.0L/122</li>
                        <li>Body Style: Roadster</li>
                        <li>Horsepower (Net @ RPM): 255 @ 5000</li>
                        <li>Torque (Net @ RPM): 295 @ 1550</li>
                    </ul>
                </div>
            </div>
            <script>
                const swiper = new Swiper('.swiper', {
                    loop: true,
            
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            </script>
        </div>
        <div class="tableHeader"><h1><b>Price List</b></h1></div>
        <div id="table">
            <?php 
                require_once 'sql.php';
                $SQL = new SQL();
                
                $result = $SQL->getAllCars();
                echo "<table>";

                echo '<tr id="first">';
                echo "<th>ID</th>";
                echo "<th>Make</th>";
                echo "<th>Model</th>";
                echo "<th>Sub-Model</th>";
                echo "<th>Year</th>";
                echo "<th>Price</th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    foreach($row as $field => $value)
                    {
                        echo "<td> ".$value." </td>" ;
                        
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
        <div id="downloadFile"><a href="Vehicle price list.xlsx" download><b>Download vehicle price list</b></a></div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>