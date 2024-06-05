<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Http\Response;

use App\Http\Resources\Blog\BlogResource;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Blog::query()->paginate(10);
            $result = [
                'data' => BlogResource::collection($data),
                'meta' => [
                    'current_page' => $data->currentPage(),
                    'last_page' => $data->lastPage(),
                    'per_page' => $data->perPage(),
                    'total' => $data->total(),
                ]
            ];
            return ApiResponse(true, Response::HTTP_OK,'Hiển thị thông tin thành công',$result);
        }catch (\Exception $e) {
            return ApiResponse(false,Response::HTTP_BAD_REQUEST,$e->getMessage(),null);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        try {
            $blog = Blog::query()->create($request->all());
            return ApiResponse(true,Response::HTTP_CREATED,'Thêm mới blog thành công',new BlogResource($blog));
        }catch (\Exception $e) {
            return ApiResponse(false,Response::HTTP_BAD_REQUEST,$e->getMessage(),null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $blog = Blog::query()->find($id);
            if(empty($blog)) {
                return ApiResponse(false,Response::HTTP_BAD_REQUEST,'Không tìm thấy thông tin',null);
            }
            return ApiResponse(true,Response::HTTP_OK,'Hiển thị thông tin thành công',new BlogResource($blog));
        }catch (\Exception $e){
            return ApiResponse(false,Response::HTTP_BAD_REQUEST,$e->getMessage(),null);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        try {
            $blog = Blog::query()->find($id);
            if(empty($blog)) {
                return ApiResponse(false,Response::HTTP_BAD_REQUEST,'Không tìm thấy thông tin',null);
            }
            $blog->update($request->all());
            return ApiResponse(true,Response::HTTP_OK,'Cập nhât thông tin thành công',new BlogResource($blog));
        }catch (\Exception $e){
            return ApiResponse(false,Response::HTTP_BAD_REQUEST,$e->getMessage(),null);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
