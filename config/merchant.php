<?php

/**
 * Google Merchant Center + storefront source of truth for NAP, shipping,
 * returns, currency and catalog mappings. Feed, JSON-LD and legal copy
 * must read from here so they cannot drift.
 */

return [

    'feed_token' => env('MERCHANT_FEED_TOKEN', ''),
    'currency' => env('MERCHANT_CURRENCY', 'EUR'),
    'target_country' => env('MERCHANT_TARGET_COUNTRY', 'ES'),
    'default_brand' => env('MERCHANT_DEFAULT_BRAND', ''),
    'feed_id_prefix' => 'lv-',

    // true ONLY once each old_price is documented as the lowest price really
    // charged in the 30 days before the discount. Otherwise no strike-through
    // price nor sale_price is published anywhere.
    'reference_prices_verified' => (bool) env('MERCHANT_REFERENCE_PRICES_VERIFIED', false),

    'nap' => [
        // Identidad confirmada de Leñas El Molar C.B.
        // Teléfono: no modificar (instrucción explícita — conservar el valor ya presente).
        // Email: no confirmado para esta entidad — no inventar.
        'legal_name' => 'Leñas El Molar C.B.',
        'commercial_name' => 'Leñas El Molar',
        'alternate_name' => 'Leñas y Carbones El Molar',
        'legal_form' => 'Comunidad de Bienes (C.B.)',
        'vat_id' => 'ESE85899003',
        'tax_id' => 'E85899003',
        'email' => '',
        'telephone' => '+34679245597',
        'telephone_display' => '+34 679 24 55 97',
        'street' => 'Calle de la Salud, 4',
        'postal_code' => '28710',
        'locality' => 'El Molar',
        'region' => 'Madrid',
        'country' => 'ES',
        'country_name' => 'España',
        'address_line' => 'Calle de la Salud, 4, 28710 El Molar (Madrid), España',
        'activity_since' => '2010',
        'cnae' => '161',
        'cnae_label' => 'Sciage et rabotage du bois',
    ],

    // Plazos/precio de envío: valores heredados del template. No están confirmados
    // para Leñas El Molar C.B. — no presentarlos en el escaparate como hechos
    // definitivos hasta validación comercial. El feed los lee vía env.
    'shipping' => [
        'country' => 'ES',
        'service' => 'Estándar',
        'price' => env('MERCHANT_SHIPPING_PRICE', '0.00'),
        'min_days' => (int) env('MERCHANT_SHIPPING_MIN_DAYS', 2),
        'max_days' => (int) env('MERCHANT_SHIPPING_MAX_DAYS', 4),
        'handling_min' => 0,
        'handling_max' => 1,
        'transit_min' => 2,
        'transit_max' => 3,
        'zone_label' => 'consultar disponibilidad',
    ],

    'returns' => [
        'days' => (int) env('MERCHANT_RETURN_DAYS', 14),
        'customer_pays_return_shipping' => true,
        'refund_days' => 14,
    ],

    /*
     | Official Google product taxonomy leaf IDs (numeric). Assigned by
     | storefront category, overridable per product via google_product_category.
     | https://support.google.com/merchants/answer/6324436
     */
    'google_product_category' => [
        'lena' => '625',
        'pellets-de-madera' => '625',
        'madera-densificada' => '625',
        'a-granel' => '625',
        'estufas-de-pellets' => '2639',
        'cocinas-de-lena' => '2639',
        'calderas-de-lena' => '3082',
    ],

    /*
     | Brand needles (longest first). Only names that already appear in
     | catalog titles — never invented manufacturer identities.
     */
    'brands' => [
        'Natural Energie' => 'Natural Energie',
        'Pellets Naturkraft' => 'Naturkraft',
        'Naturkraft' => 'Naturkraft',
        'Naturpellet' => 'Naturpellet',
        'Ardenforest' => 'Ardenforest',
        'Starforest' => 'Starforest',
        'Bioforestal' => 'Bioforestal',
        'Proxima Star' => 'Proxima Star',
        'MM Royal' => 'MM Royal',
        'Bio Energy' => 'Bio Energy',
        'Green Energy' => 'Green Energy',
        'Excellent pellets' => 'Excellent',
        'excellent pellets' => 'Excellent',
        'Edilkamin' => 'Edilkamin',
        'Woodstock' => 'Woodstock',
        'Coterram' => 'Coterram',
        'Valboval' => 'Valboval',
        'Van Roje' => 'Van Roje',
        'Limouzi' => 'Limouzi',
        'Vimasol' => 'Vimasol',
        'Nova Leña' => 'Nova Leña',
        'Mi Pellet' => 'Mi Pellet',
        'DIN Pellets' => 'DIN Pellets',
        'Pellet Gold' => 'Gold',
        'Pellet Bear' => 'Bear',
        'Pellet Badger' => 'Badger',
        'Pellet Helios' => 'Helios',
        'Palé Helios' => 'Helios',
        'Palser' => 'Palser',
        'CYL Pellet' => 'CYL',
        'Moravia' => 'Moravia',
        'Hunter' => 'Hunter',
        'Edilkamin' => 'Edilkamin',
        'Temy' => 'Temy',
        'Vulkan' => 'Vulkan',
        'Vulcan' => 'Vulkan',
        'Olimpia' => 'Olimpia',
        'Olympia' => 'Olimpia',
        'Olymp' => 'Olimpia',
        'Olimp' => 'Olimpia',
        'MBS' => 'MBS',
        'BESTIA' => 'Bestia',
        'MATILDE' => 'Matilde',
        'SAMANTHA' => 'Samantha',
        'VEGA' => 'Vega',
        'ELITE' => 'Elite',
        'CHIP2' => 'Edilkamin',
        'BP-100' => 'FM',
        'BP-CH0' => 'FM',
        'BP-402' => 'FM',
        'CERO rem' => 'Cero',
    ],
];
