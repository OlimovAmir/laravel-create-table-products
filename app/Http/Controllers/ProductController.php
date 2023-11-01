<?php

namespace App\Http\Controllers;

use App\Http\Resources\Employee\EmployeeResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title = "My Doc API",
 *     version = "1.0.0",
 *     description = "Описание API"
 * ),
 * 
 * @OA\PathItem(
 *     path="/api/"
 * ),
 */
class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/products",
     *     summary="GET products",
     *     tags={"Products"},
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="array", @OA\Items(
     *               @OA\Property(property="id", type="integer", example=1),
     *               @OA\Property(property="name", type="string", example="Some title"),
     *               @OA\Property(property="description", type="string", example="Some title"),
     *               @OA\Property(property="price", type="decimal", example=10.20),
     *               @OA\Property(property="category_id", type="integer", example=10),
     *             )),
     *         ),
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Ресурс не найден"
     *     )
     * )
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $employees = Employee::select('name')->whereNotNull('name')->get();
        $result = [
            'products' => ProductResource::collection($products),
            'employee_names' => $employees->pluck('name'),
        ];
    
        return $result;
    }

    /**
     *      
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
