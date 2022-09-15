<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Services\PublicacionesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PublicacionesController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $publicacionesService = new PublicacionesService();

        try {
            $publicaciones = $publicacionesService->getAllPublicacionesPaginated(10);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'false',
                'message' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'success' => 'true',
            'publicaciones' => $publicaciones
        ], 200);
    }
}
