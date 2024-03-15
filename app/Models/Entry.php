<?php
// app/Models/Entry.php
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'user_id','full_name', 'surname', 'company', 'phone_number', 'email', 'entry_title',
        'project_category', 'description', 'owner_developer_name', 'developer_name',
        'date_of_completion', 'capital_investment', 'economic_return', 'tenant_profile',
        'BBBEE_status', 'overall_impact', 'design_concept', 'functionality_fit_for_purpose',
        'facilities_user_satisfaction', 'environmentally_sustainable_design', 'social_transformation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function docs()
    {
        return $this->hasMany(EntryDoc::class);
    }

    public function images()
    {
        return $this->hasMany(EntryImage::class);
    }
}