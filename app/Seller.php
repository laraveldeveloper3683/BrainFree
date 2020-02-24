<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Seller
 *
 * @property int $id
 * @property string $f_name
 * @property string $l_name
 * @property string $email
 * @property int $phone
 * @property string $street
 * @property string $near_place
 * @property string $city
 * @property string $district
 * @property string $state
 * @property string $country
 * @property string $business_name
 * @property string $business_work_type
 * @property string $password
 * @property string $seller_photo
 * @property string $seller_pan_card_photo
 * @property string $seller_adhaar_card_front
 * @property string $seller_adhaar_card_back
 * @property string|null $seller_logo
 * @property string $seller_office_photo
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereBusinessWorkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereNearPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerAdhaarCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerAdhaarCardFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerOfficePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerPanCardPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereSellerPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Seller whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Seller extends Model
{
    //
}
