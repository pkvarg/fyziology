{{-- Schema.org JSON-LD Structured Data for Fyziology --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["MedicalBusiness", "LocalBusiness", "HealthAndBeautyBusiness"],
      "@id": "https://fyziology.sk/#organization",
      "name": "Fyziology",
      "legalName": "Mgr. Vladimír Chovanec - Fyziology",
      "url": "https://fyziology.sk",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ asset('assets/images/logo.png') }}",
        "width": 200,
        "height": 60
      },
      "image": {
        "@type": "ImageObject",
        "url": "{{ asset('assets/images/ambulance.jpg') }}"
      },
      "description": "Fyziology je moderná a dynamická firma zameraná na poskytovanie kvalitných fyzioterapeutických služieb a rehabilitácie v Bratislave a okolí. Poskytujeme mobilnú fyzioterapiu priamo v domácom prostredí klientov.",
      "telephone": "+421918378781",
      "email": "info@fyziology.sk",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Námestie Martina Benku 12",
        "addressLocality": "Bratislava",
        "addressRegion": "Bratislavský kraj",
        "postalCode": "81107",
        "addressCountry": "SK"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "48.1486",
        "longitude": "17.1077"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "08:00",
          "closes": "18:00"
        }
      ],
      "priceRange": "€€",
      "currenciesAccepted": "EUR",
      "paymentAccepted": "Cash, Bank Transfer, Invoice",
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "48.1486",
          "longitude": "17.1077"
        },
        "geoRadius": "30000"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Fyzioterapeutické služby",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mobilná fyzioterapia",
              "description": "Profesionálna fyzioterapia priamo u vás doma v Bratislave a okolí"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Ambulantná fyzioterapia",
              "description": "Fyzioterapia v našej modernej ambulancii v Bratislave"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Bankovanie",
              "description": "Terapeutické bankovanie pre uvoľnenie svalov a zlepšenie prekrvenia"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Masáže",
              "description": "Klasické, reflexné masáže a mäkké techniky"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Fyzioterapia pre seniorov",
              "description": "Špeciálne prispôsobená fyzioterapia pre starších ľudí"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Neurologická fyzioterapia",
              "description": "Fyzioterapia pri neurologických ochoreniach"
            }
          }
        ]
      },
      "sameAs": [
        "https://www.facebook.com/fyziology.sk",
        "https://www.instagram.com/fyziology.sk"
      ],
      "founder": {
        "@type": "Person",
        "@id": "https://fyziology.sk/#founder",
        "name": "Vladimír Chovanec",
        "honorificPrefix": "Mgr.",
        "jobTitle": "Fyzioterapeut",
        "description": "Fyzioterapeut s bakalárskym a magisterským vzdelaním, ktorý sa venuje pomoci klientom dosiahnuť ich maximálny potenciál v oblasti pohybu a zdravia.",
        "alumniOf": [
          {
            "@type": "EducationalOrganization",
            "name": "Slovenská zdravotnícka univerzita v Bratislave"
          },
          {
            "@type": "EducationalOrganization",
            "name": "Univerzita sv. Cyrila a Metoda v Trnave"
          }
        ],
        "worksFor": {
          "@id": "https://fyziology.sk/#organization"
        }
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://fyziology.sk/#website",
      "url": "https://fyziology.sk",
      "name": "Fyziology",
      "description": "Mobilná a ambulantná fyzioterapia v Bratislave",
      "publisher": {
        "@id": "https://fyziology.sk/#organization"
      },
      "inLanguage": "sk-SK"
    },
    {
      "@type": "WebPage",
      "@id": "{{ url()->current() }}#webpage",
      "url": "{{ url()->current() }}",
      "name": "@yield('title') | Fyziology",
      "isPartOf": {
        "@id": "https://fyziology.sk/#website"
      },
      "about": {
        "@id": "https://fyziology.sk/#organization"
      },
      "description": "@hasSection('og_description')@yield('og_description')@else Fyziology - mobilná a ambulantná fyzioterapia v Bratislave @endif",
      "inLanguage": "sk-SK"
    }
  ]
}
</script>
