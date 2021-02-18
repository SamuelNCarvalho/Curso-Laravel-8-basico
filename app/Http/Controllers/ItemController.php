<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Show form
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages.add');
    }

    /**
     * Add new
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function addNew(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        $data = $request->only('description');
        $data['user_id'] = auth()->user()->id;

        Item::create($data);

        return redirect()->route('home');
    }

    /**
     * Remove item
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function remove(Item $item)
    {
        if ($item->user_id != auth()->user()->id) {
            abort(404);
        }

        $item->delete();

        return redirect()->route('home');
    }

}
