<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Settings
    Route::apiResource('settings', 'SettingsApiController');

    // Speakers
    Route::post('speakers/media', 'SpeakersApiController@storeMedia')->name('speakers.storeMedia');
    Route::apiResource('speakers', 'SpeakersApiController');

    // Schedules
    Route::apiResource('schedules', 'ScheduleApiController');

    // Venues
    Route::post('venues/media', 'VenuesApiController@storeMedia')->name('venues.storeMedia');
    Route::apiResource('venues', 'VenuesApiController');

    // Hotels
    Route::post('hotels/media', 'HotelsApiController@storeMedia')->name('hotels.storeMedia');
    Route::apiResource('hotels', 'HotelsApiController');

    // Galleries
    Route::post('galleries/media', 'GalleriesApiController@storeMedia')->name('galleries.storeMedia');
    Route::apiResource('galleries', 'GalleriesApiController');

    // Sponsors
    Route::post('sponsors/media', 'SponsorsApiController@storeMedia')->name('sponsors.storeMedia');
    Route::apiResource('sponsors', 'SponsorsApiController');

    // Faqs
    Route::apiResource('faqs', 'FaqsApiController');

    // Amenities
    Route::apiResource('amenities', 'AmenitiesApiController');

    // Prices
    Route::apiResource('prices', 'PricesApiController');
});
