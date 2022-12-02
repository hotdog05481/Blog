<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $months = ['january' => '一月', 'february' => '二月', 'march' => '三月',
            'april' => '四月', 'may' => '五月', 'june' => '六月',
            'july' => '七月', 'august' => '八月', 'september' => '九月',
            'october' => '十月', 'november' => '十一月', 'december' => '十二月'];
        $month = 'december';

        $modes = ['recommend' => '編輯精選', 'season' => '當季商品', 'cp' => '超值商品'];
        $mode = 'cp';
        return view('posts.create', compact('months', 'month', 'modes', 'mode'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $request)
    public function store(PostRequest $request)
    {
        // dd($request->file('pic'));
        return $request->all();
        //驗證示範
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required | max:10',
        //     'desc' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     // dd($validator);
        //     return $validator;
        // }
        if ($request->hasFile('pic')) {
            $file = $request->file('pic'); //獲取UploadFile例項
            if ($file->isValid()) { //判斷檔案是否有效
                //filename = $file->getClientOriginalName(); //檔案原名稱
                $extension = $file->getClientOriginalExtension(); //副檔名
                $fileName = time() . "." . $extension; //重新命名
                //$data['pic'] = $fileName;
                $path = $file->storeAs('public/pic', $fileName); //儲存至指定目錄
            }
        }

        // return 'ok';

        // 取得完整檔名
        $filenameWithExt = $request->file('pic')->getClientOriginalName();
        //只取檔名
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //只取副檔名
        $extension = $request->file('pic')->getClientOriginalExtension();
        //生成新檔名
        $fileNameToStore = $filename . '.' . $extension;
        //儲存圖片
        $path = $request->file('pic')->storeAs('public/storage/pic', $fileNameToStore);

        return $path;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        //
    }

}
