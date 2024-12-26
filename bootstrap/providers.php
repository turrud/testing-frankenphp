<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,
];

// untuk akses panel filament jika gagal
// sudo a2enmod rewrite
// sudo apache2ctl -t
// sudo systemctl restart apache2