class CaseController extends Controller
{
    public function store(StoreCaseRequest $request, CaseService $service)
    {
        try {
            return response()->json(
                $service->create($request->validated()),
                201
            );
        } catch (\Throwable $e) {
            return response()->json(
                ['error' => 'Error creating case'],
                500
            );
        }
    }
}
