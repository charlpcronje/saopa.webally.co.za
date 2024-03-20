<?php
// app/Models/Entry.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'user_id',
        'title',    
        'property_category', 
        'description',    
        'owner_client_company',   
        'developer_name',   
        'completion_date',   
        'capital_investment',   
        'economic_return',    
        'street_address',     
        'overall_impact',    
        'design_concept',  
        'tenant_convenience',  
        'functionality_fit_for_purpose',
        'facilities_user_satisfaction',  
        'environmental_sustainability',
        'BBBEE_status',     
        'social_transformation'  
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function judges()
    {
        return $this->belongsToMany(Judge::class, 'entry_judge');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function documents()
    {
        return $this->hasMany(EntryDocument::class);
    }
    public function architecturalDrawings()
    {
        return $this->hasMany(EntryArchitecturalDrawing::class);
    }
    public function images()
    {
        return $this->hasMany(EntryImage::class);
    }

    public function criteriaRatings()
    {
        return $this->hasMany(CriteriaEntryRating::class);
    }

    public function docs()
    {
        return $this->hasMany(EntryDoc::class);
    }

}