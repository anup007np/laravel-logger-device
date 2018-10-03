Laravel Company Device Logger 

Description
A company is in need for a tool to log changes of company devices. It is using RESTful api implementation with CRUD to manage logging for incidents, changes (or change requests) for various devices. 

Techniques used
1. PHP / MySQL
2. Laravel 5.7
3. API based RESTful
4. Seeders​ classes to seed the database with some test data 
5. Used ModelFactory​ for easier seeding
5. ​Request​ classes to validate requests


To Seed the database 
    - php artisan db:seed

To run the test for log endpoints
    - ./vendor/bin/phpunit

Things left to do:
 - Create testing for all the endpoints.

Routes List
 +--------+-----------+----------------------+-----------------+-----------------------------------------------+--------------+
| Domain | Method    | URI                  | Name            | Action                                        | Middleware   |
+--------+-----------+----------------------+-----------------+-----------------------------------------------+--------------+
|        | GET|HEAD  | api/devices          | devices.index   | App\Http\Controllers\DeviceController@index   | api          |
|        | POST      | api/devices          | devices.store   | App\Http\Controllers\DeviceController@store   | api          |
|        | GET|HEAD  | api/devices/{device} | devices.show    | App\Http\Controllers\DeviceController@show    | api          |
|        | PUT|PATCH | api/devices/{device} | devices.update  | App\Http\Controllers\DeviceController@update  | api          |
|        | DELETE    | api/devices/{device} | devices.destroy | App\Http\Controllers\DeviceController@destroy | api          |
|        | GET|HEAD  | api/logs             | logs.index      | App\Http\Controllers\LogController@index      | api          |
|        | POST      | api/logs             | logs.store      | App\Http\Controllers\LogController@store      | api          |
|        | GET|HEAD  | api/logs/{log}       | logs.show       | App\Http\Controllers\LogController@show       | api          |
|        | PUT|PATCH | api/logs/{log}       | logs.update     | App\Http\Controllers\LogController@update     | api          |
|        | DELETE    | api/logs/{log}       | logs.destroy    | App\Http\Controllers\LogController@destroy    | api          |
|        | GET|HEAD  | api/user             |                 | Closure                                       | api,auth:api |
+--------+-----------+----------------------+-----------------+-----------------------------------------------+--------------+