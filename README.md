GENERATE STATIC :

https://github.com/spatie/laravel-export

https://github.com/topics/laravel-admin-panel

"spatie/laravel-export": "^0.3.10",
"spatie/regex": "^3.1"



config/export.php


'paths' => [
'/'
],

'include_files' => [
'public' => '',
],  

'exclude_file_patterns' => [
'/\.php$/',
'/mix-manifest\.json$/',
],



config/filesystems.php


'export' => [
'driver' => 'local',
'root' => base_path('out'),
],
