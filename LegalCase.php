use MongoDB\Laravel\Eloquent\Model;

class LegalCase extends Model
{
    protected $collection = 'cases';

    protected $fillable = [
        'title',
        'description',
        'client_id'
    ];
}
