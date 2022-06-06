<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\productModel;
use Illuminate\Http\Request;
use App\Helper\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        try {
            $id = $request->input('id');
            $limit = $request->input('limit', 6);
            $name = $request->input('name');
            $deskripsi = $request->input('deskripsi');
            $tags = $request->input('tags');
            $categories = $request->input('categories');

            $price_from = $request->input('price_from');
            $price_to = $request->input('price_to');

            if ($id) {
                $product = productModel::with(['category', 'galleries'])->find($id);

                if ($product)
                    return ResponseFormatter::success(
                        $product,
                        'Data produk berhasil diambil'
                    );
                else
                    return ResponseFormatter::error(
                        null,
                        'Data produk tidak ada',
                        404
                    );
            }

            $product = productModel::with(['category', 'galleries']);

            if ($name)
                $product->where('name', 'like', '%' . $name . '%');

            if ($deskripsi)
                $product->where('deskripsi', 'like', '%' . $deskripsi . '%');

            if ($tags)
                $product->where('tags', 'like', '%' . $tags . '%');

            if ($price_from)
                $product->where('harga', '>=', $price_from);

            if ($price_to)
                $product->where('harga', '<=', $price_to);

            if ($categories)
                $product->where('categories_id', $categories);

            return ResponseFormatter::success(
                $product->paginate($limit),
                'Data list produk berhasil diambil'
            );
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 'Authentication Failed', 500);
        }
    }
}
