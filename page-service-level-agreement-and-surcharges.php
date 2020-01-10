<?php get_header();
/*
 * Template Name: Service Level Agreement and Surcharges
 */
?>
    <section id="services" class="services">
        <div class="container" style="text-align: left;">
            <div class="service-image">
                <img src="<?= get_field('hero_image')['url']; ?>" alt="<?= get_field('hero_image')['alt']; ?>">
            </div>
            <!-- Breadcrumbs -->
            <div class="container" style="text-align: left;">
                You are here:
                <a href="/">Home</a> >
                <!--suppress XmlUnboundNsPrefix -->
                <ul class="breadcrumbs">
                    <li>
                        <a href='/information'>Information</a> >
                    </li>
                    <!--suppress XmlUnboundNsPrefix -->
                    <li>
                        Service Level Agreement and Surcharges
                    </li>
                </ul>
            </div>
            <br>
            <div class="level-content">
                <h2><b><?php the_title() ?> Information | Effective 1st Jan <?= date('Y')?></b></h2>
                <div class="panel-group" id="accordion">
                    <!-- Optional Services Panel -->
                        <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#OptionServices">
                                    Optional Services
                                </a>
                            </h4>
                        </div>
                        <div id="OptionServices" class="panel-collapse collapse">
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#9AMDelivery" aria-controls="9AMDelivery">
                                Special Delivery by 09:00
                            </button>
                            <div id="9AMDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('pre0900_special')): ?>
                                        <?= get_field('pre0900_special');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('pre0900_special_footer')): ?>
                                        Price Per Shipment: £<?= get_field('pre0900_special_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Pre12Delivery" aria-controls="Pre12Delivery">
                                Special Delivery by 12:00
                            </button>
                            <div id="Pre12Delivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('pre1200_special')): ?>
                                        <?= get_field('pre1200_special');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('pre1200_special_footer')): ?>
                                        Price Per Shipment: £<?= get_field('pre1200_special_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#SatDelivery" aria-controls="SatDelivery">
                                Saturday Delivery
                            </button>
                            <div id="SatDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('saturday_special_delivery')): ?>
                                        <?= get_field('saturday_special_delivery');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('saturday_special_footer')): ?>
                                        Price Per Shipment: £<?= get_field('saturday_special_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Insurance" aria-controls="Insurance">
                                Shipment Insurance --<br> Charged by Shipment Value
                            </button>
                            <div id="Insurance" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('shipment_insurance')): ?>
                                        <?= get_field('shipment_insurance');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('shipment_insurance_footer')): ?>
                                        Percentage of replacement / declared value with: £<?= get_field('shipment_insurance_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END-->

                    <!-- Surcharges Panel -->
                        <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#SurchargeCollapse">
                                    Surcharges
                                </a>
                            </h4>
                        </div>
                        <div id="SurchargeCollapse" class="panel-collapse collapse">
                        <button class="btn panel-surcharge-dropdown collapsed" data-toggle="collapse" data-target="#FuelSurcharge" aria-controls="FuelSurcharge">
                            Fuel Surcharge <span class="accordion-toggle collapsed"></span>
                        </button>
                            <div id="FuelSurcharge" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php if (get_field('fuel_surcharge')): ?>
                                    <?= get_field('fuel_surcharge');?>
                                <?php endif;?>
                            </div>
                            <div class="panel-footer text-info">
                                <?php if (get_field('fuel_surcharge_footer')): ?>
                                    Price Per Shipment: <?= get_field('fuel_surcharge_footer');?>
                                    <a href="<?= the_field('fuel_surcharge_footer_link');?>"><?= the_field('fuel_surcharge_footer_link');?></a>
                                <?php endif;?>
                            </div>
                        </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#RemoteDelivery" aria-controls="RemoteDelivery">
                                Remote Area Delivery
                        </button>
                            <div id="RemoteDelivery" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('remote_area_delivery')): ?>
                                        <?= get_field('remote_area_delivery');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('remote_area_delivery_footer')): ?>
                                        Weight (Amount Per Kg), Min Amount Per Shipment:  £<?= get_field('remote_area_delivery_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DataEntry" aria-controls="DataEntry">
                                Data Entry
                        </button>
                            <div id="DataEntry" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('data_entry_surcharge')): ?>
                                        <?= get_field('data_entry_surcharge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('data_entry_surcharge_footer')): ?>
                                        Price Per Shipment: £<?= get_field('data_entry_surcharge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                        <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Insurance2" aria-controls="Insurance2">
                            Shipment Insurance <br> Charged by Shipment Value
                        </button>
                            <div id="Insurance2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('shipment_insurance')): ?>
                                        <br>
                                        <?= get_field('shipment_insurance');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('shipment_insurance_footer')): ?>
                                        <br>
                                        Percentage of replacement / declared value with: £<?= get_field('shipment_insurance_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#AddrCorrection" aria-controls="AddrCorrection">
                                Address Correction
                            </button>
                            <div id="AddrCorrection" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('address_correction')): ?>
                                        <br>
                                        <?= get_field('address_correction');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('address_correction_footer')): ?>
                                        <br>
                                        Per Shipment: £<?= get_field('address_correction_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END-->

                    <!-- Additional Handling Panel -->
                        <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#HandlingCollapse">
                                   Additional Handling
                                </a>
                            </h4>
                        </div>
                        <div id="HandlingCollapse" class="panel-collapse collapse">
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#Oversize" aria-controls="Oversize">
                                Oversize / Overweight Piece Surcharge
                            </button>
                            <div id="Oversize" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('oversize_charge')): ?>
                                        <?= get_field('oversize_charge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('oversize_charge_footer')): ?>
                                        Price Per <b>**PIECE**</b>: £<?= get_field('oversize_charge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#NonStackablePallet" aria-controls="NonStackablePallet">
                                Non Stackable Pallet Surcharge
                            </button>
                            <div id="NonStackablePallet" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('nonstack_charge')): ?>
                                        <?= get_field('nonstack_charge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('nonstack_charge_footer')): ?>
                                        Price Per <b>**PIECE**</b>: £<?= get_field('nonstack_charge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END-->

                    <!-- DG Surcharges Panel -->
                        <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#DGCollapse">
                                    Dangerous Goods
                                </a>
                            </h4>
                        </div>
                        <div id="DGCollapse" class="panel-collapse collapse">
                            <h4 class="text-center">***--- Please check with dg@impactexpress.co.uk prior to booking ---***</h4>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#FullDG" aria-controls="FullDG">
                                Full Dangerous Goods
                            </button>
                            <div id="FullDG" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('fulldg_charge')): ?>
                                        <?= get_field('fulldg_charge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('fulldg_charge_footer')): ?>
                                        Price Per Shipment: £<?= get_field('fulldg_charge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteries-4" aria-controls="LithiumBatteries-4">
                               Lithium Batteries<br> Up to 4 items per Consignment
                            </button>
                            <div id="LithiumBatteries-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('lithium_batteries_up_to_4')): ?>
                                        <?= get_field('lithium_batteries_up_to_4');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('lithium_batteries_up_to_4_footer')): ?>
                                        Price Per Shipment: <?= get_field('lithium_batteries_up_to_4_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteries4plus" aria-controls="LithiumBatteries4plus">
                                Lithium Batteries <br> More than 4 items per <br>Consignment
                            </button>
                            <div id="LithiumBatteries4plus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('LithiumBatteries_4plus_charge')): ?>
                                        <?= get_field('LithiumBatteries_4plus_charge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('LithiumBatteries_4plus_charge_footer')): ?>
                                        Price Per Shipment: £<?= get_field('LithiumBatteries_4plus_charge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteriesSecII" aria-controls="LithiumBatteriesSecII">
                                Lithium Batteries <br> IATA Section II (PI967, 969, 970)
                            </button>

                            <div id="LithiumBatteriesSecII" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if (get_field('Li-IonSecII_charge')): ?>
                                        <?= get_field('Li-IonSecII_charge');?>
                                    <?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
                                    <?php if (get_field('Li-IonSecII_charge_footer')): ?>
                                        Price Per Shipment: £<?= get_field('Li-IonSecII_charge_footer');?>
                                    <?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#LithiumBatteriesSec1BII" aria-controls="LithiumBatteriesSec1BII">
                                Lithium Batteries <br> IATA Section 1B, II (PI965, PI968)
                            </button>
                            <div id="LithiumBatteriesSec1BII" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('Li-IonSec1BII_charge')): ?>
										<?= get_field('Li-IonSec1BII_charge');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('Li-IonSec1BII_charge_footer')): ?>
                                        Price Per Shipment: £<?= get_field('Li-IonSec1BII_charge_footer');?>
									<?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DGinEQ" aria-controls="DGinEQ">
                                Dangerous Goods in <br>Excepted Quantities
                            </button>
                            <div id="DGinEQ" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('DG_in_EQ')): ?>
										<?= get_field('DG_in_EQ');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('DG_in_EQ_footer')): ?>
                                        Price Per Shipment: £<?= get_field('DG_in_EQ_footer');?>
									<?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DGLimitedQuantities" aria-controls="DGLimitedQuantities">
                                Dangerous Goods in <br>Limited Quantities By Road
                            </button>
                            <div id="DGLimitedQuantities" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('DG_in_LQ')): ?>
										<?= get_field('DG_in_LQ');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('DG_in_LQ_footer')): ?>
                                        Price Per Shipment: £<?= get_field('DG_in_LQ_footer');?>
									<?php endif;?>
                                </div>
                            </div>
                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#DryIce" aria-controls="DryIce">
                                Dry Ice UN1845
                            </button>
                            <div id="DryIce" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('UN1845_Dry_Ice')): ?>
										<?= get_field('UN1845_Dry_Ice');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('UN1845_Dry_Ice_footer')): ?>
                                        Price Per Shipment: £<?= get_field('UN1845_Dry_Ice_footer');?>
									<?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
            <!--END-->

                    <!-- Security Charges Panel -->
                        <div class="panel panel-light">
                        <div class="panel-head">
                            <h4 class="panel-title">
                                <a class="btn panel-surcharge-dropdown-parent accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#Securitycollapse">
                                   Security Charges
                                </a>
                            </h4>
                        </div>
                        <div id="Securitycollapse" class="panel-collapse collapse">

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed"
                                    data-toggle="collapse" data-target="#RestrictedDest"
                                    aria-controls="RestrictedDest">
                                Restricted Destination Surcharge
                            </button>
                            <div id="RestrictedDest" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('Restricted_Destinations')): ?>
										<?= get_field('Restricted_Destinations');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('Restricted_Destinations_footer')): ?>
                                        Price Per Shipment: £<?= get_field('Restricted_Destinations_footer');?><br>
                                        * Both Charges will apply Per Shipment.
									<?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#ElevatedRisk"
                                    aria-controls="ElevatedRisk">
                                Elevated Risk Surcharge
                            </button>
                            <div id="ElevatedRisk" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('Elevated_Risk')): ?>
										<?= get_field('Elevated_Risk');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('Elevated_Risk_footer')): ?>
                                        Price Per Shipment: £<?= get_field('Elevated_Risk_footer');?><br>
                                        * Both Charges will apply Per Shipment.
									<?php endif;?>
                                </div>
                            </div>

                            <button class="btn panel-surcharge-dropdown accordion-toggle collapsed" data-toggle="collapse" data-target="#ExporterValidation"
                                    aria-controls="ExporterValidation">
                                Exporter Validation Surcharge
                            </button>
                            <div id="ExporterValidation" class="panel-collapse collapse">
                                <div class="panel-body">
									<?php if (get_field('Exporter_Validation')): ?>
										<?= get_field('Exporter_Validation');?>
									<?php endif;?>
                                </div>
                                <div class="panel-footer text-info">
									<?php if (get_field('Exporter_Validation_footer')): ?>
                                        Price Per Shipment: £<?= get_field('Exporter_Validation_footer');?><br>
                                        * Both Charges will apply Per Shipment.
									<?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END-->

                </div>
                <br>
                    <br>
                        <a class="btn panel-surcharge-dropdown-parent btn-default"
                           href="https://impactexpress.co.uk/wp-content/uploads/2020/01/Impact-Express-Service-Charges-2020.pdf">
                            View the Full Copy of the <br>Surcharge Information Here.
                            <i style="position:relative; bottom:14px;" class="pull-right fa fa-chevron-right"></i>
                        </a>
                    <br>
                <br>
            </div>
        </div>
</section>
<?php get_footer(); ?>