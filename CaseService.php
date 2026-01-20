class CaseService
{
    public function create(array $data): array
    {
        $case = LegalCase::create($data);

        return [
            'id' => (string) $case->_id,
            'title' => $case->title,
            'description' => $case->description,
            'client_id' => $case->client_id
        ];
    }
}
