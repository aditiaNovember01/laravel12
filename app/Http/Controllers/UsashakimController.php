<?php

namespace App\Http\Controllers;

use App\Models\Usashakim;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UsashakimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $usashakim = Usashakim::all();
        return response()->json([
            'success' => true,
            'data' => $usashakim
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nobp' => 'required|string|max:255'
        ]);

        $usashakim = Usashakim::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil ditambahkan',
            'data' => $usashakim
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usashakim $usashakim): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $usashakim
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usashakim $usashakim): JsonResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nobp' => 'required|string|max:255'
        ]);

        $usashakim->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil diperbarui',
            'data' => $usashakim
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usashakim $usashakim): JsonResponse
    {
        $usashakim->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus'
        ]);
    }
} 