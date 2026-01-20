class StoreCaseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'description' => 'required',
            'client_id' => 'required'
        ];
    }
}
