<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'teaser',
        'price_excl',

        'media_url',
        'is_business',
        'program_text',

        'kmo_theme_id',
        'sector_id',
        'course_type_id',
        'duration_id',
        'level_id',
        'study_type_id',

        'details_text',
        'details_extra_info',
        'details_for_text',
        'details_requirements_text',
    ];

    public function kmoThemes()
    {
        return $this->hasOne(KmoTheme::class);
    }

    public function sectors()
    {
        return $this->hasOne(Sector::class);
    }

    public function courseTypes()
    {
        return $this->hasOne(CourseType::class);
    }

    public function durations()
    {
        return $this->hasOne(Level::class);
    }

    public function studyType()
    {
        return $this->hasOne(StudyType::class);
    }

    public function forWhos()
    {
        return $this->hasMany(ForWho::class);
    }

    public function savings()
    {
        return $this->hasMany(Saving::class);
    }

    public function specialProperties()
    {
        return $this->hasMany(SpecialProperty::class);
    }

    public function priceDetails()
    {
        return $this->hasMany(PriceDetail::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }

    public function startDates()
    {
        return $this->hasMany(StartDate::class);
    }
}
