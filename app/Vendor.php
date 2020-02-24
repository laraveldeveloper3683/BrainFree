<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Vendor
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
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $vendor_adhaar_card_front
 * @property string $vendor_adhaar_card_back
 * @property string $vendor_business_logo
 * @property string $vendor_business_front
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereBusinessWorkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereNearPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereVendorAdhaarCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereVendorAdhaarCardFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereVendorBusinessFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vendor whereVendorBusinessLogo($value)
 * @mixin \Eloquent
 */
class Vendor extends Model
{
  use HasRoles;
    protected $guarded=[];
    protected $guard_name = 'web';
}
