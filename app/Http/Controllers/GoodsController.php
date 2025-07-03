<?php

namespace App\Http\Controllers;

use App\Http\Resources\GoodsResource;
use App\Services\GoodsServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class GoodsController extends Controller
{
    public function __construct(
        protected GoodsServiceInterface $goodsService,
    )
    {

    }

    // todo: add validation
    public function list(Request $request) : JsonResponse
    {
        $goodsList = $this->goodsService->getGoods($request->currency);

        return response()->json(
            GoodsResource::collection($goodsList),
        );
    }
}
