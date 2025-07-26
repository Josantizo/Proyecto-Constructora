<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public static function getSeoData($page = 'home')
    {
        $seoData = [
            'home' => [
                'title' => 'Foursquare Remodeling LLC - Professional Home Remodeling & Construction Services',
                'description' => 'Expert home remodeling and construction services in the United States. Kitchen renovation, bathroom remodeling, home improvement, and commercial construction. Get a free quote today!',
                'keywords' => 'home remodeling, construction services, kitchen renovation, bathroom remodeling, home improvement, commercial construction, remodeling contractor, home renovation, construction company, remodeling services',
                'og_title' => 'Foursquare Remodeling LLC - Professional Home Remodeling Services',
                'og_description' => 'Transform your space with our expert remodeling and construction services. Kitchen, bathroom, and home renovations with quality craftsmanship.',
                'og_image' => '/images/og-home-remodeling.jpg',
                'canonical' => url('/'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'LocalBusiness',
                    'name' => 'Foursquare Remodeling LLC',
                    'description' => 'Professional home remodeling and construction services',
                    'url' => url('/'),
                    'telephone' => '+1-XXX-XXX-XXXX',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressCountry' => 'US'
                    ],
                    'geo' => [
                        '@type' => 'GeoCoordinates',
                        'latitude' => '40.7128',
                        'longitude' => '-74.0060'
                    ],
                    'openingHours' => 'Mo-Fr 08:00-18:00',
                    'priceRange' => '$$',
                    'serviceArea' => [
                        '@type' => 'GeoCircle',
                        'geoMidpoint' => [
                            '@type' => 'GeoCoordinates',
                            'latitude' => '40.7128',
                            'longitude' => '-74.0060'
                        ],
                        'geoRadius' => '50000'
                    ]
                ]
            ],
            'about' => [
                'title' => 'About Foursquare Remodeling LLC - Your Trusted Construction Partner',
                'description' => 'Learn about Foursquare Remodeling LLC, a professional construction company with years of experience in home remodeling, renovation, and building services across the United States.',
                'keywords' => 'about us, construction company, remodeling contractor, home renovation experts, construction experience, professional builders, remodeling services',
                'og_title' => 'About Foursquare Remodeling LLC - Professional Construction Services',
                'og_description' => 'Professional construction company with years of experience in home remodeling and renovation services.',
                'og_image' => '/images/og-about-construction.jpg',
                'canonical' => url('/about'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Organization',
                    'name' => 'Foursquare Remodeling LLC',
                    'description' => 'Professional construction and remodeling services',
                    'url' => url('/'),
                    'foundingDate' => '2020',
                    'numberOfEmployees' => '10-50'
                ]
            ],
            'services' => [
                'title' => 'Home Remodeling Services - Kitchen, Bathroom & Construction | Foursquare Remodeling',
                'description' => 'Comprehensive home remodeling services including kitchen renovation, bathroom remodeling, flooring, painting, roofing, siding, decks, patios, and commercial construction.',
                'keywords' => 'home remodeling services, kitchen renovation, bathroom remodeling, flooring services, painting services, roofing services, siding installation, deck construction, patio building, commercial construction',
                'og_title' => 'Home Remodeling Services - Kitchen & Bathroom Renovation',
                'og_description' => 'Complete home remodeling services: kitchen renovation, bathroom remodeling, flooring, painting, roofing, and more.',
                'og_image' => '/images/og-remodeling-services.jpg',
                'canonical' => url('/services'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => 'Home Remodeling Services',
                    'description' => 'Professional home remodeling and construction services',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'Foursquare Remodeling LLC'
                    ],
                    'serviceType' => 'Home Remodeling',
                    'areaServed' => 'United States'
                ]
            ],
            'gallery' => [
                'title' => 'Remodeling Portfolio & Gallery - Foursquare Remodeling LLC Projects',
                'description' => 'View our portfolio of completed remodeling projects including kitchen renovations, bathroom remodels, home improvements, and commercial construction work.',
                'keywords' => 'remodeling portfolio, construction gallery, kitchen renovation projects, bathroom remodel examples, home improvement projects, construction work examples',
                'og_title' => 'Remodeling Portfolio & Gallery - Our Projects',
                'og_description' => 'Browse our portfolio of completed remodeling and construction projects.',
                'og_image' => '/images/og-remodeling-gallery.jpg',
                'canonical' => url('/gallery'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'ImageGallery',
                    'name' => 'Remodeling Portfolio',
                    'description' => 'Gallery of completed remodeling projects'
                ]
            ],
            'handyman' => [
                'title' => 'Handyman Services - Home Repairs & Maintenance | Foursquare Remodeling',
                'description' => 'Professional handyman services for home repairs, maintenance, and small renovation projects. Fast, reliable, and affordable solutions for your home.',
                'keywords' => 'handyman services, home repairs, home maintenance, small renovation projects, home improvement, repair services, maintenance services',
                'og_title' => 'Handyman Services - Home Repairs & Maintenance',
                'og_description' => 'Professional handyman services for home repairs and maintenance projects.',
                'og_image' => '/images/og-handyman-services.jpg',
                'canonical' => url('/handyman'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'Service',
                    'name' => 'Handyman Services',
                    'description' => 'Professional handyman and repair services',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'Foursquare Remodeling LLC'
                    ],
                    'serviceType' => 'Handyman Services'
                ]
            ],
            'contact' => [
                'title' => 'Contact Foursquare Remodeling LLC - Get Your Free Quote Today',
                'description' => 'Contact Foursquare Remodeling LLC for your home remodeling project. Get a free quote, schedule a consultation, or learn more about our construction services.',
                'keywords' => 'contact us, free quote, remodeling consultation, construction services, get quote, schedule consultation, remodeling contractor contact',
                'og_title' => 'Contact Us - Get Your Free Remodeling Quote',
                'og_description' => 'Contact us for a free quote on your home remodeling project.',
                'og_image' => '/images/og-contact-remodeling.jpg',
                'canonical' => url('/contact'),
                'schema' => [
                    '@context' => 'https://schema.org',
                    '@type' => 'ContactPage',
                    'name' => 'Contact Foursquare Remodeling LLC',
                    'description' => 'Contact us for remodeling services and quotes'
                ]
            ]
        ];

        return $seoData[$page] ?? $seoData['home'];
    }
} 