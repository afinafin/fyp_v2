const CACHE_NAME = 'ME-app-cache-v1';
const urlsToCache = [
    '/',
    'index.html',
    'portfolio-details.html',
    'assets/css/style.css',
    'assets/js/main.js',
    'manifest.json',
    'assets/img/logoME2.png',
];

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(urlsToCache))
    );
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => response || fetch(event.request))
    );
});
