<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Buyer
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
 * @property string $buyer_photo
 * @property string $buyer_pan_card_photo
 * @property string $buyer_adhaar_card_front
 * @property string $buyer_adhaar_card_back
 * @property string|null $buyer_logo
 * @property string $buyer_office_photo
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBusinessWorkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerAdhaarCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerAdhaarCardFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerOfficePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerPanCardPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereBuyerPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereNearPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buyer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Buyer extends Model
{
    //
}
