@extends('customer.services.layout.service')
@section('title', "Montly Fuel Surcharge")
@section('css')
<link href="{{ asset('css/forms.css') }}" rel="stylesheet">
<link href="{{ asset('css/services.css') }}" rel="stylesheet">
@endsection
<style>
    .services-image {
        height: 50%;
        background: url('/img/service-level-new.png') no-repeat;
        background-position: 50% 50%;
        background-size: cover;
    }
</style>
@section('service-image')

@endsection

@section('sla-surcharges-panel')
<div class="container" style="width: 1226px;">
    <h2 class="service-title" style="width: max-content;margin-left: 0;">Service Level Agreement and Surcharges Information | Effective 1st Jan <?= date('Y') ?></h2>

    <ul class="accordion">
        <li>
          <a class="toggle accordion-parent collapsed" href="javascript:void(0);">OPTIONAL SERVICES</a>
          <ul class="inner">
              <li>
                <a href="#" class="toggle accordion-child collapsed">SPECIAL DELIVERY BY 09:00</a>
                <div class="inner">
                    <p>
                        Available for delivery to selected postcodes within the Worldwide by 0900 on the next available working day (by 1030 to USA). 
                        Please check the delivery postcode before booking at dct.dhl.com
                    </p>
                    <div class="inner-footer">
                        Price Per Shipment: £20.00 + Tariff
                    </div>
                  </div>
              </li>
              <li>
                <a href="#" class="toggle accordion-child collapsed">SPECIAL DELIVERY BY 12:00</a>
                <div class="inner">
                    <p>
                        Available for delivery to selected postcodes within the Worldwide by 1200 on the next available working day. 
                        Please check the delivery postcode before booking at dct.dhl.com
                    </p>
                    <div class="inner-footer">
                        Price Per Shipment: £10.00 + Tariff
                    </div>
                  </div>
              </li>
              <li>
                <a href="#" class="toggle accordion-child collapsed">SATURDAY DELIVERY</a>
                <div class="inner">
                    <p>
                        The delivery of a shipment on a Saturday, when Saturday is not a standard working day, or on a Friday, when Friday is not a standard working day. 
                        This service is only available in selected postal / zip code areas. Please check the delivery postcode before booking at dct.dhl.com
                    </p>
                    <div class="inner-footer">
                        Price Per Shipment: £45.00
                    </div>
                  </div>
              </li>
              <li>
                <a href="#" class="toggle accordion-child collapsed">SHIPMENT INSURANCE -- CHARGED BY SHIPMENT VALUE</a>
                <div class="inner">
                    <p>
                        The provision, at individual shipment level, of declared value coverage above Standard Liability for the amount necessary to repair or 
                        replace a shipment in the event of physical loss or damage.
                    </p>
                    <div class="inner-footer">
                        Percentage of replacement / declared value with: £18.00 or 3% of stated shipment value if higher.
                    </div>
                  </div>
              </li>
          </ul>
        </li>

        <li>
            <a class="toggle accordion-parent collapsed" href="javascript:void(0);">SURCHARGES</a>
            <ul class="inner">
                <li>
                    <a href="#" class="toggle accordion-child collapsed">FUEL SURCHARGE</a>
                        <div class="inner">
                            <p>
                                A variable percentage surcharge, derived from a publicly available jet fuel index or diesel fuel index, which is applied to the weight charge, 
                                Service Premiums and all Surcharges and Optional Service charges.
                            </p>
                        <div class="inner-footer">
                            Price Per Shipment: Calculated Monthly and posted at <a href="/information/monthly-fuel-surcharge">https://impactexpress.co.uk/information/monthly-fuel-surcharge</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">REMOTE AREA DELIVERY</a>
                        <div class="inner">
                            <p>
                                An international remote area delivery or collection is defined by a post code (or town in the absence of post code) that is determined as difficult 
                                to serve or too distant. Applies to the destination address for exports, the origin address for imports and both the origin and destination addresses 
                                for Third Country shipments. To check if Remote Area Service applies to a post code or town name, please visit the 
                                Capability Tool (DCT) at dct.dhl.com
                            </p>
                        <div class="inner-footer">
                            Weight (Amount Per Kg), Min Amount Per Shipment: £0.38 per kg, subject to a minimum charge of £19.00 per shipment.
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">DATA ENTRY</a>
                        <div class="inner">
                            <p>
                                A surcharge applies for each shipment consigned with non-electronic, paper based manual house waybills not entered onto our online booking facility / 
                                with a pre alert manifest sent prior to shipment arrival or without EDI transmitted information being received prior to arrival. Login information 
                                is available on request.
                            </p>
                        <div class="inner-footer">
                            Price Per Shipment: £2.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">SHIPMENT INSURANCE -- CHARGED BY SHIPMENT VALUE</a>
                        <div class="inner">
                            <p>
                                The provision, at individual shipment level, of declared value coverage above Standard Liability for the amount necessary to repair or replace a shipment 
                                in the event of physical loss or damage
                            </p>
                        <div class="inner-footer">
                            Percentage of replacement / declared value with: £18.00 or 3% of stated shipment value if higher.
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">ADDRESS CORRECTION</a>
                        <div class="inner">
                            <p>
                                A Fixed surcharge is applied to any shipment that has an incorrect delivery address at the time of pickup and the delivery cannot be fulfilled after making 
                                efforts at the destination to determine the correct address.
                            </p>
                        <div class="inner-footer">
                            Price Per Shipment: £10.00
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <a class="toggle accordion-parent collapsed" href="javascript:void(0);">ADDITIONAL HANDLING</a>
            <ul class="inner">
                <li>
                    <a href="#" class="toggle accordion-child collapsed">OVERSIZE / OVERWEIGHT PIECE SURCHARGE</a>
                    <div class="inner">
                        <p>
                            This fixed surcharge applies to every piece, including a pallet, that exceeds the scale or volumetric weight of 70kg, or with a single dimension in excess of 120cm. 
                            The Oversize Piece surcharge applies to domestic and international shipments.
                        </p>
                        <div class="inner-footer">
                            Price Per <b>**PIECE**</b>: £70.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">NON STACKABLE PALLET SURCHARGE</a>
                    <div class="inner">
                        <p>
                            This fixed surcharge is applied to every pallet within a shipment that cannot be stacked, either on request by the shipper, or because of its shape, content or packaging. 
                            This surcharge applies to domestic and international shipments.
                        </p>
                        <div class="inner-footer">
                            Price Per <b>**PIECE**</b>: £130.00
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <a class="toggle accordion-parent collapsed" href="javascript:void(0);">DANGEROUS GOODS</a>
            <ul class="inner">
                <h3 style="text-align: center">***--- Please check with dg@impactexpress.co.uk prior to booking ---***</h3>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">FULL DANGEROUS GOODS</a>
                    <div class="inner">
                        <p>
                            The handling and transportation of substances and commodities classified as Full Dangerous Goods either on our suppliers air or road network or on commercial airlines. 
                            Comprises Full IATA Dangerous Goods to the limits of ADR (Accord Dangerous Routier) Limited Quantities (LQ).
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £85.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">LITHIUM BATTERIES -- UP TO 4 ITEMS PER CONSIGNMENT</a>
                    <div class="inner">
                        <p>
                            You may send a maximum of 4 items containing a battery per consignment, each item containing a battery and must be contained within the item (Smartphone / Laptop / Tablet etc.)
                            they are intended to power and packed in the original box. A Maximum of 2 boxes per consignment each containing 2x separately boxed items containing lithium batteries allowed. 
                            Please check with dg@impactexpress.co.uk to confirm packing instructions and country regulations prior to booking.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: Standard Tariff
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">LITHIUM BATTERIES -- MORE THAN 4 ITEMS PER CONSIGNMENT</a>
                    <div class="inner">
                        <p>
                            You may send more than 4 items containing a battery but they must still be contained within the item (Smartphone / Laptop / Tablet etc.)
                            they are intended to power and packed in the original box. They can be packed all within one or more box per consignment. 
                            Please check with dg@impactexpress.co.uk to confirm packing instructions and country regulations prior to booking.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £20.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">LITHIUM BATTERIES -- IATA SECTION II (PI967/969/970)</a>
                    <div class="inner">
                        <p>
                            The handling and transportation of shipments containing Lithium Ion or Lithium Metal batteries compliant with the appropriate IATA Packing 
                            instructions (PI966 or 969) either on our suppliers air or road networks or on commercial airlines.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £20.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">LITHIUM BATTERIES -- IATA SECTION IB, II (PI965, PI968)</a>
                    <div class="inner">
                        <p>
                            The handling and transportation of shipments containing loose Lithium Ion Batteries compliant with the appropriate IATA Packing Instructions 
                            (PI965) on the DHL air network.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £85.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">DANGEROUS GOODS IN EXCEPTED QUANTITIES</a>
                    <div class="inner">
                        <p>
                            The handling and transportation of substances and commodities classified as Excepted Quantities in accordance with the IATA Dangerous Goods Regulations 
                            (DGR) and permitted on passenger aircrafts or in accordance with ADR (Accord Dangerous Routier) when transported by road.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £10.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">DANGEROUS GOODS IN LIMITED QUANTITIES BY ROAD</a>
                    <div class="inner">
                        <p>
                            The ground handling and transportation of substances and commodities classified as Limited Quantities to the limits of ADR 
                            (Accord Dangerous Routier) that are prohibited for air transportation.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £32.00
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">DRY ICE UN1845</a>
                    <div class="inner">
                        <p>
                            The provision, handling and transportation of Dry Ice (UN1845) used as a cooling agent for non-dangerous goods on either the DHL 
                            air or road network or on commercial airlines. Can include replenishment during transit.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: £16.00
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <a class="toggle accordion-parent collapsed" href="javascript:void(0);">SECURITY CHARGES</a>
            <ul class="inner">
                <li>
                    <a href="#" class="toggle accordion-child collapsed">RESTRICTED DESTINATION SURCHARGE</a>
                    <div class="inner">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor laoreet volutpat. Aliquam ultrices mauris id mattis imperdiet. Aenean cursus ultrices justo et varius. Suspendisse aliquam orci id dui dapibus
                        blandit. In hac habitasse platea dictumst. Sed risus velit, pellentesque eu enim ac, ultricies pretium felis.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: Asdf
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">ELEVATED RISK SURCHARGE</a>
                    <div class="inner">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor laoreet volutpat. Aliquam ultrices mauris id mattis imperdiet. Aenean cursus ultrices justo et varius. Suspendisse aliquam orci id dui dapibus
                        blandit. In hac habitasse platea dictumst. Sed risus velit, pellentesque eu enim ac, ultricies pretium felis.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: Asdf
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="toggle accordion-child collapsed">EXPORTER VALIDATION SURCHARGE</a>
                    <div class="inner">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor laoreet volutpat. Aliquam ultrices mauris id mattis imperdiet. Aenean cursus ultrices justo et varius. Suspendisse aliquam orci id dui dapibus
                        blandit. In hac habitasse platea dictumst. Sed risus velit, pellentesque eu enim ac, ultricies pretium felis.
                        </p>
                        <div class="inner-footer">
                            Price Per Shipment: Asdf
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <a class="accordion-button" href="/resources/Impact-Express-Service-Charges.pdf">VIEW THE FULL COPY OF THE SURCHARGE INFORMATION HERE. <i style="float:right;" class="fas fa-chevron-right"></i></a>
    <br><br>
</div>
@endsection
@section('faq')
<div class="tab" style="height: 100px"></div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous"></script>
<script>
$('.toggle').click(function(e) {
    e.preventDefault();

  var $this = $(this);

  if ($this.hasClass('collapsed')) {
      $this.removeClass('collapsed')
  } else {
      $this.toggleClass('collapsed')
  }

  if ($this.next().hasClass('show')) {
      $this.next().removeClass('show').attr('aria-expanded', !1);
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .inner').removeClass('show');
      $this.parent().parent().find('li .inner').slideUp(350);
      $this.next().toggleClass('show').attr('aria-expanded', !0);
      $this.next().slideToggle(350);
  }
});
</script>
@endsection