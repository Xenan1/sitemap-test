<?php

use Xenan\Sitemap\Enums\FileType;
use Xenan\Sitemap\SitemapGenerator;

require __DIR__ . '/vendor/autoload.php';

$pages = [
    [
        'loc' => 'https://site.ru/index',
        'lastmod' => '2020-12-14',
        'priority' => 1,
        'changefreq' => 'hourly'
    ],
    [
        'loc' => 'https://site.ru/news',
        'lastmod' => '2020-12-10',
        'priority' => 0.5,
        'changefreq' => 'daily'
    ],
    [
        'loc' => 'https://site.ru/about',
        'lastmod' => '2020-12-07',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products',
        'lastmod' => '2020-12-12',
        'priority' => 0.5,
        'changefreq' => 'daily'],
    [
        'loc' => 'https://site.ru/products/ps5',
        'lastmod' => '2020-12-11',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products/xbox',
        'lastmod' => '2020-12-12',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ],
    [
        'loc' => 'https://site.ru/products/wii',
        'lastmod' => '2023-12-11',
        'priority' => 0.1,
        'changefreq' => 'weekly'
    ]

];


SitemapGenerator::run($pages, FileType::Csv, '/var/www/html/sitemaps/csv/sitemap.csv');
SitemapGenerator::run($pages, FileType::Json, '/var/www/html/sitemaps/json/sitemap.json');
SitemapGenerator::run($pages, FileType::Xml, '/var/www/html/sitemaps/xml/sitemap.xml');
