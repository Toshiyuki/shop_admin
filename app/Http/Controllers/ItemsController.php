<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Item;

use App\Http\Requests\ItemRequest;

class ItemsController extends Controller
{
    //
    public function index(){
      // $posts = Post::orderBy('created_at', 'desc')->get();
      $items = Item::latest('created_at')->get();
      //dd($items->toArray());//dump + die
      // return view('items.index', ['items' => $posts]);
      return view('items.index')->with('items', $items);
    }

    public function show($id) {
      $item = Item::findOrFail($id);
      return view('items.show')->with('item', $item);
    }

    public function edit($id) {
      $item = Item::findOrFail($id);
      return view('items.edit')->with('item', $item);
    }

    public function destroy($id) {
      $item = Item::findOrFail($id);
      $item->delete();
      return redirect('/')->with('flash_message', '商品は削除されました');
    }

    public function create() {
      return view('items.create');
    }

    public function store(ItemRequest $request) {
      $item = new Item();
      $item->code = $request->code;
      $item->name = $request->name;
      $item->abname = $request->abname;
      $item->artist = $request->artist;
      $item->img = $request->img;
      $item->price = $request->price;
      $item->expl = $request->expl;
      $item->detail = $request->detail;
      $item->records = $request->records;
      $item->amounts = $request->amounts;
      $item->postage = $request->postage;
      $item->orderlimit = $request->orderlimit;
      $item->category = $request->category;
      $item->save();
      return redirect('/')->with('flash_message','商品が追加されました');
    }

    public function update(ItemRequest $request, $id) {
      $item = Item::findOrFail($id);
      $item->code = $request->code;
      $item->name = $request->name;
      $item->abname = $request->abname;
      $item->artist = $request->artist;
      $item->img = $request->img;
      $item->price = $request->price;
      $item->expl = $request->expl;
      $item->detail = $request->detail;
      $item->records = $request->records;
      $item->amounts = $request->amounts;
      $item->postage = $request->postage;
      $item->orderlimit = $request->orderlimit;
      $item->category = $request->category;
      $item->save();
      return redirect('/')->with('flash_message','商品が更新されました');
    }
}
