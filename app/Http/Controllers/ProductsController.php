<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Resources\MediaResource;
use App\Http\Resources\ProductResouce;
use App\Models\Media;
use App\Models\Products;

use function Pest\Laravel\json;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $context = [];
        $products = Products::query()->paginate(50);
        $context['page_title'] = "View All Products";
        $context['messages'] = session();
        $context['products'] = ProductResouce::collection($products);


        // return view
        return view('dashboards.admin1.products.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Create A New Product";

        $files =  Media::query()->paginate(50);
        $context['medias'] = MediaResource::collection($files);
        // return view
        return view('dashboards.admin1.products.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $data = $request->validated();
        $data['attributes'] = "";
        // dd($data);
        Products::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Product Created.');

        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $context = [];
        $context['page_title'] = "Edit { $product->name } ";
        $context['product'] = $product;

        $files =  Media::query()->paginate(50);
        $context['medias'] = MediaResource::collection($files);
        // return view
        return view('dashboards.admin1.products.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $product)
    {
        $data = $request->validated();
        $product->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $product->name } Updated.");

        return to_route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
{
    $product->delete();
    return response()->json([
        'status' => true,
        'name' => $product->name,
        'message' => 'Deleted successfully'
    ]);
}
}
